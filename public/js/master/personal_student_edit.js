let coordenadas =[];
function getLocation() {
    if (navigator.geolocation) {
       navigator.geolocation.getCurrentPosition(showPosition)

    } else {
        coordenadas[0]=null;
        coordenadas[1]=null;
    }
}

function showPosition(position) {
    const lat = position.coords.latitude;
    const lon = position.coords.longitude;
    coordenadas[0]=lat;
    coordenadas[1]=lon;
    console.log(coordenadas[0])
    console.log(coordenadas[1])
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

document.addEventListener("DOMContentLoaded",  async()=> {
    let permissionAddress_check2 = document.querySelector('#permissionAddress_check2')

    let permissionAddress_check1 = document.querySelector('#permissionAddress_check1')

    let form_edit_student = document.querySelector('form');

    permissionAddress_check2.addEventListener('change' , () =>{
        if(permissionAddress_check2.checked == true){
            getLocation();
            // confirmation_usage = true;
        }
    })


    const modal = document.querySelector('.modal_edit')

    form_edit_student.addEventListener('submit' , (e) =>{
        if(permissionAddress_check2.checked == true && (coordenadas[0]!="" || coordenadas[0]!=undefined)){
            e.preventDefault();
            modal.classList.add('scale-100');
            setTimeout(()=>{
                document.querySelector('#latitude').value = coordenadas[0]
                document.querySelector('#longitude').value = coordenadas[1]
                $(form_edit_student).submit();
            }, 3000);
        }
        else{
            $(form_edit_student).submit();
        }
    })


















    let tier1 = document.querySelector('.tier1')
    let tier2 = document.querySelector('.tier2')
    let tier3 = document.querySelector('.tier3')

    tier1.addEventListener("change", async() => {
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
    tier2.addEventListener("change", async() => {
        let parishes = await getByUrl(window.location.protocol+'//'+window.location.host+'/parish/'+tier2.value+'/api')

        let select = document.querySelector('.tier3');
        select.innerHTML = '<option value=""  tier2="" disabled selected>Selecione a freguesia</option>'

        parishes.forEach(parish =>{
            select.innerHTML += `<option value="${parish.id}" tier2="${parish.county_id}">${parish.name}</option>`
        })

        select.disabled = false

    })
})
