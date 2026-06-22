import './bootstrap';

// Uncomment if you need Alpine.js
import Alpine from 'alpinejs'
import example from './components/AlpineExample'
Alpine.data('example', example)
window.Alpine = Alpine
Alpine.start()

//import LocomotiveScroll from 'locomotive-scroll';

// const scroll = new LocomotiveScroll({
//    el: document.querySelector('[data-scroll-container]'),
//    smooth: true
//});

document.addEventListener('DOMContentLoaded', () => {
    let options = {
        root: null, // Use the viewport as the root
        rootMargin: '0px',
        threshold: 1 // 50% of the element should be visible
    };

    let observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                let counter = entry.target;
                let targetValue = parseInt(counter.getAttribute('data-value'));
                let symbol = counter.querySelector('.count-symbol') ? counter.querySelector('.count-symbol').textContent : '';
                let countValueElement = counter.querySelector('.count-value');
                let upto = 0;

                // Start the animation
                let counts = setInterval(() => {
                    if (upto < targetValue) {
                        countValueElement.innerHTML = ++upto;
                        counter.innerHTML = `${upto}${symbol}`;
                    } else {
                        clearInterval(counts);
                    }
                }, 50); // Adjust the interval speed as needed

                observer.unobserve(counter); // Stop observing after the animation starts
            }
        });
    }, options);

    document.querySelectorAll('.count').forEach(counter => {
        observer.observe(counter);
    });
});


// import Swiper bundle with all modules installed
import Swiper from 'swiper/bundle';

// import styles bundle
import 'swiper/css/bundle';

// init Swiper:
var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 30,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    breakpoints: {
        // when window width is <= 640px
        640: {
            slidesPerView: 3,
            spaceBetween: 10
        }
    }
});

var swiper = new Swiper(".revSwiper", {
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });



// Uncomment if you need Vue
// window.Vue = require('vue');
// Vue.component('example', require('./components/Example.vue').default);
// new Vue({
//     el: '#app'
// });
