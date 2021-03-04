// Example for frontend upload manager
// Special proto for MODx FileAttach extra
// Vitaly Chekryzhev <13hakta@gmail.com>, 2016

// Generate random ID for queue element
function generateRandomId() {
 var i, id = '', randPos, s = 'ABCDEFGHIJKLMNOPQRSTUVXYZ0123456789',
 l = s.length;

 for (i = 1; i <= 5; i++) {
  randPos = Math.floor(Math.random() * l);
  id += s[randPos];
 }

 return id;
}

var ajaxWrapper = (function() {
  var __construct = function(file) {
   var me = this;

   me.id = generateRandomId();
   me._file = file;
   me.onstart  = function() {};
   me.onupload = function() {};
   me.onerror  = function() {};
   me.onprogress = function(val) {};

   _error = function () {
    me.onerror(arguments);
   }
 }; // constructor

 return __construct;
})(),

UploadManager = (function() {
 var __construct = function() {
  if (!window.FormData) {
   alert('Update your browser to support FormData!');
   return;
  }

  var
    me = this,
    _queue = [],
    _isActive = false,
    xhr = new XMLHttpRequest();

  // Default handlers
  me.onerror = function() {};
  me.onstartall = function() {};
  me.onfinishall = function() {};
  me.onadd = function() { return true };

  // Start upload portion
  me._uploadNext = function() {
   var i, eventSource,
   formData = new FormData();

   _isActive = true;

   wrapper = _queue[0];
   wrapper.onstart();

   formData.append('action', 'mgr/upload');
   formData.append('docid', FileAttach.docid);
   formData.append('ctx', FileAttach.context);
   formData.append('file', wrapper._file);

   // Show upload progress
   eventSource = xhr.upload || xhr;
   eventSource.addEventListener("progress", function(evt) {
    if (evt.lengthComputable) {
     var percentComplete = Math.round(10000 * (evt.loaded / evt.total)) / 100;
     wrapper.onprogress(percentComplete);
    }
   }, false);

   // State handler
   xhr.onreadystatechange = function () {
    if (this.readyState == 4) { // strike when finished
     
     switch (this.status) {
      case 0:
       break;

      case 200:
       wrapper.onupload(JSON.parse(this.responseText));
       me._shift();
       break;

      default: _error(wrapper, 'Connection error: ' + this.status);
     }
    }
   }

   // Start upload
   xhr.open("POST", FileAttach.connector, true);
   xhr.send(formData);
  }; // submit

  me._shift = function() {
   delete _queue[0];
   _queue.shift(0, 1);

   if (_queue.length == 0) {
    _isActive = false;
    me.onfinishall();
    return;
   }

   if (_isActive) me._uploadNext();
  };

  me._error = function() {
   me.onerror(arguments);
   me._shift();
  };

  $().ajaxError(function(event, XMLHttpRequest, ajaxOptions, thrownError){
   me._error(arguments, _queue[0]);
   me._shift();
  });

  me.start = function() {
   if (_queue.length > 0) {
    me.onstartall();
    me._uploadNext();
   }
  };

  me.stop = function() {
   if (_isActive) {
    xhr.abort();
    _isActive = false;
   }
  };

  me.remove = function(id) {
   var index = -1, i;

   for (i = 0; i < _queue.length; i++) {
    if (_queue[i].id == id) {
     index = i;
     break;
    }
   }

   if (index == -1) return;
   if (index == 0) me.stop();

   delete _queue[index];
   _queue.splice (index, 1);

   if (_queue.length == 0) {
    _isActive = false;
    me.onfinishall();
    return;
   }

   if (index == 0) me._uploadNext();
  };

  // HTML5 add
  me.add5 = function(filelist) {
   var ajaxObj;

   try {
    $.each(filelist, function(i, file) {
     ajaxObj = new ajaxWrapper(file);
     if (me.onadd(ajaxObj)) _queue.push(ajaxObj); else return false;
    });

    if (!_isActive) me.start();
   } catch(e) {
    _error(e, filelist);
   }
  };

  // Add from file input
  me.add = function(evt) {
   jForm = $(evt.target);
   var filefield = jForm.find(":file");
   if (filefield.val() == "") return false;

   me.add5(filefield[0].files);

   return false;
  };

  me.isActive = function() {
   return _isActive;
  };
 };

 return __construct;
})();
