$(document).ready(function () {
  $(".carousel-banners").slick({
    dots: false
  });

  $(".nav-left").click(function (e) {
    $('.carousel-banners').slick('slickPrev');
  });

  $(".nav-right").click(function (e) {
    $('.carousel-banners').slick('slickNext');
  });

  $("ul.responsive").hide();
  var menStatus = false;

  $(".floating-icon").click(function () {
    if (!menStatus) {
      $("ul.responsive").stop().slideDown('fast');
      $(this).removeClass('fa-plus');
      $(this).addClass('fa-minus');
    } else {
      $("ul.responsive").stop().slideUp('fast');
      $(this).removeClass('fa-minus');
      $(this).addClass('fa-plus');
    }
    menStatus = !menStatus;
  });

  $('form').submit(function (e) {
    e.preventDefault();
    alert('Obrigado por chegar até o final =D');
    alert('Vamos conversar?\n\nVítor Chaves\n21 96425-7900\nvhxchaves@gmail.com');
  });
});