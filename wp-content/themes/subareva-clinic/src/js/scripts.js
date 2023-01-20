$(document).ready(function () {

    let bg = document.querySelectorAll('.mouse-parallax-bg');
    for (let i = 0; i < bg.length; i++){
        let xpos = $(bg[i]).data('xset');
        let ypos = $(bg[i]).data('yset');
        window.addEventListener('mousemove', function(e) {
            let x = e.clientX / window.innerWidth;
            let y = e.clientY / window.innerHeight;
            bg[i].style.transform = 'translate(-' + x * xpos + 'px, -' + y * ypos + 'px)';
        });
    }

    if ($('.maintenance').length) {
        $(".form__js").click(function () {
            $('.fade').addClass('showed');
            $('.fade__container').fadeIn(300);
        });
        $(".fade__close").click(function () {
            $('.fade').removeClass('showed');
            $('.fade__container').fadeOut(300);
        });
    }

    AOS.init({
        // Global settings:
        // disable: function() {
        //     var minWidth = 1024;
        //     return window.innerWidth > minWidth;
        // },
        startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
        initClassName: 'aos-init', // class applied after initialization
        animatedClassName: 'aos-animate', // class applied on animation
        useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
        disableMutationObserver: false, // disables automatic mutations' detections (advanced)
        debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
        throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
        // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
        offset: 80, // offset (in px) from the original trigger point
        delay: 0, // values from 0 to 3000, with step 50ms
        duration: 700, // values from 0 to 3000, with step 50ms
        easing: 'ease', // default easing for AOS animations
        once: true, // whether animation should happen only once - while scrolling down
        mirror: false, // whether elements should animate out while scrolling past them
        anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

    });
});

