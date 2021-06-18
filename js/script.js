const slider = document.querySelector('.slider')
const sliderInputs = document.querySelectorAll('main .banner-container .slider input')
const sliderBanners = document.querySelectorAll('main .banner-container .slider .banner')
const searchBar = document.querySelector('#pesquisa')

function buscarElemento(element) {
    searchBar.value = element.innerText
}

function animate(element) {
    element.classList.remove('animate')
    window.setTimeout(() => {
        element.classList.add('animate')
    }, 50)
}

const slide = setInterval(() => {
    if (sliderInputs[0].checked) {
        sliderInputs[1].checked = true
        animate(sliderBanners[1])
    } else if (sliderInputs[1].checked) {
        sliderInputs[2].checked = true
       animate(sliderBanners[2])
    } else {
        sliderInputs[0].checked = true
       animate(sliderBanners[0])
    }
}, 7000)