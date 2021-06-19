const slider = document.querySelector('.slider')
const sliderInputs = document.querySelectorAll('main .banner-container .slider input')
const sliderBanners = document.querySelectorAll('main .banner-container .slider .banner')
const searchBar = document.querySelector('#pesquisa')

function buscarElemento(element) {
    searchBar.value = element.innerText
}

const slide = setInterval(() => {
    if (sliderInputs[0].checked) {
        sliderInputs[1].checked = true
    } else if (sliderInputs[1].checked) {
        sliderInputs[2].checked = true
    } else {
        sliderInputs[0].checked = true
    }
}, 7000)