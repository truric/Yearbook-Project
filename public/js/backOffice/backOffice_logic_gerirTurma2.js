function togglepressed(el){
    el.classList.toggle('pressed')
}
function togglehidden(el){
    el.classList.toggle('hidden')
}
// function introToPage(tier1, tier2){
//     tier1.options[0].selected=true
//     tier2.options[0].selected=true
//     if(tier1.value == 0){
//         tier2.disabled = true
//     }
//     else{
//         tier2.disabled = false
//     }
// }


document.addEventListener("DOMContentLoaded", ()=> {
    let inputSearchList = document.querySelectorAll('.inputSearch')
    let buttonLink = document.querySelectorAll('button')

    let closeSession = document.querySelectorAll('.closeSession')
    closeSession.forEach(elem=>{
        elem.addEventListener("click", ()=>{
            togglehidden(elem.parentElement)
        })
    })

    let turma_menu = document.querySelector('.mini-menu a:first-child')
    let alunos_menu = document.querySelector('.mini-menu a:nth-child(2)')
    let professores_menu = document.querySelector('.mini-menu a:nth-child(3)')
    let eventos_menu = document.querySelector('.mini-menu a:last-child')


    let btnUpdate = document.querySelector('.turma_edit_btns button:first-child')

    let crudTurma = document.querySelector('.crudTurma')
    let turma_alunos = document.querySelector('.turma_alunos')
    let turma_professores = document.querySelector('.turma_professores')
    let turma_eventos = document.querySelector('.turma_eventos')



    turma_menu.addEventListener("click",()=>{
        if(crudTurma.classList.contains("hidden")){
            togglehidden(crudTurma)
        }
        if(!turma_alunos.classList.contains("hidden")){
            togglehidden(turma_alunos)
        }
        if(!turma_professores.classList.contains("hidden")){
            togglehidden(turma_professores)
        }
        if(!turma_eventos.classList.contains("hidden")){
            togglehidden(turma_eventos)
        }
        // btnUpdate.display = 'flex';
    })
    alunos_menu.addEventListener("click",()=>{
        if(!crudTurma.classList.contains("hidden")){
            togglehidden(crudTurma)
        }
        if(turma_alunos.classList.contains("hidden")){
            togglehidden(turma_alunos)
        }
        if(!turma_professores.classList.contains("hidden")){
            togglehidden(turma_professores)
        }
        if(!turma_eventos.classList.contains("hidden")){
            togglehidden(turma_eventos)
        }
    })
    professores_menu.addEventListener("click",()=>{

        if(!crudTurma.classList.contains("hidden")){
            togglehidden(crudTurma)
        }
        if(!turma_alunos.classList.contains("hidden")){
            togglehidden(turma_alunos)
        }
        if(turma_professores.classList.contains("hidden")){
            togglehidden(turma_professores)
        }
        if(!turma_eventos.classList.contains("hidden")){
            togglehidden(turma_eventos)
        }

    })
    eventos_menu.addEventListener("click",()=>{
        if(!crudTurma.classList.contains("hidden")){
            togglehidden(crudTurma)
        }
        if(!turma_alunos.classList.contains("hidden")){
            togglehidden(turma_alunos)
        }
        if(!turma_professores.classList.contains("hidden")){
            togglehidden(turma_professores)
        }
        if(turma_eventos.classList.contains("hidden")){
            togglehidden(turma_eventos)
        }
    })

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



    // ALUNOS

    let right_arrow_alunos = document.querySelector('.right_arrow_alunos')
    let left_arrow_alunos = document.querySelector('.left_arrow_alunos')

    right_arrow_alunos.addEventListener("click", ()=>{
        let coluna_procurar_alunos = document.querySelector('.coluna_procurar_alunos_select')
        let coluna_procurar_alunos_list = document.querySelectorAll('.coluna_procurar_alunos_select option')
        let coluna_selecionar_alunos = document.querySelector('.coluna_selecionar_alunos_select')

        let delegado_list = document.querySelector('.turma_delegado')
        let subdelegado_list = document.querySelector('.turma_subdelegado')

        coluna_procurar_alunos_list.forEach(item =>{
            if(item.selected == true){
                let x = document.createElement("OPTION");
                x.text = item.text;
                x.value = item.value;

                let y = document.createElement("OPTION");
                y.text = item.text;
                y.value = item.value;

                let z = document.createElement("OPTION");
                z.text = item.text;
                z.value = item.value

                coluna_selecionar_alunos.add(x);
                delegado_list.add(y);
                subdelegado_list.add(z)


                coluna_procurar_alunos.remove(item.index)
            }
        })
    })

    left_arrow_alunos.addEventListener("click", ()=>{
        let coluna_procurar_alunos = document.querySelector('.coluna_procurar_alunos_select')
        let coluna_selecionar_alunos = document.querySelector('.coluna_selecionar_alunos_select')
        let coluna_selecionar_alunos_list = document.querySelectorAll('.coluna_selecionar_alunos_select option')

        let delegado = document.querySelector('.turma_delegado')
        let subdelegado = document.querySelector('.turma_subdelegado')

        let delegado_list = document.querySelectorAll('.turma_delegado option')
        let subdelegado_list = document.querySelectorAll('.turma_subdelegado option')

        coluna_selecionar_alunos_list.forEach(item =>{
            if(item.selected == true){
                let x = document.createElement("OPTION");
                x.text = item.text;
                x.value = item.value;

                coluna_procurar_alunos.add(x);

                delegado_list.forEach(item2 =>{
                    if(item2.value == item.value && item2.text == item.text){
                        delegado.remove(item2.index)
                    }
                })
                subdelegado_list.forEach(item2 =>{
                    if(item2.value == item.value && item2.text == item.text){
                        subdelegado.remove(item2.index)
                    }
                })
                coluna_selecionar_alunos.remove(item.index)
            }
        })
    })






    // PROFESSORES

    let right_arrow_professores = document.querySelector('.right_arrow_professores')
    let left_arrow_professores = document.querySelector('.left_arrow_professores')


    right_arrow_professores.addEventListener("click", ()=>{
        let coluna_procurar_professores = document.querySelector('.coluna_procurar_professores_select')
        let coluna_procurar_professores_list = document.querySelectorAll('.coluna_procurar_professores_select option')
        let coluna_selecionar_professores = document.querySelector('.coluna_selecionar_professores_select')

        coluna_procurar_professores_list.forEach(item =>{
            if(item.selected == true){
                let x = document.createElement("OPTION");
                x.text = item.text;
                x.value = item.value;

                coluna_selecionar_professores.add(x);
                coluna_procurar_professores.remove(item.index)
            }
        })
    })

    left_arrow_professores.addEventListener("click", ()=>{
        let coluna_procurar_professores = document.querySelector('.coluna_procurar_professores_select')
        let coluna_selecionar_professores = document.querySelector('.coluna_selecionar_professores_select')
        let coluna_selecionar_professores_list = document.querySelectorAll('.coluna_selecionar_professores_select option')

        coluna_selecionar_professores_list.forEach(item =>{
            if(item.selected == true){
                let x = document.createElement("OPTION");
                x.text = item.text;
                x.value = item.value;

                coluna_procurar_professores.add(x);

                coluna_selecionar_professores.remove(item.index)
            }
        })
    })





    //EVENTOS
    let searchEventos = document.querySelector('#searchEventos')

    searchEventos.value="";
    let tableListEvents = document.querySelectorAll('#table_eventos tr')

    searchEventos.addEventListener("keyup", ()=>{
        let input = searchEventos.value.toUpperCase();
        fullOptions =  tableListEvents

        let array = []
        array.length=(fullOptions.length-1)

        for(let i = 1; i<fullOptions.length; i++){
            if(input == ''){
                fullOptions[i].style.display = "";
            }
            if(fullOptions[i].textContent.toUpperCase().indexOf(input) > -1 || fullOptions[i].innerText.toUpperCase().indexOf(input) > -1){
                fullOptions[i].style.display=""
                array[i-1]=0
            }
            else{
                fullOptions[i].style.display="none"
                array[i-1]=1
            }
        }

    })

    let header_back = document.querySelector('#header_back');
    header_back.addEventListener("click",()=>{
        let newaction = 'backOffice/'
        header_back.href = '';
        header_back.href = window.location.origin+'/'+newaction;
    })

})
