
var result = document.querySelector('.result')

async function check() { //для проверки совпадения паролей
    if (document.querySelector('#password').value === document.querySelector('#repeat-password').value);
    else 
    alert('Пароли не совпадают');
        result.innerHTML += `
            <p>Пароли не совпадают</p>    
    `;
}
const menuBurger = document.querySelector('.sign-btn'); //для выезжания окошка при нажатии на кнопку "Войти"
const navMain = document.querySelector('.sign-form');

menuBurger.addEventListener('click', (Event) => {
    navMain.classList.toggle('sign-form-active');
}); 
const menuBurger1 = document.querySelector('.settings-btn'); //для выезжания окошка при нажатии на кнопку "Настройки"
const navMain1 = document.querySelector('.settings-form');

menuBurger1.addEventListener('click', (Event) => {
    navMain1.classList.toggle('settings-form-active');
}); 
