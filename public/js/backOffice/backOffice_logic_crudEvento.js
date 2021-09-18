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


    let right_arrow_eventos = document.querySelector('.right_arrow_eventos')
    let left_arrow_eventos = document.querySelector('.left_arrow_eventos')


    right_arrow_eventos.addEventListener("click", ()=>{

        let coluna_procurar_turmas = document.querySelector('.coluna_procurar_turmas_select')
        let coluna_procurar_turmas_list = document.querySelectorAll('.coluna_procurar_turmas_select option')
        let coluna_selecionar_turmas = document.querySelector('.coluna_selecionar_turmas_select')

        coluna_procurar_turmas_list.forEach(function callback(item, index){
            if(item.selected == true){
                let x = document.createElement("OPTION");
                x.text = item.text;
                x.value = item.value;

                coluna_selecionar_turmas.add(x);
                coluna_procurar_turmas.remove(item.index)
            }
        })
    })

    left_arrow_eventos.addEventListener("click", ()=>{

        let coluna_procurar_turmas = document.querySelector('.coluna_procurar_turmas_select')
        let coluna_selecionar_turmas = document.querySelector('.coluna_selecionar_turmas_select')
        let coluna_selecionar_turmas_list = document.querySelectorAll('.coluna_selecionar_turmas_select option')

        // coluna_selecionar_turmas_list.forEach(function callback(item, index){
        coluna_selecionar_turmas_list.forEach(item =>{

            if(item.selected == true){
                let x = document.createElement("OPTION");
                x.text = item.text;
                x.value = item.value;

                coluna_procurar_turmas.add(x);
                coluna_selecionar_turmas.remove(item.index)
            }
        })
    })

    let button_submit = document.querySelector('button')
    button_submit.addEventListener("click", ()=>{
        let turma_items = document.querySelectorAll('.coluna_selecionar_turmas_select option')
        turma_items.forEach(elem=>{
            elem.selected = 'selected';
        })
    })

    let header_back = document.querySelector('#header_back');
    header_back.addEventListener("click",()=>{
        let newaction = 'backOffice/'
        header_back.href = '';
        header_back.href = window.location.origin+'/'+newaction;
    })
})
