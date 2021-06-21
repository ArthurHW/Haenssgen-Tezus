window.addEventListener('load', function(){

    $('.banner-slider').owlCarousel({
        items: 1,
        loop:true,
        autoplay:true,
        autoplayTimeout: 5000,
    })

    $('main .linha-container .produtos').owlCarousel({
        items: 3,
        loop: true,
        dots:false,
        nav: true,
        margin:15,
        responsive: {
            0: {
                items:2,
            },
            1024: {
                items: 3,
            }
        },
    })

    $('#banner-destaques1 .slider').owlCarousel({
        items:3,
        nav: false,
        margin: 30,
        responsive: {
            0: {
                items:1,
                dots: true,
                autoplay: true,
                autoplayTimeout: 5000,
            },
            768: {
                items: 3,
                dots: false,
            }
        },
    })

    $('#banner-destaques2 .slider').owlCarousel({
        items:2,
        margin: 30,
        nav: false,
        responsive: {
            0: {
                items: 1,
                dots: true,
            },
            768: {
                items: 2,
                dots: false,
            }
        }
    })

    const produtos1 = $('#produtos1')
    $('.seta-direita#seta1').click(function() {
        produtos1.trigger('next.owl.carousel');
    })
    $('.seta-esquerda#seta1').click(function() {
        produtos1.trigger('prev.owl.carousel');
    })

    const produtos2 = $('#produtos2')
    $('.seta-direita#seta2').click(function() {
        produtos2.trigger('next.owl.carousel');
    })
    $('.seta-esquerda#seta2').click(function() {
        produtos2.trigger('prev.owl.carousel');
    })

    const produtos3 = $('#produtos3')
    $('.seta-direita#seta3').click(function() {
        produtos3.trigger('next.owl.carousel');
    })
    $('.seta-esquerda#seta3').click(function() {
        produtos3.trigger('prev.owl.carousel');
    })

})

