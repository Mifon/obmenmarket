// Example for frontend upload manager
// Special proto for MODx FileAttach extra
// Vitaly Chekryzhev <13hakta@gmail.com>, 2016

var FileArea = (function() {
    var __construct = function(htmlObj, uplist, stat, uploader) {
        var queue = 0,
        me = this;

        me.div = htmlObj;
        me.upload_div = uplist;
	me.stat_div = stat;
	me.uploader = uploader;
        htmlObj[0].area = me;

        me.add = function(form) {
	 var ui = new UploadItem(me, form);

         form.onstart = ui.uploadstart;
         form.onupload = ui.uploadfinish;
         form.onerror = ui.uploaderror;
         form.onprogress = ui.progress;

         if (typeof form.uploadFinishCallback == 'function'){
	  ui.uploadFinishCallback = form.uploadFinishCallback;
         }

         if (typeof form.uploadErrorCallback == 'function'){
          ui.uploadErrorCallback = form.uploadErrorCallback;
         }

         ui.createBox(form._file);

	 queue++;
	 me.status('In queue: ' + queue + ' tasks');
         return true;
        }

        me.status = function(msg) {
	 me.stat_div.html(msg);
        }

        me.removeU = function(obj) {
         obj.div.remove();
         delete obj;

	 queue--;
	 me.status('In queue: ' + queue + ' tasks');
        }

        me.remove = function(FileItem) {
	 var aSel = me.selected(), i,
	 aSelID = [];

	 // Create fID list
	 if (aSel.length > 0) {
          for (i = 0; i < aSel.length; i++){
	   if (aSel[i].fitem.id != '')
	    aSelID.push(aSel[i].fitem.id);

           aSel[i].fitem.div.remove();
           delete aSel[i].fitem;
	  }
	 } else {
	  if (FileItem.id != '') aSelID.push(FileItem.id);

          FileItem.div.remove();
          delete FileItem;
	 }

	 if (aSelID.length > 0)
            $.post(FileAttach.connector, { action: 'web/remove', ctx: FileAttach.context, docid: FileAttach.docid, ids: JSON.stringify(aSelID) } );
        }

        me.selected = function() {
         return me.div.find('.file_wrap.ui-selected');
        }

	// Import data
        me.import = function(info) {
	 var key, fitem;

         if (info.message) {
          me.stat_div.html(info.message);
          return;
         }

         for (key in info.results) {
          fitem = new FileItem(me);

          fitem.id = info.results[key].id;
          fitem.fid = info.results[key].fid;
          fitem.title = info.results[key].name;

          fitem.createBox();
         }
        }
    }

    return __construct;
})(),

UploadItem = (function() {
 var __construct = function(manager, form) {
  var me = this;

  me.div = undefined;
  me.manager = manager;
  me.form = form;

  me.createBox = function(file) {
   me.div = $('<div class="up"><div class="info">' + file.name + '</div><div class="overbtn ob_delete"></div><div class="progress"><div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">awaiting</div></div></div>');
   me.div.find(".ob_delete").click(function(){ me.remove(true) });

   $(me.manager.upload_div).append(me.div);
   me.div.get(0).uploader = me;
  }

  me.remove = function(clicked) {
   if (clicked)
    me.manager.uploader.remove(me.form.id);
   me.manager.removeU(me);
  }

  me.progress = function (val) {
   if (!me.progressBar) me.progressBar = me.div.find('.progress-bar');
   me.progressBar.css('width', val + '%');
   me.progressBar.html(val + '%');
   me.progressBar.attr('aria-valuenow', val);
  }

  me.uploaderror = function(e) {
   me.uploadErrorCallback();

   me.error = 1;
   me.progressBar.addClass('progress-bar-danger');
   me.progressBar.html(e[1]);
  }

  me.uploadstart = function() {
   me.progress(0);
  }

  me.uploadfinish = function (info) {
   me.uploadFinishCallback();

   if (info.message) {
    me.uploaderror([0, info.message]);
    return;
   }

   me.progressBar = false;

   me.manager.import(info);
   me.remove();
  }

  me.uploadFinishCallback = function(){};
  me.uploadErrorCallback = function(){};
 }

 return __construct;
})(),

FileItem = (function() {
 var __construct = function(area) {
  var me = this;

  me.id = 0;
  me.fid = '';
  me.title = '';
  me.div = undefined;
  me.area = area;

  me.remove = function() {
   me.area.remove(me);
  }

  me.createBox = function() {
   me.div = $('<div class="file_wrap"><a class="overbtn ob_download" href="' +
	FileAttach.connector + '?action=web/download&ctx=' + FileAttach.context + '&fid=' + me.fid +
	'"></a><div class="overbtn ob_delete"></div><div class="title">' + me.title + '</div></div>');

   $(me.area.div).append(me.div);
   me.div.get(0).fitem = me;

   me.div.find(".ob_delete").click(me.remove);

   me.div.click(function(e) {
    if (e.ctrlKey == false)
     me.area.div.find(".file_wrap.ui-selected").removeClass("ui-selected"); // Deselect all

    me.div.toggleClass("ui-selected"); // Select current
   });
  }
 }

 return __construct;
})();

// Initialize UI
$(function() {
 FileUpload = new UploadManager();
 FileList = $('#filelist');
 dropBox = $('#upload');
 FArea = new FileArea(FileList,
    $("#uploadlist"),
    $("#uploadstat"),
    FileUpload);

 FileUpload.onadd = FArea.add;

 FileUpload.onstartall = function() {
  $('a').not("a[href^='javascript:']").attr('target', '_blank');
  window.onbeforeunload = function() { return 'If you close or update page then upload will abort.' };
 };

 FileUpload.onfinishall = function() {
  $('a').not("a[href^='javascript:']").attr('target', '_self');
  window.onbeforeunload = function(){};
 };

 FileUpload.onerror = function(e) { try { e[0].onerror(e); } catch(err) { alert(err.message); } };

 $('#addUpload').submit(FileUpload.add);

 FileList.selectable({filter: '.file_wrap', autoRefresh: true, delay:50});

 // Handle drag and drop events while dropping items on dropBox
 dropBox.bind('dragenter', function() {
  dropBox.removeClass('alert-info');
  dropBox.addClass('alert-success');
  dropBox.html('<strong>Drop!</strong>');
  return false;
 });

 dropBox.bind('dragleave', function() {
  dropBox.addClass('alert-info');
  dropBox.removeClass('alert-success');
  dropBox.html('Drag files here');
  return false;
 });

 dropBox.bind('dragover', function() { return false; });

 dropBox.bind('drop', function(e) {
  var dt = e.originalEvent.dataTransfer;
  dropBox.addClass('alert-info');
  dropBox.removeClass('alert-success');
  dropBox.html('Drag files here');
  FileUpload.add5(dt.files);
  return false;
 });

 $('#tab_page1').tab('show');

 // Initial list load
 $.getJSON(FileAttach.connector, {
    action: 'web/getlist',
    ctx: FileAttach.context,
    docid: FileAttach.docid,
    limit: 0}, function(data) {
  if (data.success) FArea.import(data);
 });
});
