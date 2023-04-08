import { disableBodyScroll, enableBodyScroll } from 'body-scroll-lock'

jQuery(function () {
  jQuery('#js-header-mobile-btn').on('click', function () {
    if (jQuery(this).hasClass('is-open')) {
      enableBodyScroll(document.querySelector('#js-header-nav'))

      jQuery(this).removeClass('is-open')
      jQuery('#js-header-nav').removeClass('header-nav--visible')
      jQuery('#js-header-logo__svg').removeClass('header-logo__svg--white')
    } else {
      disableBodyScroll(document.querySelector('#js-header-nav'))

      jQuery(this).addClass('is-open')
      jQuery('#js-header-nav').addClass('header-nav--visible')
      jQuery('#js-header-logo__svg').addClass('header-logo__svg--white')

      // Measure height of window
      jQuery('#js-header-nav').innerHeight(window.innerHeight)
    }
  })

  jQuery(window).on('resize', function () {
    if (window.innerWidth < 1000) {
      // Measure height of window
      jQuery('#js-header-nav').innerHeight(window.innerHeight)
    } else {
      jQuery('#js-header-nav').removeAttr('style')
    }
  })

  jQuery('.js-header-submenu').on('click', function () {
    // close mobile menu
    if (jQuery('#js-header-mobile-btn').hasClass('is-open')) {
      enableBodyScroll(document.querySelector('#js-header-nav'))

      jQuery('#js-header-mobile-btn').removeClass('is-open')
      jQuery('#js-header-nav').removeClass('header-nav--visible')
      jQuery('#js-header-logo__svg').removeClass('header-logo__svg--white')
    }

    const href = jQuery('a', this).attr('href').split('#')[1]

    if (jQuery('#' + href).length > 0) {
      jQuery('html, body').animate({
        scrollTop: jQuery('#' + href).offset().top
      }, 1000)
    }
  })
})
