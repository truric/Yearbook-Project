function togglepressed(el){
    el.classList.toggle('pressed')
}
function togglehidden(el){
    el.classList.toggle('hidden')
}



document.addEventListener("DOMContentLoaded", ()=> {
    let buttonLink = document.querySelectorAll('button')

    let closeSession = document.querySelectorAll('.closeSession')


    closeSession.forEach(elem=>{
        elem.addEventListener("click", ()=>{
            togglehidden(elem.parentElement)
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



    let inputSearch = document.querySelector('.inputSearch')

    inputSearch.addEventListener("keyup", ()=>{
        var input, option;
        input = inputSearch.value.toUpperCase();
        option =  inputSearch.parentElement.querySelectorAll("option");

        option.forEach(elem =>{
            if(input == ''){
                elem.style.display = "";
            }
            if(elem.textContent.toUpperCase().indexOf(input) > -1 || elem.innerText.toUpperCase().indexOf(input) > -1)
            elem.style.display=""
            else{
                elem.style.display="none"
            }
        })
    })

    let header_back = document.querySelector('#header_back');
    header_back.addEventListener("click",()=>{
        let newaction = 'backOffice/atec/'
        header_back.href = '';
        header_back.href = window.location.origin+'/'+newaction;
    })

})
