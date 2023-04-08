jQuery(function () {
  jQuery('#js-career-hero__btn').on('click', function () {
    jQuery('html, body').animate({
      scrollTop: jQuery('#js-career-content').offset().top
    }, 1000)
  })
})
