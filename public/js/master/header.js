function ativarhidden(el){
    el.classList.toggle('hidden')
}

function ativardisplay(el){
    el.classList.toggle('display')
}

function ativardisabled(el){
    el.classList.toggle('disabled')
}

function ativarpressed(el){
    el.classList.toggle('pressed')
}
function resizeDiv(elem1, elem2, ex){
    elem1.style.width = ex+elem2.scrollWidth+'px';
}


document.addEventListener('DOMContentLoaded', ()=> {
    let options_mobile = document.querySelector('#menu-options-mobile')
    let botao_menu_mobile = document.querySelector('#menu-btn');
    let header_pessoal = document.querySelector('#header_pessoal');
    let header_pessoal_frame_dropdown = document.querySelector('#header_pessoal_frame_dropdown');
    let header_pessoal_frame_dropdown_items = document.querySelectorAll('#header_pessoal_frame_dropdown a');

    let desktop_header_logo = document.querySelector('#menu-desktop-main .header_atec_logo')
    let desktop_header_reference = document.querySelector('#menu-options-desktop > a:last-child')


    let botaoicon = true;
    if (window.innerWidth < 1020) {
        desktop_header_logo.src ='/fixed/images/AtecLogoSoloRect.png'
        desktop_header_logo.innerHeight = desktop_header_reference.innerHeight
    } else {
        desktop_header_logo.src ='/fixed/images/AtecLogoComp.png'
    }

    botao_menu_mobile.addEventListener("click", () => {
        ativarhidden(options_mobile);
        if (botaoicon === true) {
            botao_menu_mobile.src = '/fixed/icons/xBlack.png'

            botaoicon = false;
        } else {
            botao_menu_mobile.src = '/fixed/icons/Menu.png'

            botaoicon = true;
        }
    });

    header_pessoal.addEventListener("mouseover", () => {
        ativarhidden(header_pessoal_frame_dropdown)
    });
    header_pessoal.addEventListener("mouseout", () => {
        ativarhidden(header_pessoal_frame_dropdown)
    });

    header_pessoal_frame_dropdown.addEventListener("mouseover", () => {
        ativarhidden(header_pessoal_frame_dropdown)
    });
    header_pessoal_frame_dropdown.addEventListener("mouseout", () => {
        ativarhidden(header_pessoal_frame_dropdown)
    });
    resizeDiv(header_pessoal_frame_dropdown, header_pessoal, 1)

    window.addEventListener("resize", () => {
        resizeDiv(header_pessoal_frame_dropdown, header_pessoal, 1)
        if (window.innerWidth < 1020) {
            desktop_header_logo.src = "/fixed/images/AtecLogoSoloRect.png"
            desktop_header_logo.innerHeight = desktop_header_reference.innerHeight
            // desktop_header_logo.style.margin = '-2.5vw'
        } else {
            desktop_header_logo.src = "/fixed/images/AtecLogoComp.png"
            // desktop_header_logo.style.margin = '1vw'
        }

    });



    let closeSession = document.querySelectorAll('.closeSession')
    closeSession.forEach(elem=>{
        elem.addEventListener("click", ()=>{
            ativarhidden(elem.parentElement)
        })
    })
})
