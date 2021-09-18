document.addEventListener('DOMContentLoaded', ()=> {


    let btn = document.querySelector('form button')

    btn.addEventListener("mousedown", () => {
            if (!btn.classList.contains('pressed')) {
                ativarpressed(btn)
            }
        })
        btn.addEventListener("mouseup", () => {
            if (btn.classList.contains('pressed')) {
                ativarpressed(btn)
            }
        })
        btn.addEventListener("mouseout", () => {
            if (btn.classList.contains('pressed')) {
                ativarpressed(btn)
            }
        })


})
