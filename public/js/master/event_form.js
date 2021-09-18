let mySwiper = new Swiper ('.swiper-container', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    // And if we need scrollbar
    scrollbar: {
        el: '.swiper-scrollbar',
    },
})

document.addEventListener('DOMContentLoaded', ()=> {

    let closebutton = document.querySelector('#closebutton_events')
    let modal = document.querySelector('.modal_events')

    let addBtns = document.querySelectorAll('.addBtn')
    addBtns.forEach(addBtn => {
        addBtn.addEventListener("mousedown", () => {
            if (!addBtn.classList.contains('pressed')) {
                addBtn.src = "/fixed/icons/plusBlack.png"
                ativarpressed(addBtn)
                modal.classList.add('scale-100');
            }
        })
        addBtn.addEventListener("mouseup", () => {
            if (addBtn.classList.contains('pressed')) {
                addBtn.src = "/fixed/icons/plusWhite.png"
                ativarpressed(addBtn)
            }
        })
        addBtn.addEventListener("mouseout", () => {
            if (addBtn.classList.contains('pressed')) {
                addBtn.src = "/fixed/icons/plusWhite.png"
                ativarpressed(addBtn)
            }
        })
    })

    closebutton.addEventListener('click',()=>{
        modal.classList.remove('scale-100')
    })

})
