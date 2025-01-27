import './bootstrap';

const btnOpenEl = document.querySelector(".btn-menu-open")
const btnCloseEl = document.querySelector(".btn-menu-close")
const navEl = document.querySelector(".mobile-nav")

btnOpenEl.addEventListener("click", function() {
    btnOpenEl.classList.add('hidden')
    btnCloseEl.classList.remove('hidden')
    navEl.classList.remove('-translate-x-full')
    navEl.classList.add('translate-x-0')
})
btnCloseEl.addEventListener("click", function() {
    btnCloseEl.classList.add('hidden')
    btnOpenEl.classList.remove('hidden')
    navEl.classList.add('-translate-x-full')
    navEl.classList.remove('translate-x-0')
})

// modal
const triggerModal = document.querySelector(".trigger-top-modal")
const modalEl = document.querySelector(".top-modal")

triggerModal.addEventListener("click", function() {
    if(modalEl.classList.contains('hidden')){
        modalEl.classList.remove('hidden')
        modalEl.classList.add('flex')
    }else {
        modalEl.classList.remove('flex')
        modalEl.classList.add('hidden')
    }
})
