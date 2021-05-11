<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final Project</title>
    <link rel="stylesheet" href="style/registration.css">
    <link rel="stylesheet" href="style/main-theme.css">
    <link rel="stylesheet" href="style/dark-theme.css" id="a">
    <link href="https://allfont.ru/allfont.css?fonts=open-sans" rel="stylesheet" type="text/css" /> <!--font-family: 'Open Sans', arial;-->
    <link rel="stylesheet" href="font-awesome/css/all.min.css">
    <link href="https://allfont.ru/allfont.css?fonts=micra" rel="stylesheet" type="text/css" />
</head>
<body>  
    </div>
    <div class="settings-form">
        <div class="theme-selector">
            <div class="switch">
                <div class="switch-circle"></div>
            </div>
                <div class="sun-moon">
                     <label for="selector" id="sun-selector"><i class="far fa-sun"></i></label>
                </div>
        </div>
    </div>
    <nav>
        <div class="up-menu">
                <div class="left-btn">
                    <button id="main" onclick="window.location.href = 'main-page.php';">Главная</button>
                    <form id="search-form">
                        <input type="search" name="search" placeholder="Поиск по сайту" id="search" class="input1"><button id="search-submit"><i class="fas fa-chevron-left"></i></button>
                    </form>
                </div>
                <div class="right-btn">
                    <button class="settings-btn"><i class="fas fa-cog"></i></button>
                    <button class="sign-btn">Войти</button>
                </div>
        </div>
        <div class="down-menu">
            <input type="checkbox" id="string" class="string"><label for="string" id="string-label"><i class="fas fa-chevron-left"></i></label>
            <button>Оформить подписку</button>
            <button>Отзывы</button>
            <button>О нас</button>
            <button>Контакты</button>
        </div>
    </nav>          
    <div class="main-container-reg">
        <?php
        require "registration/db.php";

        $data = $_POST;
        if(isset($data['do_signup']))
        {
            $errors = array();
            if (trim($data['login']) == '')
            {
                $errors[] = 'Введите логин';
            }
            if(R::count('users', "login = ? OR email = ?", array($data['login'], $data['email'])) > 0)
            {
                $errors[] = 'Пользователь с таким именем или email-адресом уже зарегестрирован';
            }
            if (trim($data['email']) == '')
            {
                $errors[] = 'Введите почту';
            }
            if (trim($data['password']) == '')
            {
                $errors[] = 'Введите пароль';
            }
            if (trim($data['passrepeat']) == '')
            {
                $errors[] = 'Повторите пароль';
            }
            if (trim($data['password']) != trim($data['passrepeat']))
            {
                $errors[] = 'Пароли не совпадают';
            }
            if (empty($errors))
            {
                $user = R::dispense('users');
                $user->login = $data['login'];
                $user->email = $data['email'];
                $user->password = password_hash($data['password'], PASSWORD_DEFAULT);
                $user->passrepeat = password_hash($data['passrepeat'], PASSWORD_DEFAULT);
                $user->gender = $data['gender'];
                $user->abyf = $data['abyf'];
                R::store($user);
                echo '<div id="sucsess" style="position: absolute;">Регистрация прошла успешно</div>';
            } else 
                {
                    echo '<div id="errors" style="position: absolute;">'.array_shift($errors).'</div>';
                }
            
        }
    ?>
        
        <div class="h-reg"><h1>Регистрация</h1></div>
        <form id="reg-form" name="registr" method="post" action="/registration.php">
            <div class="up-form-reg">
                <input type="text" id="login" placeholder="Логин" name="login" autocomplete="off" value="<?php echo @$data['login'];?>"><br>
                <input type="email" id="email" placeholder="Email" name="email" value="<?php echo @$data['email'];?>"><br>
                <input type="password" id="password" placeholder="Пароль" name="password" value="<?php echo @$data['pass'];?>"><br>
                <input type="password" id="repeat-password" placeholder="Повторите пароль" name="passrepeat" value="<?php echo @$data['passrepeat'];?>"><br>
            </div>
            <p id="h-gender">Выберите пол:</p>
            <input type="radio" name="gender" class="select-gender" value="Мужчина"><label for="man" id="label">Мужчина</label>
            <input type="radio" name="gender" class="select-gender" value="Женщина"><label for="woman" id="label">Женщина</label>
            <input type="radio" name="gender" class="select-gender" value="Не указан"><label for="none" id="label">Не указан</label><br>
            <textarea placeholder="О себе" id="about-yourself" name="abyf" maxlength="500" value="<?php
                echo @$data['abyf'];?>">
                </textarea><br>
            <button type="submit" id="submit-btn" name="do_signup">Отправить</button>
        </form>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="js/main-scripts.js"></script>
    <script src="js/menu-scripts.js"></script>
</body>
</html>