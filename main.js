$('a[href^="#"]').click(function(){
  var speed = 500;
  var href= $(this).attr("href");
  var target = $(href == "#" || href == "" ? 'html' : href);
  var position = target.offset().top - 80;
  $("html, body").animate({scrollTop:position}, speed, "swing");
  return false;
});

AOS.init({
  once: true,
  easing: 'ease-in',
  duration: 1000,
});

