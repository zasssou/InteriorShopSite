let isMenuOpen = false;

$('#hamburger-menu').on('click', () => {
  if (isMenuOpen) {
    $('#hamburger-menu').removeClass('menu-open');
    isMenuOpen = false;
  } else {
    $('#hamburger-menu').addClass('menu-open');
    isMenuOpen = true;
  }
});
