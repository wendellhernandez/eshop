$(() => {
    const imageSelection = document.querySelectorAll('.image-selection-container img');
    const imageShow = document.querySelector('.image-show img');

    for(let i=0; i<imageSelection.length; i++){
        imageSelection[i].addEventListener('mouseenter' , (e) => {
            let imgsrc = e.target.attributes.src.value;
            
            imageShow.attributes.src.value = imgsrc;
            
            for(let i=0; i<imageSelection.length; i++){
                imageSelection[i].classList.remove('image-selection-hover');
            }

            imageSelection[i].classList.add('image-selection-hover');
        })
    }
})