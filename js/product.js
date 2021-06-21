window.addEventListener('load', function(){

    const quantidadeItems = document.querySelector('.quantidade .buttons-container .quantidade-valor')
    const minusButton = document.querySelector('.quantidade .buttons-container .menos')
    const plusButton = document.querySelector('.quantidade .buttons-container .mais')

    minusButton.addEventListener('click', () => {
        quantidadeItems.innerHTML = Number(quantidadeItems.innerHTML) > 1 ? Number(quantidadeItems.innerHTML) - 1 : 1
    })

    plusButton.addEventListener('click', () => {
        quantidadeItems.innerHTML = Number(quantidadeItems.innerHTML) + 1
    })

    const aboutMenus = document.querySelectorAll('.sobre .menus li')
    aboutMenus.forEach(menu => {
        menu.addEventListener('click', () => {
            let selectedMenu = document.querySelector('.sobre .menus li.selected')
            let selectedContent = document.querySelector('.sobre .conteudo .selected')
            selectedMenu.classList.remove('selected')
            selectedContent.classList.remove('selected')
            menu.classList.add('selected')
            if (menu.classList.contains('descricao')) {
                document.querySelector('.sobre .conteudo .descricao-conteudo').classList.add('selected')
            } else if (menu.classList.contains('ingredientes')) {
                document.querySelector('.sobre .conteudo .ingredientes-conteudo').classList.add('selected')
            } else {
                document.querySelector('.sobre .conteudo .info-nutricionais-conteudo').classList.add('selected')
            }
        })
    })

    // Modal para avaliar
    const avalieModal = document.querySelector('main .avalie-modal')
    document.querySelector('.avaliacoes .avalie').addEventListener('click', () => {
        avalieModal.classList.add('open')
    })
    document.querySelector('.avalie-modal .close button').addEventListener('click', () => {
        avalieModal.classList.remove('open')
    })

    // Modal de avaliacoes
    const avaliacoesModal = document.querySelector('main .avaliacoes-modal')
    document.querySelector('.ver-avaliacoes').addEventListener('click', () => {
        avaliacoesModal.classList.add('open')
    })
    document.querySelector('.avaliacoes-modal .close button').addEventListener('click', () => {
        avaliacoesModal.classList.remove('open')
    })



    // Carousel
    $('.carousel-amostra').owlCarousel({
        items:5,
        loop:true,
        margin: 20,
        dots: false,
        responsive: {
            0: {
                items: 1,
                dots: true,
            }, 769: {
                items: 3
            }, 
            1024: {
                items: 4
            },
            1440: {
                items: 5
            }
        }
    })

    $('.produtos').owlCarousel({
        items: 4,
        loop: true, 
        margin: 30,
        dots: false,
        responsive: {
            0: {
                items: 2,
            },
            768: {
                items: 3,
            },
            1024: {
                items: 4,
            }
        },
    })

    const carouselAmostra = $('.carousel-amostra')
    $('.carousel-container .seta-esquerda').click(function(){
        carouselAmostra.trigger('prev.owl.carousel')
    })
    $('.carousel-container .seta-direita').click(function(){
        carouselAmostra.trigger('next.owl.carousel')
    })

    const produtos = $('.produtos')
    $('.produtos-slider .seta-esquerda').click(function(){
        produtos.trigger('prev.owl.carousel')
    })
    $('.produtos-slider .seta-direita').click(function(){
        produtos.trigger('next.owl.carousel')
    })
})