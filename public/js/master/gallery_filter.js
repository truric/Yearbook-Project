document.addEventListener('DOMContentLoaded', ()=> {

    let toggle = document.querySelector('.toggle')
    let gallery_switch = document.querySelector('.switch')
    let input  = document.querySelector('#gallery_toggle_input')
    let slider = document.querySelector('#gallery_toggle_slider')




    slider.addEventListener('click', ()=> {
        input.value = !input.value

        toggle.classList.toggle("toggle_checked");
        gallery_switch.classList.toggle("switch_checked");
        // slider.classList.toggle("slider_checked")
        let gallery_photos = document.querySelectorAll('.galeria img')
        gallery_photos.forEach(gallery_photo => {
            if (gallery_photo.getAttribute("event") != 0){
                gallery_photo.classList.toggle("gallery_hidden")
            }
        })

    });
})
