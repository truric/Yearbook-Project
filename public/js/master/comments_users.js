document.addEventListener('DOMContentLoaded', ()=> {

    // let btnRemoveComentarios = document.querySelectorAll('.removeBtn')
    // console.log(btnRemoveComentarios)

    // const button = document.getElementById('buttonmodal')
    const closebutton = document.querySelector('#closebutton_comments')
    const modal = document.querySelector('.modal-comments')

    // btnRemoveComentarios.forEach(btn => {
    //     btn.addEventListener("mousedown", () => {
    //         if (!btn.classList.contains('pressed')) {
    //             btn.src = "/fixed/icons/xBlack.png"
    //             ativarpressed(btn)
    //         }
    //     })
    //     btn.addEventListener("mouseup", () => {
    //         if (btn.classList.contains('pressed')) {
    //             btn.src = "/fixed/icons/xWhite.png"
    //             ativarpressed(btn)
    //         }
    //     })
    //     btn.addEventListener("mouseout", () => {
    //         if (btn.classList.contains('pressed')) {
    //             btn.src = "/fixed/icons/xWhite.png"
    //             ativarpressed(btn)
    //         }
    //     })
    // })


    let btnAddClassComent = document.querySelector('#comentariosTurma .addBtn');

    btnAddClassComent.addEventListener("mousedown", () => {
        if (!btnAddClassComent.classList.contains('pressed')) {
            btnAddClassComent.src = "/fixed/icons/plusBlack.png"
            ativarpressed(btnAddClassComent)
            // ativarpressed(formAddClassComent)
            modal.classList.add('scale-100');
        }
    })
    btnAddClassComent.addEventListener("mouseup", () => {
        if (btnAddClassComent.classList.contains('pressed')) {
            btnAddClassComent.src = "/fixed/icons/plusWhite.png"
            ativarpressed(btnAddClassComent)
        }
    })
    btnAddClassComent.addEventListener("mouseout", () => {
        if (btnAddClassComent.classList.contains('pressed')) {
            btnAddClassComent.src = "/fixed/icons/plusWhite.png"
            ativarpressed(btnAddClassComent)
        }
    })

    closebutton.addEventListener('click',()=>{
        modal.classList.remove('scale-100')
    })

})
