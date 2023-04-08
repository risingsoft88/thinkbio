import 'normalize.css/normalize.css'
import './main.scss'

import installCE from 'document-register-element/pony'

window.lazySizesConfig = window.lazySizesConfig || {}
window.lazySizesConfig.preloadAfterLoad = true
require('lazysizes')
require('lazysizes/plugins/bgset/ls.bgset')

installCE(window, {
  type: 'force',
  noBuiltIn: true
})

function importAll (r) {
  r.keys().forEach(r)
}

// contat form, join us form
// customize file upload
jQuery(function () {
  jQuery(document).on('gform_post_render', function () {
    jQuery('.contact-form__form input[type=file], .join-us__form input[type=file]').on('change', function () {
      const fileName = jQuery(this).val().split('\\').pop()
      jQuery('label', jQuery(this).parent().parent()).html(fileName)
    })
  })

  jQuery('#js-back-to-top').on('click', function () {
    jQuery('html, body').animate({
      scrollTop: 0
    }, 500)
  })

  jQuery(window).on('scroll', function () {
    if (jQuery(window).scrollTop() > 1000) {
      jQuery('#js-back-to-top').removeClass('back-to-top--hidden')
    } else {
      jQuery('#js-back-to-top').addClass('back-to-top--hidden')
    }
  })
})

importAll(require.context('../Components/', true, /\/script\.js$/))
