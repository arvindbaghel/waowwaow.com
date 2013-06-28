function setCookie(c_name,value,exdays) {
    var exdate=new Date();
    exdate.setDate(exdate.getDate() + exdays);
    var c_value=escape(value) + ((exdays==null) ? " ;path=/;" : "; expires="+exdate.toUTCString() + '; path=/;');
    document.cookie=c_name + "=" + c_value;
}
function getCookie(c_name) {
    var i,x,y,ARRcookies=document.cookie.split(";");
    for (i=0;i<ARRcookies.length;i++) {
        x=ARRcookies[i].substr(0,ARRcookies[i].indexOf("="));
        y=ARRcookies[i].substr(ARRcookies[i].indexOf("=")+1);
        x=x.replace(/^\s+|\s+$/g,"");
        if (x==c_name) {
            return unescape(y);
        }
    }
}

function addSessionCook(id, name) {
    var sSessions = getCookie('afchatses');
    var sSessionNames = getCookie('afchatsesn');
    if (sSessions != undefined && sSessionNames != undefined) {
        var aSess = sSessions.split("|"); 
        var aSessN = sSessionNames.split("|"); 
    } else {
        var aSess = new Array();
        var aSessN = new Array();
        sSessions = '';
        sSessionNames = '';
    }

    if ($.inArray(id, aSess) == -1) {
        aSess.push(id);
        aSessN.push(name);
        sSessions = aSess.join('|');
        sSessionNames = aSessN.join('|');
        setCookie('afchatses', sSessions);
        setCookie('afchatsesn', sSessionNames);
    } else {
        // setCookie('afchatses', '');
        // setCookie('afchatsesn', '');
    }
}

