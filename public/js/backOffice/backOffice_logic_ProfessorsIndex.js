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

    // let inputFileAlunos = document.querySelector('#file_alunos')
    // let btnFileAlunos = document.querySelector('#btn_file_alunos')
    // let labelFileAlunos = document.querySelector('#label_file_alunos')
    //
    // if(inputFileAlunos.value == ''){
    //     btnFileAlunos.disabled = true;
    //     btnFileAlunos.classList.add("disabled_color")
    //     btnFileAlunos.classList.add("disabled_color_border")
    // }
    // inputFileAlunos.addEventListener("change",()=>{
    //     if(inputFileAlunos.value == ''){
    //         btnFileAlunos.disabled = true;
    //         btnFileAlunos.classList.add("disabled_color")
    //         btnFileAlunos.classList.add("disabled_color_border")
    //     }
    //     else{
    //         btnFileAlunos.disabled = false;
    //         btnFileAlunos.classList.remove("disabled_color")
    //         btnFileAlunos.classList.remove("disabled_color_border")
    //     }
    //
    //     let textoLabel = inputFileAlunos.value.split('\\');
    //     labelFileAlunos.innerHTML = textoLabel[textoLabel.length-1]
    //     // labelFileAlunos.innerHTML = 'Ficheiro Inserido'
    // })
    //
    //
    let inputFileProfessores = document.querySelector('#file_professores')
    let btnFileProfessores = document.querySelector('#btn_file_professores')
    let labelFileProfessores = document.querySelector('#label_file_professores')

    if(inputFileProfessores.value == ''){
        btnFileProfessores.disabled = true;
        btnFileProfessores.classList.add("disabled_color")
        btnFileProfessores.classList.add("disabled_color_border")
    }
    inputFileProfessores.addEventListener("change",()=>{
        if(inputFileProfessores.value == ''){
            btnFileProfessores.disabled = true;
            btnFileProfessores.classList.add("disabled_color")
            btnFileProfessores.classList.add("disabled_color_border")
        }
        else{
            btnFileProfessores.disabled = false;
            btnFileProfessores.classList.remove("disabled_color")
            btnFileProfessores.classList.remove("disabled_color_border")
        }

        let textoLabel = inputFileProfessores.value.split('\\');
        labelFileProfessores.innerHTML = textoLabel[textoLabel.length-1]

        // labelFileProfessores.innerHTML = 'Ficheiro Inserido'
    })



    // let alunos_menu = document.querySelector('.mini-menu a:first-child')
    // let professores_menu = document.querySelector('.mini-menu a:last-child')
    //
    // let searchAlunos = document.querySelector('#searchAlunos')
    // let searchProfessores = document.querySelector('#searchProfessores')
    // let mini_menu_alunos = document.querySelector('.mini_menu_alunos')
    // let mini_menu_professores = document.querySelector('.mini_menu_professores')
    // let table_alunos = document.querySelector('#table_alunos')
    // let table_professores = document.querySelector('#table_professores')
    //
    //
    // alunos_menu.addEventListener("click", ()=>{
    //     if(alunos_menu.classList.contains("opacity40")){
    //         toggleopacity(alunos_menu)
    //     }
    //     if(mini_menu_alunos.classList.contains("hidden")){
    //         togglehidden(mini_menu_alunos)
    //     }
    //     if(searchAlunos.classList.contains("hidden")){
    //         togglehidden(searchAlunos)
    //     }
    //     if(table_alunos.parentElement.classList.contains("hidden")){
    //         togglehidden(table_alunos.parentElement)
    //     }
    //
    //     if(!professores_menu.classList.contains("opacity40")){
    //         toggleopacity(professores_menu)
    //     }
    //     if(!mini_menu_professores.classList.contains("hidden")){
    //         togglehidden(mini_menu_professores)
    //     }
    //     if(!searchProfessores.classList.contains("hidden")){
    //         togglehidden(searchProfessores)
    //     }
    //     if(!table_professores.parentElement.classList.contains("hidden")){
    //         togglehidden(table_professores.parentElement)
    //     }
    // })
    //
    // professores_menu.addEventListener("click", ()=>{
    //     if(!alunos_menu.classList.contains("opacity40")){
    //         toggleopacity(alunos_menu)
    //     }
    //     if(!mini_menu_alunos.classList.contains("hidden")){
    //         togglehidden(mini_menu_alunos)
    //     }
    //     if(!searchAlunos.classList.contains("hidden")){
    //         togglehidden(searchAlunos)
    //     }
    //     if(!table_alunos.parentElement.classList.contains("hidden")){
    //         togglehidden(table_alunos.parentElement)
    //     }
    //
    //     if(professores_menu.classList.contains("opacity40")){
    //         toggleopacity(professores_menu)
    //     }
    //     if(mini_menu_professores.classList.contains("hidden")){
    //         togglehidden(mini_menu_professores)
    //     }
    //     if(searchProfessores.classList.contains("hidden")){
    //         togglehidden(searchProfessores)
    //     }
    //     if(table_professores.parentElement.classList.contains("hidden")){
    //         togglehidden(table_professores.parentElement)
    //     }
    // })
    //



    // searchAlunos.value="";
    searchProfessores.value="";
    // let tableListStudents = document.querySelectorAll('#table_alunos tr')
    //
    // searchAlunos.addEventListener("keyup", ()=>{
    //     let input = searchAlunos.value.toUpperCase();
    //     fullOptions =  tableListStudents
    //
    //     let array = []
    //     array.length=(fullOptions.length-1)
    //
    //     for(let i = 1; i<fullOptions.length; i++){
    //         if(input == ''){
    //             fullOptions[i].style.display = "";
    //         }
    //         if(fullOptions[i].textContent.toUpperCase().indexOf(input) > -1 || fullOptions[i].innerText.toUpperCase().indexOf(input) > -1){
    //             fullOptions[i].style.display=""
    //             array[i-1]=0
    //         }
    //         else{
    //             fullOptions[i].style.display="none"
    //             array[i-1]=1
    //         }
    //     }
    // })

    let tableListProfessores = document.querySelectorAll('#table_professores tr')
    searchProfessores.addEventListener("keyup", ()=>{
        let input = searchProfessores.value.toUpperCase();
        fullOptions =  tableListProfessores

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

    let table_edit_btns = document.querySelectorAll('.links_crud form:first-of-type button')
    table_edit_btns.forEach(element=>{
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
    let table_delete_btns = document.querySelectorAll('.links_crud form:last-of-type button')
    table_delete_btns.forEach(element=>{
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
})
