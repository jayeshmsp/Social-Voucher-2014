/*ref = getParameterByName("ref");
if (ref != '')
  url = mainUrl + ref;
else
  url = mainUrl;
if (detectmob())
  document.location.href = url + '/mobile/';
*/
function showVid() {
  jQuery('#big-video-wrap').show();
}

jQuery(function () {
  var siteUrl = mainUrl;

  var BV = new jQuery.BigVideo();
  BV.init();
  BV.show(siteUrl+'wp-content/themes/socialvoucher/images/sv.mp4', { ambient: true });
  setTimeout(showVid, 1000);
  jQuery("#btn-send-vidpass").click(function (e) {
     BV.getPlayer().pause();
     
  });

  jQuery('.btn-contact').click(function (e) {
    e.preventDefault();
    jQuery('.overlay').fadeIn();
    jQuery('#pop-contact').fadeIn();
  });
  
  jQuery('.btn-careers').click(function (e) {
    e.preventDefault();
    jQuery('.overlay').fadeIn();
    jQuery('#pop-careers').fadeIn();
  });
  
  // Video Password Prompt:
  jQuery('.btn-video').click(function (e) {
    e.preventDefault();
    jQuery('.overlay').fadeIn();
    jQuery('#pop-video').fadeIn();
  });
  
  //Video Password Submission:
  jQuery("#btn-send-vidpass").click(function (e) {
    var SetPassword = SetPass;
    var password = jQuery('#password').val();
    
    if(password == ''){
        
        document.getElementById("error_message").innerHTML = "<p class='error_message_text'>Please Enter Password!</p>";
    } else if (password == SetPassword) {
      jQuery('#password').val('');
      jQuery('.pop').fadeOut();
      jQuery('#pop-view').fadeIn();
       //Play the Video Here 
       
      jQuery("#jquery_jplayer_1").jPlayer({
          ready: function () {
            jQuery(this).jPlayer("setMedia", {
              title: "Social Voucher",
              webmv: siteUrl + 'wp-content/themes/socialvoucher/images/social-voucher-video.webm',
              mp4: siteUrl + 'wp-content/themes/socialvoucher/images/social-voucher-video.mp4'
            }).jPlayer("play");
          },
          swfPath: "../../dist/jplayer",
          //swfPath: "http://192.168.0.153/socialvoucherdev/wp-content/themes/socialvoucher/js/jplayer/dist/jplayer",
          solution: "flash, html",
          supplied: "webmv, mp4",
          size: {
            width: "640px",
            height: "360px",
            cssClass: "jp-video-360p"
          },
          useStateClassSkin: true,
          autoBlur: false,
          smoothPlayBar: true,
          keyEnabled: true,
          remainingDuration: true,
          toggleDuration: true,
          errorAlerts: true,
          warningAlerts: true
	    } );
    e.preventDefault();
    } else {
        
        document.getElementById("error_message").innerHTML = "<p class='error_message_text'>Password is Incorrect!</p>";
    }
    
    
    
  });
  
 

  jQuery('.btn-close').click(function (e) {
    //alert('Closing!');
    /*var player = videojs('investor-video');
    player.currentTime(0).pause();
    e.preventDefault();*/
    jQuery("#jquery_jplayer_1").jPlayer('stop');
       
    jQuery('.overlay').fadeOut();
    jQuery('.pop').fadeOut();
    
    
  });

});

function getParameterByName(name) {
  name = name.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");
  var regexS = "[\\?&]" + name + "=([^&#]*)";
  var regex = new RegExp(regexS);
  var results = regex.exec(window.location.search);
  if (results == null)
    return "";
  else
    return decodeURIComponent(results[1].replace(/\+/g, " "));
}

function isValidEmailAddress(emailAddress) {
  var pattern = new RegExp(/^((([a-z]|\d|[!#\jQuery%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\jQuery%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?jQuery/i);
  return pattern.test(emailAddress);
};

/*function detectmob() {
  if (navigator.userAgent.match(/Android/i)
       || navigator.userAgent.match(/webOS/i)
       || navigator.userAgent.match(/iPhone/i)
       || navigator.userAgent.match(/iPad/i)
       || navigator.userAgent.match(/iPod/i)
       || navigator.userAgent.match(/BlackBerry/i)
       || navigator.userAgent.match(/Windows Phone/i)
       ) {
    return true;
  }
  else {
    return false;
  }
}*/
jQuery(document).ready(function() {
    	jQuery('.accordian .details').hide();
		jQuery('.accordian h3').click(function(){
			jQuery(this).next().slideToggle();
			//$(this).prevAll().slideUp();
			//$(this).next().slideUp();
			jQuery(this).find('span').toggleClass('down');
		});    
});