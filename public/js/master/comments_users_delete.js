document.addEventListener('DOMContentLoaded', ()=> {

    let btnRemoveComentarios = document.querySelectorAll('.removeBtn')

    btnRemoveComentarios.forEach(btn => {
        btn.addEventListener("mousedown", () => {
            if (!btn.classList.contains('pressed')) {
                btn.src = "/fixed/icons/xBlack.png"
                ativarpressed(btn)
            }
        })
        btn.addEventListener("mouseup", () => {
            if (btn.classList.contains('pressed')) {
                btn.src = "/fixed/icons/xWhite.png"
                ativarpressed(btn)
            }
        })
        btn.addEventListener("mouseout", () => {
            if (btn.classList.contains('pressed')) {
                btn.src = "/fixed/icons/xWhite.png"
                ativarpressed(btn)
            }
        })
    })


})
