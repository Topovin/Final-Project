function logincheak() { //проверка для поля Логин
        if (document.querySelector('#login').value.length > 15) {
        document.querySelector('.resultlogin').innerHTML = `<p>Максимум 15 символов</p>`;
        document.querySelector('.resultlogin').style.display = "block";}
        if  (document.querySelector('#login').value.length < 3) {
        document.querySelector('.resultlogin').innerHTML = `<p class="login-error">Минимум 3 символа</p>`;
        document.querySelector('.resultlogin').style.display = "block";}
        else {
            document.querySelector('.resultlogin').style.display = "none";
        }      
};
var resultpass = document.querySelector('.resultpass')
 function checkpass() { //для проверки совпадения паролей
    if (document.querySelector('#password').value !== document.querySelector('#repeat-password').value){
    document.querySelector('.resultpass').style.display = "block";
    resultpass.innerHTML = `<p class="pass-error">Пароли не совпадают</p>`;}
    else {
        document.querySelector('.resultpass').style.display = "none";
    }  
}



