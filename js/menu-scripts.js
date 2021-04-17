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

const menuBurger2 = document.querySelector('#string'); //для выезжания окошка при нажатии на кнопку "Настройки"
const navMain2 = document.querySelector('.down-menu');

menuBurger2.addEventListener('click', (Event) => {
    navMain2.classList.toggle('down-menu-active');
}); 

const sun = document.querySelector('.far.fa-sun');
const moon = document.querySelector('.far.fa-moon');
const changeTheme = document.querySelector('#sun-moon');
const icon = document.querySelector('.sun-moon');
const body = document.body;

changeTheme.addEventListener('click', (Event) =>{
    if(document.querySelector('.far.fa-sun')){
        icon.innerHTML = `
        <i class="far fa-moon"></i>`
        body.style.backgroundColor = 'black';
    }
    else{
        icon.innerHTML = `
        <i class="far fa-sun"></i>`
        body.style.backgroundColor = 'white';
    }
})