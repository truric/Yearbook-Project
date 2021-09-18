// let site = window.location=window.location.protocol+'//'+window.location.host;
document.addEventListener('DOMContentLoaded', ()=> {
    let carousels = document.querySelectorAll('.carrossel');
    carousels.forEach(
        carousel => {
        let swiper_wrapper = carousel.querySelector('.swiper-wrapper')
        let carousel_imgs = carousel.querySelectorAll('.swiper-wrapper img')
        let carousel_buttons = carousel.querySelector('.carousel_buttons')

            if(carousel_imgs.length < 1){
                carousel_buttons.innerHTML ="";
            }
            if(swiper_wrapper.children.length ==0){
                swiper_wrapper.innerHTML += `<div class="swiper-slide flex justify-center items-center" >
                                                <div>
                                                    <img class="object-center w-full" src='${window.location.protocol}/fixed/images/AtecLogoSolo.png'>

                                                </div>
                                            </div>`

            }

        })


})
