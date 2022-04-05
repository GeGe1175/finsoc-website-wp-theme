function navbar_opacity() {
  var a = jQuery(this).scrollTop();
  jQuery('#navbar-button-id').hasClass('collapsed') &&
    (20 < a
      ? jQuery('.navbar-visible').addClass('navbar-show')
      : jQuery('.navbar-visible').removeClass('navbar-show'));
}
function navbar_button_opacity() {
  var a = jQuery(this).scrollTop();
  jQuery('#navbar-button-id').hasClass('collapsed')
    ? jQuery('.navbar-visible').addClass('navbar-show')
    : 20 < a
    ? jQuery('.navbar-visible').addClass('navbar-show')
    : jQuery('.navbar-visible').removeClass('navbar-show');
}
function resize_divs() {
  jQuery('.flip-card').each(function () {
    var a = jQuery(this)
      .children('.flip-card-inner')
      .children('.flip-card-front')
      .children('.flip-card-image');
    0 != a.length &&
      ((a = Math.floor(a[0].clientHeight)), jQuery(this).css('height', a));
  });
}
function resize_single_div(a) {
  a.parentElement.parentElement.parentElement.style.height =
    Math.floor(a.clientHeight) + 'px';
}
function mobile_event_div() {
  var a =
    window.innerWidth ||
    document.documentElement.clientWidth ||
    document.body.clientWidth;
  768 > a && 0 == window.global_width_flag
    ? jQuery('.flip-card-back-content').each(function () {
        jQuery(this).children('p').addClass('text-hidden');
        var b = -1 * jQuery(this).children('p').length;
        jQuery(this)
          .children('.wp-block-buttons')
          .css('margin-top', b + 'px');
        window.global_width_flag = !0;
      })
    : 768 <= a &&
      1 == window.global_width_flag &&
      jQuery('.flip-card-back-content').each(function () {
        jQuery(this).children('p').removeClass('text-hidden');
        jQuery(this).children('.wp-block-buttons').css('margin-top', '0');
        window.global_width_flag = !1;
      });
}
function aboutUsImageLoaded(a) {
  a.addEventListener('click', function () {
    this.classList.toggle('active');
    var b = this.parentElement.parentElement.nextElementSibling;
    b.style.maxHeight = b.style.maxHeight ? null : b.scrollHeight + 'px';
  });
}
function aboutUsModalClose(a) {
  document.getElementById(a).style.display = 'none';
}
window.addEventListener(
  'scroll',
  function () {
    navbar_opacity();
  },
  !1
);
('/events/' != window.location.pathname &&
  '/sponsors/our-partners/' != window.location.pathname) ||
  window.addEventListener('resize', function () {
    resize_divs();
    mobile_event_div();
  });
window.onload = function () {
  document
    .getElementById('navbar-button-id')
    .addEventListener('click', function () {
      navbar_button_opacity();
    });
  window.global_width_flag =
    768 > window.innerWidth ||
    768 > document.documentElement.clientWidth ||
    768 > document.body.clientWidth
      ? !0
      : !1;
  window.global_width_flag = !window.global_width_flag;
  mobile_event_div();
  window.global_width_flag = !window.global_width_flag;
};
