let qrbutton = document.querySelector('.login-form-top img');
let loginTop = document.querySelector('.login-form-top');

qrbutton.addEventListener('click' , () => {
    loginTop.innerHTML = `<h2>Log In</h2><p>QR under construction</p>`;
})