jQuery(document).ready(function ($) {
  $('.description-activists')
    .find('li:gt(8)')
    .hide()
    .end()
    .append(
      $('#toggler_1').click(function () {
        $(this).siblings(':hidden').show().end().remove();
      })
    );
  $('.description-goverment')
    .find('li:gt(6)')
    .hide()
    .end()
    .append(
      $('#toggler_2').click(function () {
        $(this).siblings(':hidden').show().end().remove();
      })
    );
});