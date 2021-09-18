function togglepressed(el){
    el.classList.toggle('pressed')
}
function togglehiddenn(el){
    el.classList.toggle('hidden')
}

document.addEventListener("DOMContentLoaded", ()=> {
    let inputSearchList = document.querySelectorAll('.inputSearch')
    let buttonLink = document.querySelectorAll('button')

    let closeSession = document.querySelectorAll('.closeSession')

    let tier1 = document.querySelector('.tier1')
    let tier2 = document.querySelector('.tier2')
    // introToPage(tier1, tier2);






    tier1.addEventListener("change", ()=> {
        let t2options = tier2.options

        if(tier1.value == 0){
            tier2.disabled = true
        }
        else{
            tier2.disabled = false
        }

        for(i=0; i<t2options.length; i++){
            if(t2options[i].getAttribute('tier1') == tier1.value){
                t2options[i].style.display = "";
            }
            else{
                t2options[i].style.display = "none";
            }
        }

        // const filteredoptions = t2options.filter(options => options.tier == tier1.value

    })



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

    inputSearchList.forEach(inputSearch=>{

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
    })





    let header_back = document.querySelector('#header_back');
    header_back.addEventListener("click",()=>{
        let newaction = 'backOffice/'
        header_back.href = '';
        header_back.href = window.location.origin+'/'+newaction;
    })
})
