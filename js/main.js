const searchBar = document.querySelector('#pesquisa')
const openMobileMenuButton = document.querySelector('.open-menu-mobile')
const menuMobileContent = document.querySelector('.menu-mobile-content')
const closeMobileMenuButton = document.querySelector('header .menu-mobile .menu-mobile-content .close-container .close')
const openSubmenuArrows = document.querySelectorAll('.seta')
const lupa = document.querySelector('header .container .lupa-carrinho-mobile .lupa')
const searchBarContainer = document.querySelector('header .busca ')

function buscarElemento(element) {
    searchBar.value = element.innerText
}

openMobileMenuButton.addEventListener('click', () => {
    menuMobileContent.classList.add('active')
})

closeMobileMenuButton.addEventListener('click', () => {
    menuMobileContent.classList.remove('active')
})

openSubmenuArrows.forEach(seta => {
    seta.addEventListener('click', () => {
        seta.parentNode.classList.toggle('open')
    })
})

lupa.addEventListener('click', () => {
    searchBarContainer.classList.toggle('active')
})
