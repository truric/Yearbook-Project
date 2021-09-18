function togglepressed(el){
    el.classList.toggle('pressed')
}
function ativarhidden(el){
    el.classList.toggle('hidden')
}

document.addEventListener("DOMContentLoaded", ()=> {
    let inputSearchList = document.querySelectorAll('.inputSearch')
    let buttonLink = document.querySelectorAll('button')

    let closeSession = document.querySelectorAll('.closeSession')
    closeSession.forEach(elem=>{
        elem.addEventListener("click", ()=>{
            ativarhidden(elem.parentElement)
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

    let escolherTurmaParaVer = document.querySelector('#escolherTurmaParaVer')
    let escolherTurmaParaGerir = document.querySelector('#escolherTurmaParaGerir')

    let select_escolherTurmaParaVer = document.querySelector('#escolherTurmaParaVer select')
    let select_escolherTurmaParaGerir = document.querySelector('#escolherTurmaParaGerir select')


   select_escolherTurmaParaVer.onchange = function(){
        let newaction = '/group/' + this.value;
        escolherTurmaParaVer.action = newaction;
        // console.log(escolherTurmaParaVer)

        escolherTurmaParaVer.action = window.location.origin + newaction
        // console.log(window.location.origin)
        // console.log(escolherTurmaParaVer.action)
   }

   select_escolherTurmaParaGerir.onchange = function() {
       let newaction = 'backOffice/group/' + this.value + '/edit';
       // console.log(newaction)
       escolherTurmaParaGerir.action = window.location.origin + '/' + newaction;
       // console.log(window.location.origin)
       // console.log(escolherTurmaParaGerir.action)
   }


})
