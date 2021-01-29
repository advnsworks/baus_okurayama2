$(document).ready(function () {





  /* SP用メニュー */

  $('.sp_toggle').bind('click', function (e) {
    if ($('#sp_gnav').css('display') == 'none') {
      $('#sp_gnav').slideDown("fast");
    } else {
      $('#sp_gnav').slideUp("fast");
    };
  });
  $(window).bind('resize', function (e) {
    if (ut.windowW > 2000) {
      $('#spnav_toggle .on, #spreq_toggle .on').hide();
      $('#header_require').css({
        'display': ''
      });
      $('#sp_gnav').css({
        'display': ''
      });
    }
  });




});
