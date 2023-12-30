$(() => {
    const slider = document.querySelector('.slider');
    const sliderContent = document.querySelectorAll('.slider-content');
    const sliderNavButton = document.querySelectorAll('.slider-nav-button');
    let translate = 0;
    let index = 0;

    for(let i=0; i<sliderNavButton.length; i++){
        sliderNavButton[i].addEventListener('click' , () => {
            slider.style['transform'] = `translate(-${20*i}%)`;
            translate = -20*i;
            index = i;
            
            setTimeout(() => {
                removeNavButtonActiveClass();
                sliderNavButton[i].classList.add('slider-nav-button-active');
            },100)
        });
    }

    document.addEventListener('keydown' , (e) => {
        switch (e.key){
            case 'ArrowRight':
                if(translate>-60){
                    translate -= 20;
                    index++;
                }
                translateSlider();
                break;
                
            case 'ArrowLeft':
                if(translate<0){
                    translate += 20;
                    index--;
                };
                translateSlider();
                break;
        }
    })

    setInterval(() => {
        if(translate>-60){
            translate -= 20;
            index++;
        }else if(translate=-60){
            translate = 0;
            index = 0;
        }
        translateSlider();
    },5000)

    function removeNavButtonActiveClass(){
        for(let i=0; i<sliderNavButton.length; i++){
            sliderNavButton[i].classList.remove('slider-nav-button-active');
        }
    }

    function translateSlider(){
        slider.style['transform'] = `translate(${translate}%)`;

        setTimeout(() => {
            removeNavButtonActiveClass();
            sliderNavButton[index].classList.add('slider-nav-button-active');
        },100)
    }
})