jQuery(function () {
  jQuery('#js-home-hero__btn').on('click', function () {
    jQuery('html, body').animate({
      scrollTop: jQuery('#js-home-content').offset().top
    }, 1000)
  })
})
