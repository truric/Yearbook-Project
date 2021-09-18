document.addEventListener('DOMContentLoaded', ()=> {
    // let insert_photo_label = document.querySelector('.gallery_form label')
    let insert_photo_button= document.querySelector('.gallery_form button')
    let insert_photo_input= document.querySelector('.gallery_form #photo')

    if(insert_photo_input.value == ""){
        insert_photo_button.disabled = true;
    }

    insert_photo_input.addEventListener("change",()=>{

        if(insert_photo_input.value == ""){
            insert_photo_button.disabled = true;
            if(!insert_photo_button.classList.contains('disabled')){
                insert_photo_button.classList.add('disabled')
            }
        }
        else{
            insert_photo_button.disabled = false
            if(insert_photo_button.classList.contains('disabled')){
                insert_photo_button.classList.remove('disabled')
            }
        }
        // let textoLabel = insert_photo_input.value.split('\\');
        // insert_photo_label.innerHTML = textoLabel[textoLabel.length-1]
    })

    insert_photo_button.addEventListener("mousedown", (e) => {
        e.preventDefault();
        if (!insert_photo_button.classList.contains('pressed')) {
            ativarpressed(insert_photo_button)
        }
    })
    insert_photo_button.addEventListener("mouseup", (e) => {
        e.preventDefault();

        if (insert_photo_button.classList.contains('pressed')) {
            ativarpressed(insert_photo_button)
        }
    })
    insert_photo_button.addEventListener("mouseout", (e) => {
        e.preventDefault();

        if (insert_photo_button.classList.contains('pressed')) {
            ativarpressed(insert_photo_button)
        }
    })

})
