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
            $('.maintenance').addClass('showed');
        });
        $(".fade__close").click(function () {
            $('.fade').removeClass('showed');
            $('.fade__container').fadeOut(300);
            $('.maintenance').removeClass('showed');
        });
    }

    if ($(".popup").length){
        document.addEventListener( 'wpcf7mailsent', function( event ) {
            $('.fade').removeClass('showed');
            $('.fade__container').fadeOut(300);
            $('.popup').fadeIn(300);
            $('#success-send').fadeIn(300);
            $('.wpcf7-response-output').empty();
            setTimeout(function (){
                $('#success-send').fadeOut(300);
                $('.popup').fadeOut(300);
            }, 2000);
        }, false );
    };
});

