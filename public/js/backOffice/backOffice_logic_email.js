function togglepressed(el){
    el.classList.toggle('pressed')
}
function togglehidden(el){
    el.classList.toggle('hidden')
}
function toggleopacity(el){
    el.classList.toggle('opacity40')
}

document.addEventListener("DOMContentLoaded", ()=> {
    let closeSession = document.querySelectorAll('.closeSession')
    closeSession.forEach(elem=>{
        elem.addEventListener("click", ()=>{
            togglehidden(elem.parentElement)
        })
    })

    let btns = document.querySelectorAll('.btn')

    btns.forEach(element =>{
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
    })


    let header_back = document.querySelector('#header_back');
    header_back.addEventListener("click",()=>{
        let newaction = 'backOffice/'
        header_back.href = '';
        header_back.href = window.location.origin+'/'+newaction;
    })


    let inputSearchList = document.querySelectorAll('.inputSearch')
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


    let right_arrow_eventos = document.querySelector('.right_arrow_eventos')
    let left_arrow_eventos = document.querySelector('.left_arrow_eventos')

    right_arrow_eventos.addEventListener("click", ()=>{

        let coluna_procurar_events = document.querySelector('.coluna_procurar_events_select')
        let coluna_procurar_events_list = document.querySelectorAll('.coluna_procurar_events_select option')
        let coluna_selecionar_events = document.querySelector('.coluna_selecionar_events_select')


        coluna_procurar_events_list.forEach(function callback(item, index){
            if(item.selected == true){
                let x = document.createElement("OPTION");
                x.text = item.text;
                x.value = item.value;

                coluna_selecionar_events.add(x);
                coluna_procurar_events.remove(item.index)
            }
        })
    })

    left_arrow_eventos.addEventListener("click", ()=>{

        let coluna_procurar_events = document.querySelector('.coluna_procurar_events_select')
        let coluna_selecionar_events = document.querySelector('.coluna_selecionar_events_select')
        let coluna_selecionar_events_list = document.querySelectorAll('.coluna_selecionar_events_select option')

        coluna_selecionar_events_list.forEach(item =>{

            if(item.selected == true){
                let x = document.createElement("OPTION");
                x.text = item.text;
                x.value = item.value;

                coluna_procurar_events.add(x);
                coluna_selecionar_events.remove(item.index)
            }
        })
    })

    document.querySelector('form').addEventListener("submit", ()=>{
        console.log('teste');
        let destino = document.querySelectorAll('.coluna_selecionar_events_select option')
        destino.forEach(elem=>{
            // console.log(elem)
            elem.selected = 'selected';
        })
    })

})
