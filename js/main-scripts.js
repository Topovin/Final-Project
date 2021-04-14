var result = document.querySelector('.result')

 function check() { //для проверки совпадения паролей
    if (document.querySelector('#password').value === document.querySelector('#repeat-password').value);
    else {
        alert('Пароли не совпадают');
        result.innerHTML += `
            <p>Пароли не совпадают</p>    
    `;
    }
    
}

