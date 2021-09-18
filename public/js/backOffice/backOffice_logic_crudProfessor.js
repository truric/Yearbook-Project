function togglepressed(el){
    el.classList.toggle('pressed')
}
function togglehiddenn(el){
    el.classList.toggle('hidden')
}



document.addEventListener("DOMContentLoaded", ()=> {
    let buttonLink = document.querySelectorAll('button')

    let closeSession = document.querySelectorAll('.closeSession')


    closeSession.forEach(elem=>{
        elem.addEventListener("click", ()=>{
            togglehiddenn(elem.parentElement)
        })
    })

    buttonLink.forEach(element => {
        element.addEventListener("mousedown", ()=>{
            if(!element.classList.contains('pressed')){
                togglepressed(element)
            }
        })
        element.addEventListener("mouseup", ()=>{
            if(element.classList.contains('pressed')){
                togglepressed(element)
            }
        })
        element.addEventListener("mouseout", ()=>{
            if(element.classList.contains('pressed')){
                togglepressed(element)
            }
        })
    });

    let header_back = document.querySelector('#header_back');
    header_back.addEventListener("click",()=>{
        let newaction = 'backOffice/users/professor/index'
        header_back.href = '';
        header_back.href = window.location.origin+'/'+newaction;
    })

})
