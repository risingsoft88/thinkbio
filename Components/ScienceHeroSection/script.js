jQuery(function () {
  jQuery('#js-science-hero__btn').on('click', function () {
    jQuery('html, body').animate({
      scrollTop: jQuery('#js-science-content').offset().top
    }, 1000)
  })
})
