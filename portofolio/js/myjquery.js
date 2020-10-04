$(document).ready(function(){
 let scroll_link = $('.page_scroll');

  //smooth scrolling -----------------------
  scroll_link.click(function(e){
      e.preventDefault();
      let url = $('body').find($(this).attr('href')).offset().top - 60;
      $('html, body').animate({
        scrollTop : url
      },1000, 'easeInOutExpo');
      $(this).parent().addClass('active');
      $(this).parent().siblings().removeClass('active');
      return false;
   });
});
$(window).on('load', function(){
  $('.pkiri').addClass('pmuncul');
  $('.pkanan').addClass('pmuncul');
})
$(window).scroll(function(){
  var wscroll = $(this).scrollTop();
  $('.jumbotron img').css({
    'transform' : 'translate(0px, '+wscroll/10+'%)'
  });
  $('.jumbotron h1').css({
    'transform' : 'translate(0px, '+wscroll/2+'%)'
  });
  $('.jumbotron p').css({
    'transform' : 'translate(0px, '+wscroll/2+'%)'
  });
  if (wscroll > $('.portofolio').offset().top - 150){
    $('.portofolio .img-thumbnail').each(function(i){
      setTimeout(function(){
        $('.portofolio .img-thumbnail').eq(i).addClass('muncul');
      }, 100 * (i+1));
    });
  }
});
