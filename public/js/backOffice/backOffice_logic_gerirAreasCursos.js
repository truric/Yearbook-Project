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
    console.log(btns)
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

    let areas_menu = document.querySelector('.mini-menu a:first-child')
    let cursos_menu = document.querySelector('.mini-menu a:last-child')

    let searchAreas = document.querySelector('#searchAreas')
    let searchPCursos = document.querySelector('#searchCursos')
    let mini_menu_areas = document.querySelector('.mini_menu_areas')
    let mini_menu_cursos = document.querySelector('.mini_menu_cursos')
    let table_areas = document.querySelector('#table_areas')
    let table_cursos = document.querySelector('#table_cursos')


    areas_menu.addEventListener("click", ()=>{
        if(areas_menu.classList.contains("opacity40")){
            toggleopacity(areas_menu)
        }
        if(mini_menu_areas.classList.contains("hidden")){
            togglehidden(mini_menu_areas)
        }
        if(searchAreas.classList.contains("hidden")){
            togglehidden(searchAreas)
        }
        if(table_areas.parentElement.classList.contains("hidden")){
            togglehidden(table_areas.parentElement)
        }

        if(!cursos_menu.classList.contains("opacity40")){
            toggleopacity(cursos_menu)
        }
        if(!mini_menu_cursos.classList.contains("hidden")){
            togglehidden(mini_menu_cursos)
        }
        if(!searchPCursos.classList.contains("hidden")){
            togglehidden(searchPCursos)
        }
        if(!table_cursos.parentElement.classList.contains("hidden")){
            togglehidden(table_cursos.parentElement)
        }
    })

    cursos_menu.addEventListener("click", ()=>{
        if(!areas_menu.classList.contains("opacity40")){
            toggleopacity(areas_menu)
        }
        if(!mini_menu_areas.classList.contains("hidden")){
            togglehidden(mini_menu_areas)
        }
        if(!searchAreas.classList.contains("hidden")){
            togglehidden(searchAreas)
        }
        if(!table_areas.parentElement.classList.contains("hidden")){
            togglehidden(table_areas.parentElement)
        }

        if(cursos_menu.classList.contains("opacity40")){
            toggleopacity(cursos_menu)
        }
        if(mini_menu_cursos.classList.contains("hidden")){
            togglehidden(mini_menu_cursos)
        }
        if(searchPCursos.classList.contains("hidden")){
            togglehidden(searchPCursos)
        }
        if(table_cursos.parentElement.classList.contains("hidden")){
            togglehidden(table_cursos.parentElement)
        }
    })




    searchAreas.value="";
    searchPCursos.value="";

    let tableListAreas = document.querySelectorAll('#table_areas tr')

    searchAreas.addEventListener("keyup", ()=>{
        let input = searchAreas.value.toUpperCase();
        fullOptions =  tableListAreas

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

        if(array.every(isBelowThreshold)){
            for(let i = 1; i<fullOptions.length; i++){
                fullOptions[i].style.display=""
            }
        }

    })



    let tableListCursos = document.querySelectorAll('#table_cursos tr')
    searchCursos.addEventListener("keyup", ()=>{
        let input = searchCursos.value.toUpperCase();
        fullOptions =  tableListCursos

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

        if(array.every(isBelowThreshold)){
            for(let i = 1; i<fullOptions.length; i++){
                fullOptions[i].style.display=""
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
