function togglepressed(el){
    el.classList.toggle('pressed')
}
function togglehiddenn(el){
    el.classList.toggle('hidden')
}

async function getByUrl(url){
    try{
        const resp = await fetch(url)
        const data = await resp.json()
        return data
    }catch(error){
        return error
    }
}

document.addEventListener("DOMContentLoaded", async ()=> {
    let inputSearchList = document.querySelectorAll('.inputSearch')
    let buttonLink = document.querySelectorAll('button')

    let closeSession = document.querySelectorAll('.closeSession')

    let tier1 = document.querySelector('.tier1')
    let tier2 = document.querySelector('.tier2')
    let tier3 = document.querySelector('.tier3')

    tier1.addEventListener("change", async ()=> {
        let counties = await getByUrl(window.location.protocol+'//'+window.location.host+'/county/'+tier1.value+'/api')
        // console.log(counties)
        let selectTier1 = document.querySelector('.tier2');
        let selectTier2 = document.querySelector('.tier3');

        selectTier1.innerHTML = '<option value=""  tier1="" disabled selected>Selecione o concelho</option>'
        selectTier2.innerHTML = '<option value=""  tier2="" disabled selected>Selecione a freguesia</option>'

        counties.forEach(county =>{
            selectTier1.innerHTML += `<option value="${county.id}" tier1="${county.district_id}">${county.name}</option>`
        })

        selectTier1.disabled = false
        selectTier2.disabled = true
    })
    tier2.addEventListener("change", async()=> {
        let parishes = await getByUrl(window.location.protocol+'//'+window.location.host+'/parish/'+tier2.value+'/api')

        let select = document.querySelector('.tier3');
        select.innerHTML = '<option value=""  tier2="" disabled selected>Selecione a freguesia</option>'

        parishes.forEach(parish =>{
            select.innerHTML += `<option value="${parish.id}" tier2="${parish.county_id}">${parish.name}</option>`
        })

        select.disabled = false
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
        let newaction = 'backOffice/users/student/index/'
        header_back.href = '';
        header_back.href = window.location.origin+'/'+newaction;
    })
})
