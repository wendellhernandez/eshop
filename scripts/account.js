$(()=>{
    let updateButton = $('.account-form-update');
    let formRight = $('.account-main-right');

    updateButton.on('click' , ()=> {
        formRight.toggle("slide");

        if(updateButton.text() == 'Update'){
            updateButton.text('Hide form');
        }else{
            updateButton.text('Update');
        }
    })
})