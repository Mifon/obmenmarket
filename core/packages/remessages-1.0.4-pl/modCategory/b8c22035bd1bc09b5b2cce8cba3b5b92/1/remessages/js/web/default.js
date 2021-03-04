var reMessages = {
    config: {
        wrapper: '#reMessages',
        send_message: '.send_message',
    },
    init: function() {
        reMessages.initPopstate();
        reMessages.initThreads();
        reMessages.initMessages();
        reMessages.checkOnline();
        reMessages.initFancybox();
    },
    initPopstate: function() {
        window.addEventListener('popstate', function(event) {
            reMessages.handleRequest('getPageContent', null, false);
        });
    },
    initThreads: function() {
        $(document).on('click', '.thread_wrap', function() {
            var identifier = $(this).data('identifier');
            reMessages.handleRequest('getDialog', {identifier: identifier});
            reMessages.setDialogHeight();
            return false;
        });
    },
    initMessages: function() {
        reMessages.initKemoji();
        reMessages.showTotal();
        reMessages.textareaFocus();
        reMessages.addFancyboxClass();
        $(document).on('click', '.dialog_header .back', function() {
            reMessages.handleRequest('getThreads');
            return false;
        });
        $(document).on('submit', reMessages.config.send_message, function() {
            var message = reMessages.kemoji.getValue(); //$(this).find('textarea[name="text"]').val();
            var reply = $(this).find('input[name="reply"]').val();
            var files = $(this).find('input[name="files"]').val();
            reMessages.handleRequest('sendMessage', {text: message, reply: reply, files: files}, false, true, false);
            return false;
        });
        document.addEventListener('keydown', function(event) {
          /* if ($(reMessages.config.send_message).find('textarea[name="text"]').is(':focus')) { */
          if ($(reMessages.config.send_message).find('#rmMessageText').is(':focus')) {
              if (event.code == 'Enter') {
                  if (!event.ctrlKey && !event.shiftKey) {
                      event.preventDefault();
                      $(reMessages.config.send_message).submit();
                  }
                  return false;
              }
          }
        });
        $(document).on('click', '.insert_smile', function() {
            kemoji.showSmiles();
            $('.KEmoji_Cont').show();
        });
        $(document).on('click', '.reply_btn', function() {
            var id = $(this).parents('.message_wrap').data('id');
            $(reMessages.config.send_message).find('input[name="reply"]').val(id);
            
            var close = '<span class="float-right cancel_reply fa fa-times"></span>'
            var name = $(this).parents('.message_wrap').find('.author_name').text();
            var text = $(this).parents('.message_wrap').find('.message_text').text().substr(0, 70);
            if (text != $(this).parents('.message_wrap').find('.message_text').text()) {
                text += '&#8230;';
            }
            if (!text) {
                text = '<span class="text-muted">Сообщение</span>';
            }
            
            $(reMessages.config.send_message).find('.text_preview').html('<blockquote>' + close + '<b>' + name + '</b><br>' + text + '</blockquote>');
            $(reMessages.config.send_message).find('.text_preview').slideDown(100);
        });
        $(document).on('click', '.cancel_reply', function(){
            $(reMessages.config.send_message).find('input[name="reply"]').val('');
            $(reMessages.config.send_message).find('.text_preview').slideUp(100);
            setTimeout(function(){
                $(reMessages.config.send_message).find('.text_preview').html('');
            }, 200);
        });
        $(document).on('click', '.attach_file', function(){
            $('.dialog_form input[name="upload_files"]').click();
        });
        $(document).on('change', 'input[name="upload_files"]', function(){
            $('.attach_file .fa').removeClass('fa-paperclip').addClass('fa-spinner').parent().prop('disabled', true);
            var files = this.files;
            if( typeof files == 'undefined' ) return;
            var data = new FormData();
            $.each(files, function(key, value){
                data.append(key, value);
            });
            data.append('action', 'uploadFile');
            data.append('component', 'reMessages');
            var file_list = JSON.parse($('input[name="files"]').val());

            $.ajax({
                url: document.location.href,
                type: 'POST',
                data: data,
                cache: false,
                dataType: 'json',
                processData: false,
                contentType: false, 
                success: function(response, status, jqXHR){
                    if (response.success) {
                        $('input[name="upload_files"]').val('');
                        file_list = JSON.parse($('input[name="files"]').val());
                        for (var i = 0; i < response.data.length; i++) {
                            if (response.data[i].url) {
                                file_list.push(response.data[i].url);
                                $('.attach_preview').append('<div class="image_preview"><img src="' + response.data[i].thumb + '" data-url="' + response.data[i].url + '" height="80" alt=""><i class="fa fa-times"></i></div>');
                            } else if (response.data[i].error) {
                                PNotify.error({
                                  title: 'Ошибка загрузки',
                                  text: response.data[i].error
                                });
                            }
                        }
                        $('input[name="files"]').val(JSON.stringify(file_list));
                    } else {
                        PNotify.error({
                          title: 'Ошибка загрузки',
                          text: response.error,
                        });
                    }
                    $('.attach_file .fa').removeClass('fa-spinner').addClass('fa-paperclip').parent().prop('disabled', false);
                },
                error: function( jqXHR, status, errorThrown ){
                  PNotify.error({
                    title: 'Ошибка AJAX запроса',
                    text: status + '. ' + jqXHR,
                  });
                  $('.attach_file .fa').removeClass('fa-spinner').addClass('fa-paperclip').parent().prop('disabled', false);
                }
            });
        });
        $(document).on('click', '.image_preview i', function() {
            var url = $(this).parent().find('img').data('url');
            var file_list = JSON.parse($('input[name="files"]').val());
            for (var i = 0; i < file_list.length; i++) {
                if (file_list[i] == url) {
                    file_list.splice(i, 1);
                    $(this).parent().remove();
                    break;
                }
            }
            $('input[name="files"]').val(JSON.stringify(file_list));
        });
        if ($('.dialog_messages').length > 0) {
            reMessages.setDialogHeight();
            reMessages.scrollDialog();
        }
    },
    addFancyboxClass: function() {
        $(reMessages.config.wrapper).find('.message_wrap .media-body a').each(function(){
            if ($(this).find('img').length == 1) {
                $(this).addClass('rmFancybox');
            }
        });
    },
    handleRequest: function(action, request, addHistory = true, animate = true, scroll = true) {
        if (!request) {
            request = {};
        }
        request.component = 'reMessages';
        request.action = action;
        if (animate) {
            $(reMessages.config.wrapper).css('opacity', 0.8);
            $(reMessages.config.wrapper).find('input, textarea').attr('disabled', true);
        }
        $.post(document.location.href, request, function(res) {
            if (res.success) {
                $(reMessages.config.wrapper).html(res.data);
                if (res.url && addHistory) {
                    history.pushState({url: res.url}, null, res.url);
                }
                if (animate) {
                    $(reMessages.config.wrapper).css('opacity', 1);
                    $(reMessages.config.wrapper).find('input, textarea').attr('disabled', false);
                }
                if (animate && scroll) {
                    reMessages.scrollWrapper();
                }
                if ($('.dialog_messages').length > 0) {
                    reMessages.setDialogHeight();
                    reMessages.scrollDialog();
                }
                reMessages.checkOnline();
                reMessages.showTotal();
                reMessages.addFancyboxClass();
                reMessages.initFancybox();
                reMessages.initKemoji();
                reMessages.textareaFocus();
            }
        }, 'json');
    },
    scrollWrapper: function() {
        var topnav_height = parseFloat($('.lk-topnav').css('height'));
        var offset_top = $(reMessages.config.wrapper).offset().top - topnav_height;
        $('html,body').animate({scrollTop: offset_top + "px"}, 500);
    },
    setDialogHeight: function() {
        var dialog_height = document.documentElement.clientHeight;
        dialog_height -= parseFloat($('.dialog_header').css('height'));
        dialog_height -= parseFloat($('.dialog_form').css('height'));
        dialog_height -= 200;
        $('.dialog_messages').css('height', dialog_height + 'px');
    },
    scrollDialog: function() {
        if ($(".message_wrap").last().length > 0) {
            $(".dialog_messages").scrollTop($(".message_wrap").last().position().top);
        }
    },
    newMessage: function(res) {
        if (res.server_info.event == 'message') {
          PNotify.defaults.delay = 1500
          PNotify.notice({
            title: res.data.name,
            text: res.data.text
          });
          var audio = new Audio('reMessages/assets/components/remessages/js/web/msg.mp3');
          audio.play();
          reMessages.handleRequest('getPageContent', null, false, false);
        }
        
        if (res.server_info.event == 'read') {
            if ((
                $('.dialog_header').length > 0 &&
                $('.dialog_header').data('identifier') == res.data.identifier &&
                $('.message_wrap.unread').length > 0
              ) ||
              (
                $('.thread_wrap').length > 0 &&
                $('.thread_wrap.' + res.data.identifier).find('.thread_count').length > 0
              )
            ) {
                reMessages.handleRequest('getPageContent', null, false, false);
            }
        }
    },
    checkOnline: function() {
        $(document).find('.status_holder').each(function(){
            var id = parseInt($(this).data('identifier').replace('id', ''));
            if (id) {
                cometApi.subscription("user_status_" + id + ".online", function(event) {
                    $(this).html('Online').removeClass('text-muted').addClass('text-success');
                });
                cometApi.subscription("user_status_" + id + ".offline", function(event) {
                    $(this).html('Offline').removeClass('text-success').addClass('text-muted');
                });
            }
        });
    },
    showTotal: function() {
        $.post(document.location.href, {component: 'reMessages', action: 'getTotal'}, function(res) {
            if (res.success) {
                var count = res.data;
                if (count > 0) {
                    if ($('.reMessages_total').length > 0) {
                        $('.reMessages_total').each(function(){
                            if ($(this).find('.count').length == 0) {
                                $(this).append('<span class="count badge badge-primary"></span>');
                            }
                            $(this).find('.count').html(count);
                        });
                    }
                } else {
                    if ($('.reMessages_total .count').length > 0) {
                        $('.reMessages_total .count').remove();
                    }
                }
            }
        }, 'json');
    },
    textareaFocus: function() {
        if ($(reMessages.config.send_message).find('#rmMessageText').length > 0) {
            setTimeout(function() {
              $(reMessages.config.send_message).find('#rmMessageText').focus();
            }, 0);
        }
    },
    initFancybox: function() {
        $(".rmFancybox").fancybox({
            padding: 0,
        
            minWidth: 100,
            minHeight: 100,
        
            maxWidth: 800,
            maxHeight: 600,
        
            autoPlay: false,
            playSpeed: 3000,
        
            openEffect: "elastic",
            openSpeed: 150,
        
            closeEffect: "elastic",
            closeSpeed: 150,
        
            closeClick: true,
            titleShow: false,
            loop: false,
            title: "",
        
            helpers: {
                overlay: {
                    closeClick: true,
                    speedOut: 200,
                    showEarly: true,
                    css: {},
                    locked: true
                }
            }
        });
    },
    initKemoji: function() {
        if ($(document).find('#rmMessageText').length > 0) {
            reMessages.kemoji = KEmoji.init('rmMessageText', {height: 100});
            $(document).on('click', '.KEmoji_Smile', function() {
                reMessages.kemoji.hideSmiles();
                reMessages.textareaFocus();
            });
        }
    },
}
reMessages.init();