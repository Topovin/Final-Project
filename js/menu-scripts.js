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
const string = document.querySelector('.string');

menuBurger2.addEventListener('click', (Event) => {
    navMain2.classList.toggle('down-menu-active');
}); 
const sun = document.querySelector('.far.fa-sun');
const moon = document.querySelector('.far.fa-moon');
const changeTheme = document.querySelector('.switch');
const icon = document.querySelector('.sun-moon');
const body = document.body;
const container = document.querySelector('.main-container');
let link1 = document.querySelector('#a');
// console.log(link1.getAttribute('href'));
link1.setAttribute('href', 'style/light-theme.css')

changeTheme.addEventListener('click', (Event) =>{
   if(link1.getAttribute('href') == 'style/dark-theme.css'){
        link1.setAttribute('href', 'style/light-theme.css');
        changeTheme.classList.toggle('active');
   }
   else{
       link1.setAttribute('href', 'style/dark-theme.css');
       changeTheme.classList.toggle('active');
   }
});

menuBurger.addEventListener('click', (Event) => {
    if(navMain1.classList.contains("settings-form-active")){
        navMain1.classList.toggle('settings-form-active');
    }
    if(navMain2.classList.contains("down-menu-active")){
        navMain2.classList.toggle('down-menu-active');
        string.checked = false;
    }
});

menuBurger1.addEventListener('click', (Event) => {
    if(navMain.classList.contains("sign-form-active")){
        navMain.classList.toggle('sign-form-active');
    }
    if(navMain2.classList.contains("down-menu-active")){
        navMain2.classList.toggle('down-menu-active');
        string.checked = false;
        console.log(string.checked);
    }
});



menuBurger2.addEventListener('click', (Event) => {
    if(navMain.classList.contains("sign-form-active")){
        navMain.classList.toggle('sign-form-active');
    }
    if(navMain1.classList.contains("settings-form-active")){
        navMain1.classList.toggle('settings-form-active');
    }
});



menuBurger2.addEventListener('click', (Event) => {
    if(navMain.classList.contains("sign-form-active")){
        navMain.classList.toggle('sign-form-active');
    }
    if(navMain1.classList.contains("settings-form-active")){
        navMain1.classList.toggle('settings-form-active');
    }
});

