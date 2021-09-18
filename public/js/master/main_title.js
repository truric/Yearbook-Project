document.addEventListener('DOMContentLoaded', ()=> {
    let addBtn = document.querySelector('#btnChangrSlogan')
    // let formChangeSlogan = document.querySelector('#turmaTitulo form');

    const closebutton = document.querySelector('#closebutton_slogan')
    const modal = document.querySelector('.modal-slogan')

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


    closebutton.addEventListener('click',()=>{
        modal.classList.remove('scale-100')
    })

})
