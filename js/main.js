$(function() {

  $('.c-hamburger-menu').on('click', () => {
    if ($('#header').hasClass('open-menu')) {
      $('#header').removeClass('open-menu');
    } else {
      $('#header').addClass('open-menu');
    }
  });

  $('.c-overlay').on('click', () => {
    if ($('#header').hasClass('open-menu')) {
      $('#header').removeClass('open-menu');
    }
  });

});
