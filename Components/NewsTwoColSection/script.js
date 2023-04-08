import Swiper, { A11y, Autoplay } from 'swiper/swiper.esm'
import 'swiper/swiper-bundle.css'

Swiper.use([A11y, Autoplay])

class NewsMobileSlider extends window.HTMLDivElement {
  constructor (...args) {
    const self = super(...args)
    self.init()
    return self
  }

  init () {
    this.$ = jQuery(this)
  }

  connectedCallback () {
    this.initSlider()
  }

  initSlider () {
    const config = {
      slidesPerView: 'auto',
      centeredSlides: true,
      spaceBetween: 20,
      autoplay: {
        delay: 5000
      },
      loop: true
    }

    this.slider = new Swiper(this.$.get(0), config)
  }
}

window.customElements.define('flynt-news-mobile-slider', NewsMobileSlider, { extends: 'div' })
