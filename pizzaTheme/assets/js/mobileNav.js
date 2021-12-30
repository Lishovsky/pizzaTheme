let step = false
let number = 0


document.querySelector('#_nav_mobileToggler').addEventListener('click', () => {
    document.querySelector('._nav_mainNav_links').classList.toggle('mobileNavActive')
    number++
    if (step = true) {
        document.querySelector('#oneSpan').style.transform = "translateX(0px) translateY(-6px)"
        document.querySelector('#twoSpan').style.transform = "translateX(0px)"
        document.querySelector('#threeSpan').style.transform = "translateX(0px) translateY(6px)"
    }
    if (number == 2) {
        step = false
        number = 0
    }
    else {
        document.querySelector('#oneSpan').style.transform = "translateX(-6px) translateY(-6px)"
        document.querySelector('#twoSpan').style.transform = "translateX(6px)"
        document.querySelector('#threeSpan').style.transform = "translateX(-6px) translateY(6px)"
    }
})