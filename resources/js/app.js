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

//send action
const btnSogebank = document.getElementById("sogebankUser");
const pageSogebank = document.getElementById("sogebankUserPage");
const btnOtherBanks = document.getElementById("otherBanks");
const pageOtherBanks = document.getElementById("otherBanksPage");
const btnConfirm = document.getElementById("transacConfirm");
const pageConfirm = document.getElementById("transacConfirmPage");

btnOtherBanks.addEventListener("click", function() {
    pageConfirm.classList.add('hidden')
    pageSogebank.classList.add('hidden')
    pageOtherBanks.classList.remove('hidden')
})

btnSogebank.addEventListener("click", function(){
    pageConfirm.classList.add('hidden')
    pageSogebank.classList.remove('hidden')
    pageOtherBanks.classList.add('hidden')
})

btnConfirm.addEventListener("click", function() {
    pageConfirm.classList.remove('hidden')
    pageSogebank.classList.add('hidden')
    pageOtherBanks.classList.add('hidden')
})

//send - popup
const popup = document.getElementById('popup')
const openBtn = document.getElementById('open-btn')
const closeBtn = document.getElementById('close-btn')

openBtn.addEventListener('click', function() {
    popup.classList.remove('hidden')
    popup.classList.add('flex')
});

closeBtn.addEventListener('click', function() {
    popup.classList.add('hidden')
    pageConfirm.classList.add('hidden')
    pageSogebank.classList.remove('hidden')
    pageOtherBanks.classList.add('hidden')
});