function afcProcessSmiles(text) {
    var emoticons = {
        ':)' : '<i class="smile"></i>',
        ':(' : '<i class="frown"></i>',
        ':P' : '<i class="tongue"></i>',
        '=D' : '<i class="grin"></i>',
        ':o' : '<i class="gasp"></i>',
        ';)' : '<i class="wink"></i>',
        ':v' : '<i class="pacman"></i>',
        '>:(' : '<i class="grumpy"></i>',
        ':-/' : '<i class="unsure"></i>',
        ':\'(' : '<i class="cry"></i>',
        '^_^' : '<i class="kiki"></i>',
        '8)' : '<i class="glasses"></i>',
        'B|' : '<i class="sunglasses"></i>',
        '^v^' : '<i class="heart"></i>',
        '3:)' : '<i class="devil"></i>',
        'O:)' : '<i class="angel"></i>',
        '-_-' : '<i class="squint"></i>',
        'o.O' : '<i class="confused"></i>',
        '>:o' : '<i class="upset"></i>',
        ':3' : '<i class="colonthree"></i>',
        '(y)' : '<i class="like"></i>'
    }, patterns = [], metachars = /[[\]{}()*+?.\\|^$\-,&#\s]/g;

    // build a regex pattern for each defined property
    for (var i in emoticons) {
        if (emoticons.hasOwnProperty(i)){ // escape metacharacters
            patterns.push('('+i.replace(metachars, "\\$&")+')');
        }
    }

  // build the regular expression and replace
  return text.replace(new RegExp(patterns.join('|'),'g'), function (match) {
    return typeof emoticons[match] != 'undefined' ?
           emoticons[match] :
           match;
  });
}

function toggleSmilesBar(s) {
    s = s.toString();
    $('.priv_chat_tab#pcid'+s+' .pc_emm_togg').toggleClass('pc_emm_togg_act');
    $('.priv_chat_tab#pcid'+s+' .pc_emm').toggleClass('pc_emm_act');
}

function afcToggleVisSess(id, bself) { // toggle visibility
    id = id.toString();
    if (bself == true) {
        $('.priv_dock_wrap_sessions #pcids'+id).toggleClass('pcs_inactive');
    }

    $('.priv_chat_tab#pcid'+id).toggleClass('priv_chat_tab_invisible');

    var aVisSes = new Array();

    // toggle vis state cookies
    var sVisSes = getCookie('afchatgvis');
    if (sVisSes != undefined) {
        aVisSes = sVisSes.split("|"); 
    } else {
        sVisSes = '';
    }
    if ($.inArray(id, aVisSes) == -1) {
        aVisSes.push(id);
    } else {
        //aVisSes.pop(id);

        aVisSes = jQuery.grep(aVisSes, function(value) {
          return value != id;
        });
    }
    sVisSes = aVisSes.join('|');
    setCookie('afchatgvis', sVisSes);
}
function afcToggleMinSess(id) {
    id = id.toString();
    $('.priv_chat_tab#pcid'+id).toggleClass('priv_chat_tab_min');

    // toggle min state cookies
    var sMinSes = getCookie('afchatgmin');
    if (sMinSes != undefined) {
        var aMinSes = sMinSes.split("|"); 
    } else {
        var aMinSes = new Array();
        sMinSes = '';
    }
    if ($.inArray(id, aMinSes) == -1) {
        aMinSes.push(id);
    } else {
        //aMinSes.pop(id);

        aMinSes = jQuery.grep(aMinSes, function(value) {
          return value != id;
        });
    }
    sMinSes = aMinSes.join('|');
    setCookie('afchatgmin', sMinSes);
}
function afcCloseSess(id) {
    id = id.toString();

    $('.priv_dock_wrap .priv_chat_tab#pcid'+id).remove();
    $('.priv_dock_wrap_sessions #pcids'+id).remove();

    // remove from cookies
    var sSessions = getCookie('afchatses');
    var sSessionNames = getCookie('afchatsesn');
    if (sSessions != undefined && sSessionNames != undefined) {
        var aSess = sSessions.split("|");
        var aSessN = sSessionNames.split("|");
        var i = $.inArray(id, aSess);
        if (~i) {
            if (typeof aSess[i] != 'undefined' && aSess[i] != '' && aSess[i] == id) {
                aSess.splice(i, 1);
                aSessN.splice(i, 1);
                sSessions = aSess.join('|');
                sSessionNames = aSessN.join('|');
                setCookie('afchatses', sSessions);
                setCookie('afchatsesn', sSessionNames);
            }
        }
    }
}

var sFWinOrigTitle = document.title;
var iFchatTimeout = 0;
var iNewMsgCnt = 0;
function toggleTitle(id) {
    iNewMsgCnt++;
    if (iFchatTimeout == 0) {
        iFchatTimeout = setTimeout('toggleTitleUpd('+id+')', 1500);
    } /*else {
        clearTimeout(iFchatTimeout);
    }*/
}
function toggleTitleUpd(id) {
    $('.priv_dock_wrap .priv_chat_tab#pcid'+id + ' .priv_title span').toggleClass('fpc_h');
    document.title = $($('.priv_dock_wrap .priv_chat_tab#pcid'+id + ' .priv_title span')[0]).hasClass('fpc_h') ? sFchatTogg + ' ('+iNewMsgCnt+')' : sFWinOrigTitle;

    iFchatTimeout = setTimeout('toggleTitleUpd('+id+')', 1500);
}
function stopToggleTitle(id) {
    clearTimeout(iFchatTimeout);
    iFchatTimeout = 0;
    $($('.priv_dock_wrap .priv_chat_tab#'+id + ' .priv_title span')[0]).removeClass('fpc_h');
    $($('.priv_dock_wrap .priv_chat_tab#'+id + ' .priv_title span')[1]).addClass('fpc_h');
    document.title = sFWinOrigTitle;
    iNewMsgCnt = 0;
}

$.fn.extend({
insertAtCaret: function(myValue){
  return this.each(function(i) {
    if (document.selection) {
      //For browsers like Internet Explorer
      this.focus();
      var sel = document.selection.createRange();
      sel.text = myValue;
      this.focus();
    }
    else if (this.selectionStart || this.selectionStart == '0') {
      //For browsers like Firefox and Webkit based
      var startPos = this.selectionStart;
      var endPos = this.selectionEnd;
      var scrollTop = this.scrollTop;
      this.value = this.value.substring(0, startPos)+myValue+this.value.substring(endPos,this.value.length);
      this.focus();
      this.selectionStart = startPos + myValue.length;
      this.selectionEnd = startPos + myValue.length;
      this.scrollTop = scrollTop;
    } else {
      this.value += myValue;
      this.focus();
    }
  });
}
});

var oIncSnd = new Audio(site_url + 'modules/andrew/fchat/data/income.wav');
var oOutSnd = new Audio(site_url + 'modules/andrew/fchat/data/outcome.wav');

$(function() {

    oIncSnd.volume = 0.9;
    oOutSnd.volume = 0.9;

    $('.iopen').click(function(event) {
        event.stopPropagation();
        event.preventDefault();

        $('.slideout').animate( { right:"150px" }, 500 ) ;
        $('.slideout_inner').animate( { right:"0px" }, 500 ) ;
        $('.priv_dock_wrap').animate( { right:"225px" }, 500 ) ;

    });
    $('.iclose').click(function(event) {
        event.stopPropagation();
        event.preventDefault();

        $('.slideout').animate( { right:"0px" }, 500 ) ;
        $('.slideout_inner').animate( { right:"-250px" }, 500 ) ;
        $('.priv_dock_wrap').animate( { right:"5px" }, 500 ) ;
    });

    initiatePrivateChat = function(id, name) {
        var oPChat = $('.priv_dock_wrap .priv_chat_tab#pcid'+id);
        if (! oPChat.length) {

            // toggle min state cookies
            var sCurMin = ''; //  min
            var sMinSesCheck = getCookie('afchatgmin');
            if (sMinSesCheck != undefined) {
                var aMinSesCheck = sMinSesCheck.split("|");
                // alert(id + ' check: ' + $.inArray(id, aMinSesCheck));
                if ($.inArray(id, aMinSesCheck) != -1) {
                    sCurMin = ' priv_chat_tab_min';
                }
            }

            var sCurVis = ''; //  visible
            var sCurVisS = ''; //  visible
            var sVisSesCheck = getCookie('afchatgvis');
            if (sVisSesCheck != undefined) {
                var aVisSesCheck = sVisSesCheck.split("|");
                // alert(id + ' check: ' + $.inArray(id, aVisSesCheck));
                if ($.inArray(id, aVisSesCheck) != -1) {
                    //sCurVis = ' priv_chat_tab_visible';
                } else {
                    sCurVis = ' priv_chat_tab_invisible';
                    sCurVisS = 'class="pcs_inactive"';
                }
            }

            var bFchatVimIcon = (bFchatVim) ? '<img src="modules/andrew/fchat/templates/base/images/vim.png" class="vim" />' : '';
            var sPCTemplate = '<div class="priv_chat_tab'+sCurMin+sCurVis+'" id="pcid'+id+'"><div class="wwrap">'+
'    <div class="priv_title"><span>'+name+'</span><span class="fpc_h">'+sFchatTogg+'</span>'+bFchatVimIcon+'<img src="modules/andrew/fchat/templates/base/images/hist.png" class="hist" onclick="window.open(\'m/fchat/history/'+id+'\',\'_self\');" /><img src="modules/andrew/fchat/templates/base/images/close.png" class="ipcclose" /></div>'+
'    <div class="priv_conv afc_emm"></div>'+
'    <div class="priv_input">'+
'        <form class="priv_chat_submit_form">'+
'            <input type="hidden" name="recipient" value="'+id+'" />'+
// '            <input type="text" name="message" />'+
'            <textarea name="message"></textarea>'+
'            <div class="pc_emm_togg"></div><div class="pc_emm"><i class="smile"></i><i class="frown"></i><i class="tongue"></i><i class="grin"></i>'+
'<i class="gasp"></i><i class="wink"></i><i class="pacman"></i><i class="grumpy"></i><i class="unsure"></i><i class="cry"></i><i class="kiki"></i><i class="glasses"></i>'+
'<i class="sunglasses"></i><i class="heart"></i><i class="devil"></i><i class="angel"></i><i class="squint"></i><i class="confused"></i><i class="upset"></i>'+
'<i class="colonthree"></i><i class="like"></i></div>'+
'        </form>'+
'    </div>'+
'</div></div>';

            $('.priv_dock_wrap').append(sPCTemplate);
            $('.priv_dock_wrap_sessions').prepend('<div id="pcids'+id+'" onclick="afcToggleVisSess('+id+', true)" '+sCurVisS+'>'+name+'<img src="modules/andrew/fchat/templates/base/images/close.png" onclick="afcCloseSess('+id+')" /></div>');

            // bind onclick events
            $('.priv_chat_tab#pcid'+id+' .priv_title img.ipcclose').bind('click', function() {
                afcCloseSess(id);
            });
            $('.priv_chat_tab#pcid'+id+' .priv_title').bind('click', function() {
                afcToggleMinSess(id);
            });
            if (bFchatVim) {
                $('.priv_chat_tab#pcid'+id+' .priv_title img.vim').bind('click', function() {
                    openRayWidget('im', 'user', iFchatPid, iFchatPas, id);return false;
                });
            }

            // bind onsubmit event
            /*$('.priv_chat_tab#pcid'+id+' .priv_chat_submit_form').bind('submit', function() {
                var message = $('.priv_chat_tab#pcid'+id+' .priv_chat_submit_form textarea[name=message]').val();
                if (message.length > 2) {
                    $.post('m/fchat/action/priv_message/', { priv_message: message,
                        recipient: $('.priv_chat_tab#pcid'+id+' .priv_chat_submit_form input[name=recipient]').val() }, 
                        function(data){
                            $('.priv_chat_tab#pcid'+id+' .priv_chat_submit_form textarea[name=message]').val('');

                            getPrivateMessages(id, function() {
                                $('.priv_chat_tab#pcid'+id+' .priv_conv').animate({
                                    scrollTop: $('.priv_chat_tab#pcid'+id+' .priv_conv > :last-child').offset().top
                                }, 1000);
                            });
                        }, "json"
                    );
                    // oOutSnd.currentTime = 0;
                    // oOutSnd.play();
                }
                return false; 
            });*/
            $('.priv_chat_tab#pcid'+id+' .priv_chat_submit_form textarea').keydown(function(e){
                // Enter was pressed without shift key
                if (e.keyCode == 13 && e.shiftKey) {
                    // prevent default behavior

                    // $(this).val($(this).val() + "\n");
                    $(this).insertAtCaret("\n");
                    if ($(this).height() < 74) {
                        $(this).height($(this).height() + 16);
                    } else {
                        $(this).scrollTop($(this).offset().top);
                    }

                    e.preventDefault();
                    return false;
                }

                // submitting
                if (e.keyCode == 13) {
                    e.preventDefault();
                    var message = $('.priv_chat_tab#pcid'+id+' .priv_chat_submit_form textarea[name=message]').val();
                    if (message.length >= 2) {

                        $('.priv_chat_tab#pcid'+id+' .priv_chat_submit_form textarea[name=message]').val('');

                        sPreMsg = '<div id="message_new" class="message">'+iFchatPthumb+'<b><a target="_self" href="profile.php?ID='+id+'">'+iFchatPname+':</a></b> '+message+'<span>(just now)</span><div class="clear_both"></div></div>';
                        $('.priv_chat_tab#pcid'+id+' .priv_conv').append(sPreMsg);

                        $.post('m/fchat/action/priv_message/', { priv_message: message,
                            recipient: $('.priv_chat_tab#pcid'+id+' .priv_chat_submit_form input[name=recipient]').val() }, 
                            function(data){

                                getPrivateMessages(id, function() {
                                    $('.priv_chat_tab#pcid'+id+' .priv_conv').animate({
                                        scrollTop: $('.priv_chat_tab#pcid'+id+' .priv_conv > :last-child').offset().top
                                    }, 1000);
                                });
                            }, "json"
                        );
                        // oOutSnd.currentTime = 0;
                        // oOutSnd.play();
                    }
                    return false; 
                }
            });

            // smiles
            $('.priv_chat_tab#pcid'+id+' .pc_emm_togg').click(function(e) {
                toggleSmilesBar(id);
            });
            $('.priv_chat_tab#pcid'+id+' .pc_emm i').click(function(e) {
                var sc = this.className;
                switch(sc) {
                    case 'smile': $('.priv_chat_tab#pcid'+id+' .priv_chat_submit_form textarea').insertAtCaret(':)'); toggleSmilesBar(id); break;
                    case 'frown': $('.priv_chat_tab#pcid'+id+' .priv_chat_submit_form textarea').insertAtCaret(':('); toggleSmilesBar(id); break;
                    case 'tongue': $('.priv_chat_tab#pcid'+id+' .priv_chat_submit_form textarea').insertAtCaret(':P'); toggleSmilesBar(id); break;
                    case 'grin': $('.priv_chat_tab#pcid'+id+' .priv_chat_submit_form textarea').insertAtCaret('=D'); toggleSmilesBar(id); break;
                    case 'gasp': $('.priv_chat_tab#pcid'+id+' .priv_chat_submit_form textarea').insertAtCaret(':o '); toggleSmilesBar(id); break;
                    case 'wink': $('.priv_chat_tab#pcid'+id+' .priv_chat_submit_form textarea').insertAtCaret(';)'); toggleSmilesBar(id); break;
                    case 'pacman': $('.priv_chat_tab#pcid'+id+' .priv_chat_submit_form textarea').insertAtCaret(':v'); toggleSmilesBar(id); break;
                    case 'grumpy': $('.priv_chat_tab#pcid'+id+' .priv_chat_submit_form textarea').insertAtCaret('>:('); toggleSmilesBar(id); break;
                    case 'unsure': $('.priv_chat_tab#pcid'+id+' .priv_chat_submit_form textarea').insertAtCaret(':-/'); toggleSmilesBar(id); break;
                    case 'cry': $('.priv_chat_tab#pcid'+id+' .priv_chat_submit_form textarea').insertAtCaret(':\'('); toggleSmilesBar(id); break;
                    case 'kiki': $('.priv_chat_tab#pcid'+id+' .priv_chat_submit_form textarea').insertAtCaret('^_^'); toggleSmilesBar(id); break;
                    case 'glasses': $('.priv_chat_tab#pcid'+id+' .priv_chat_submit_form textarea').insertAtCaret('8)'); toggleSmilesBar(id); break;
                    case 'sunglasses': $('.priv_chat_tab#pcid'+id+' .priv_chat_submit_form textarea').insertAtCaret('B|'); toggleSmilesBar(id); break;
                    case 'heart': $('.priv_chat_tab#pcid'+id+' .priv_chat_submit_form textarea').insertAtCaret('^v^'); toggleSmilesBar(id); break;
                    case 'devil': $('.priv_chat_tab#pcid'+id+' .priv_chat_submit_form textarea').insertAtCaret('3:)'); toggleSmilesBar(id); break;
                    case 'angel': $('.priv_chat_tab#pcid'+id+' .priv_chat_submit_form textarea').insertAtCaret('O:)'); toggleSmilesBar(id); break;
                    case 'squint': $('.priv_chat_tab#pcid'+id+' .priv_chat_submit_form textarea').insertAtCaret('-_-'); toggleSmilesBar(id); break;
                    case 'confused': $('.priv_chat_tab#pcid'+id+' .priv_chat_submit_form textarea').insertAtCaret('o.O'); toggleSmilesBar(id); break;
                    case 'upset': $('.priv_chat_tab#pcid'+id+' .priv_chat_submit_form textarea').insertAtCaret('>:o'); toggleSmilesBar(id); break;
                    case 'colonthree': $('.priv_chat_tab#pcid'+id+' .priv_chat_submit_form textarea').insertAtCaret(':3'); toggleSmilesBar(id); break;
                    case 'like': $('.priv_chat_tab#pcid'+id+' .priv_chat_submit_form textarea').insertAtCaret('(y)'); toggleSmilesBar(id); break;
                }
            });
            

            $('.priv_chat_tab#pcid'+id).click(function(event) {
                if (iFchatTimeout) {
                    event.stopPropagation();
                    event.preventDefault();

                    stopToggleTitle(this.id);
                }
            });

            addSessionCook(id, name);
        }

        getPrivateMessages(id, function() {
            $('.priv_chat_tab#pcid'+id+' .priv_conv').animate({
                scrollTop: $('.priv_chat_tab#pcid'+id+' .priv_conv > :last-child').offset().top
            }, 1000);
            // oIncSnd.currentTime = 0;
            // oIncSnd.play();
        });
    }

    getPrivateMessages = function(iRecipient, callback) {
        $.getJSON('m/fchat/action/get_private_messages/&recipient=' + iRecipient+'&u='+Math.random(), function(data) {
            if (data.messages && data.count) {
                var sResMsg = afcProcessSmiles(data.messages);
                $('.priv_chat_tab#pcid'+iRecipient+' .priv_conv').html(sResMsg);
                if (callback && typeof(callback) === "function") {  
                    callback();
                }
            }
        });
    }

    getOlderMessages = function(iRecipient, iSkip, vObj) {
        $.getJSON('m/fchat/action/get_older_messages/&recipient=' + iRecipient+'&iskip=' + iSkip+'&u='+Math.random(), function(data) {
            $(vObj).hide();
            if (data.messages && data.count) {
                $('.priv_chat_tab#pcid'+iRecipient+' .priv_conv').prepend(data.messages);
                $('.priv_chat_tab#pcid'+iRecipient+' .priv_conv').animate({
                    scrollTop: 0
                }, 1000);
            }
        });
    }


    $('.profiles .pchat').click(function(event) {
        event.stopPropagation();
        event.preventDefault();

        initiatePrivateChat(this.id, this.title);
    });

    initiateNewChatsPeriodically = function() {
        $.getJSON('m/fchat/action/check_new_messages/'+'&u='+Math.random(), function(data) {
            if (data != undefined && data.id) {

                if ($('.priv_chat_tab#pcid'+data.id+' .priv_chat_submit_form textarea').is(':focus')) {
                    // alert('focus');
                } else {
                    toggleTitle(data.id);
                    // alert('no focus');
                }

                initiatePrivateChat(data.id, data.name);
            }

            setTimeout(function(){
               initiateNewChatsPeriodically();
            }, iFchatFreq * 1000);
        });
    }
    initiateNewChatsPeriodically();

    refreshMemberGroupsPeriodically = function() {
        $.getJSON('m/fchat/action/refresh_mgroups/'+'&u='+Math.random(), function(data) {
            if (data != undefined && data.html) {
                $('.fch_groups').html(data.html);

                $('.profiles .pchat').click(function(event) {
                    event.stopPropagation();
                    event.preventDefault();

                    initiatePrivateChat(this.id, this.title);
                });
            }

            setTimeout(function(){
               refreshMemberGroupsPeriodically();
            }, iFchatGrFreq * 1000);
        });
    }
    setTimeout(function(){
       refreshMemberGroupsPeriodically();
    }, iFchatGrFreq * 1000);
    
    // reinit from cookies
    var sSessions = getCookie('afchatses');
    var sSessionNames = getCookie('afchatsesn');
    if (sSessions != undefined && sSessionNames != undefined) {
        var aSess = sSessions.split("|");
        var aSessN = sSessionNames.split("|");
        for (i=0;i<aSess.length;i++) {
            if (typeof aSess[i] != 'undefined' && aSess[i] != '') {
                initiatePrivateChat(aSess[i], aSessN[i]);
            }
        }
    } else {
        setCookie('afchatses', '');
        setCookie('afchatsesn', '');
    }
});