async function getAllByUrl(url){
    try{
        const resp = await fetch(url)
        const data = await resp.json()
        return data
    }catch(error){
        return error
    }

}


document.addEventListener('DOMContentLoaded', async()=> {

    let fotos = await getAllByUrl(window.location.pathname+'/photos')

    const vers = [1.0, 1.6, 2.2];
    let fotos_processed =[];

    fotos.forEach(foto =>{

        let verFinal = vers[0];
        for(let i = 0; i<vers.length; i++){
            let actual = vers[i]
            if(Math.abs(foto.aspect_radio - verFinal) >= Math.abs(foto.aspect_radio - actual)){
                verFinal = vers[i];
            }
        }

        let classes = ''
        switch(verFinal){
            case 1.0: classes='span1 '
                    break;
            case 1.6: classes='span2 '
                    break;
            case 2.2: classes='span3 '
                    break;
        }

        fotos_processed.push(`<img class="galeria_item ${classes}"
                                src="${window.location.protocol }/${foto.url}"
                                onclick="window.location=window.location.protocol+'//'+window.location.host+'/photo/${foto.id}'"
                                event=${foto.category}>`)
    })

    let galeria = document.querySelector('.galeria');
    galeria.innerHTML =''

    for(let i = 0; i<fotos_processed.length; i++){
        galeria.innerHTML += fotos_processed[i]
    }
})
