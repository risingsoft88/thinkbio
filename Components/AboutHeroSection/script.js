jQuery(function () {
  jQuery('#js-about-hero__btn').on('click', function () {
    jQuery('html, body').animate({
      scrollTop: jQuery('#js-about-hero').next().offset().top
    }, 1000)
  })
})
