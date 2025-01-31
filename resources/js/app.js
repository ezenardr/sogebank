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
const btnSogebank = document.querySelector(".sogebankUser");
const pageSogebank = document.querySelector(".sogebankUserPage");
const btnOtherBanks = document.querySelector(".otherBanks");
const pageOtherBanks = document.querySelector(".otherBanksPage");
const btnConfirm = document.querySelector(".transacConfirm");
const pageConfirm = document.querySelector(".transacConfirmPage");

if(btnOtherBanks != null){
    btnOtherBanks.addEventListener("click", function() {
        pageConfirm.classList.add('hidden')
        pageSogebank.classList.add('hidden')
        pageOtherBanks.classList.remove('hidden')
    })
}

if(btnSogebank != null){
    btnSogebank.addEventListener("click", function(){
        pageConfirm.classList.add('hidden')
        pageSogebank.classList.remove('hidden')
        pageOtherBanks.classList.add('hidden')
    })
}

if(btnConfirm){
    btnConfirm.addEventListener("click", function() {
        pageConfirm.classList.remove('hidden')
        pageSogebank.classList.add('hidden')
        pageOtherBanks.classList.add('hidden')
    })
}

//send - popup
const popup = document.querySelector('.popup')
const openBtn = document.querySelector('.open-btn')
const closeBtn = document.querySelector('.close-btn')
const pinInputs = document.querySelectorAll('.pin-input');

if(openBtn != null){
    openBtn.addEventListener('click', function() {
        popup.classList.remove('hidden')
        popup.classList.add('flex')
    });
}

if(closeBtn != null){
    closeBtn.addEventListener('click', function() {
        popup.classList.add('hidden')
        pageConfirm.classList.add('hidden')
        pageSogebank.classList.remove('hidden')
        pageOtherBanks.classList.add('hidden')
    });
}

//avancement automatique du curseur - retour avec backspace
if(pinInputs != null){
    pinInputs.forEach((input, index) => {
        input.addEventListener('input', (e) => {
          if (e.target.value.length === 1 && index < pinInputs.length - 1) {
            pinInputs[index + 1].focus();
          }
        });
    
        input.addEventListener('keydown', (e) => {
          if (e.key === 'Backspace' && !e.target.value && index > 0) {
            pinInputs[index - 1].focus();
          }
        });
      });
}

if(pinInputs != null){
    pinInputs.forEach((input, index) => {
        input.addEventListener('input', (e) => {
          if (e.target.value.length === 1 && index < pinInputs.length - 1) {
            pinInputs[index + 1].focus();
          }
        });
    
        input.addEventListener('keydown', (e) => {
          if (e.key === 'Backspace' && !e.target.value && index > 0) {
            pinInputs[index - 1].focus();
          }
        });
      });
}

  //Settings
  const btnSettingProfil = document.querySelector(".settingProfilBtn");
  const settingProfil = document.querySelector(".settingProfil");
  const btnSettingPreference = document.querySelector(".settingPreferenceBtn");
  const settingPreference = document.querySelector(".settingPreference");
  const btnSettingSecurity = document.querySelector(".settingSecurityBtn");
  const settingSecurity = document.querySelector(".settingSecurity");

if(btnSettingProfil != null){
    btnSettingProfil.addEventListener("click", function() {
        settingProfil.classList.remove('hidden')
        settingPreference.classList.add('hidden')
        settingSecurity.classList.add('hidden')
    })
}

if(btnSettingPreference != null){
    btnSettingPreference.addEventListener("click", function() {
        settingProfil.classList.add('hidden')
        settingPreference.classList.remove('hidden')
        settingSecurity.classList.add('hidden')
    })
}

if(btnSettingSecurity != null){
    btnSettingSecurity.addEventListener("click", function() {
        settingProfil.classList.add('hidden')
        settingPreference.classList.add('hidden')
        settingSecurity.classList.remove('hidden')
    })
}