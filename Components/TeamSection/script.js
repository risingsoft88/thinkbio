import { disableBodyScroll, enableBodyScroll } from 'body-scroll-lock'

jQuery(function () {
  jQuery('.js-team__col-inner').on('click', function () {
    const postId = jQuery(this).attr('data-team-id')
    const nonce = jQuery('#js-team-popup').attr('data-nonce')

    jQuery('#js-team-popup-lds-ripple').removeClass('hide')
    jQuery('#js-team-popup').removeClass('hide')

    jQuery.ajax({
      type: 'post',
      dataType: 'json',
      url: window.FlyntData.ajaxurl,
      data: {
        action: 'get_single_team',
        nonce: nonce,
        postId
      },
      success: function (response) {
        jQuery('#js-team-popup__row').html(response.single_team_html)
        jQuery('#js-team-popup-lds-ripple').addClass('hide')
        jQuery('#js-team-popup__container').removeClass('hide')

        disableBodyScroll(document.querySelector('#js-team-popup'))
      }
    })
  })

  // close team bio popup
  jQuery('#js-team-popup__close').on('click', function () {
    jQuery('#js-team-popup').addClass('hide')
    jQuery('#js-team-popup__container').addClass('hide')

    enableBodyScroll(document.querySelector('#js-team-popup'))
  })

  // when the outside of bio popup is clicked, close popup
  jQuery('#js-team-popup').on('click', function () {
    jQuery('#js-team-popup').addClass('hide')
    jQuery('#js-team-popup__container').addClass('hide')

    enableBodyScroll(document.querySelector('#js-team-popup'))
  })

  // click event inside bio popup stop to outbox
  jQuery('#js-team-popup__container').on('click', function (event) {
    event.stopPropagation()
  })

  jQuery('.team__filter-col span').on('click', function(){
    jQuery('.team__filter-col span').removeClass('selected');
    jQuery(this).addClass('selected');
  })
})

// after bio popup is showing, when esc is pressed, close that popup.
jQuery(document).on('keyup', function (e) {
  if (e.key === 'Escape') {
    if (!jQuery('#js-team-popup').hasClass('hide')) {
      jQuery('#js-team-popup').addClass('hide')
      jQuery('#js-team-popup__container').addClass('hide')

      enableBodyScroll(document.querySelector('#js-team-popup'))
    }
  }
})
