<?php
    require "registration/db.php";
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final Project</title>
    <link rel="stylesheet" href="style/dark-theme.css" id="a">
    <link rel="stylesheet" href="style/main-theme.css">
    <link href="https://allfont.ru/allfont.css?fonts=open-sans" rel="stylesheet" type="text/css" /> 
    <link rel="stylesheet" href="font-awesome/css/all.min.css">
    <link href="https://allfont.ru/allfont.css?fonts=micra" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
        require_once "registration/db.php";

        $data = $_POST; 
    
        if(isset($data['do_login']))
        {
            $errors = array();
            $user = R::findOne('users', 'email = ?', array($data['email']));
            if ($user)
            {
                if (password_verify($data['password'], $user->pass))
                {
                    $_SESSION['logged_user'] = $user;
                } else 
                {
                    $errors[] = 'Неверный пароль';   
                }
            } else {
                $errors[] = 'Пользователь с таким логином не найден';
            }
            if (empty($errors))
            {
                
            } else {
                echo '<div id="error" style="position: absolute;">'.array_shift($errors).'</div>';
            }
        }
        
    ?>
    </div>
    <nav>
        <div class="up-menu">
                <div class="left-btn">
                    <button id="main" onclick="window.location.href = 'main-page.php';">Главная</button>
                    <input type="search">
                </div>
                <div class="right-btn">
                    <button class="settings-btn"><i class="fas fa-cog"></i></button>
                <?php if (isset($_SESSION['logged_user'])) : ?> 
                <div class="profile">
                    Вы авторизованы! <?php echo $_SESSION['logged_user']->login;?>
                    <a href="registration/logout.php">Выйти</a>
                </div>
                    <?php else:?>
                     <div class="sign-form">  
                        <form action="/main-page.php" method="post">
                            <input type="email" placeholder="Email" name="email" value="<?php echo @$data['email'];?>">
                            <input type="password" placeholder="Пароль" name="password" value="<?php echo @$data['password'];?>">
                            <p><button class="sign-form-btn" name="do_login">Войти</button>
                        </form>
                    </div>
                    <button class="sign-btn">Войти</button>
                    <button class="sign-btn" onclick="window.location.href = 'registration.php';">Регистрация</button>
                <?php endif; ?> 
                </div>
        </div>
        <div class="down-menu">
            <input type="checkbox" id="string" class="string"><label for="string" id="string-label"><i class="fas fa-chevron-left"></i></label>
            <button>Отзывы</button>
            <button>О нас</button>
            <button>Контакты</button>
        </div>
    </nav>
    <div class="main-container">
        <div id="nav-genres">
            <div class="nav-btn"><a href="#" >Фильмы</a></div>
            <div class="nav-btn"><a href="#" >Сериалы</a></div>
            <div class="nav-btn"><a href="#" >Мультфильмы</a></div>
            <div class="nav-btn"><a href="#" >Аниме</a></div>
            <div class="nav-btn"><a href="#" >Новинки</a></div>
            <div class="nav-btn"><a href="#" >Анонсы</a></div>  
        </div>
        <p><div class="line"></div></p>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    
</body>
</html>
