<?php if($_POST){header("Location:inicio.php");}?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--css-->
    <link rel="stylesheet" href="../asset/css/style.css">
    

    <!--BOX ICON-->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

    <title>Login</title>
    
</head>
<body>
    <div class="login">
        <div class="login__content">
            <div class="login__img">
                <img src="../asset/img/login.svg" alt="">
            </div>
            <div class="login__forms">
                <form method="post" class="login__registre " id="login-in">
                    <h1 class="login__title">Login In</h1>

                    <div class="login__box">
                    <i class='bx bx-user login__icon'></i>
                    <input name="nombre" type="text" placeholder="Username" class="login__input">
                    </div>
                    <div class="login__box">
                    <i class='bx bx-lock login__icon'></i>
                    <input name="nombre" type="password" placeholder="Password" class="login__input">
                    </div>
                    <a href="#" class="login__forgot">forgot password?</a>
                    <input type="submit" class="login__button" value="Sing In">
                    
                    <div>
                        <span class="login__account">Don't have an Account?</span>
                        <span class="login__signin" id="sign-up">Sing Up</span>
                    </div>
                </form>

                <form  class="login__create none" id="login-up">
                    <h1 class="login__title">Create Account</h1>

                    <div class="login__box">
                    <i class='bx bx-user login__icon'></i>
                    <input type="text" placeholder="Username" class="login__input">
                    </div>
                    <div class="login__box">
                    <i class='bx bx-at login__icon'></i>
                    <input type="text" placeholder="Email" class="login__input">
                    </div>
                    <div class="login__box">
                    <i class='bx bx-lock login__icon'></i>
                    <input type="password" placeholder="Password" class="login__input">
                    </div>
                    <input type="submit" class="login__button" value="Sing Up">
                    <div>
                        <span class="login__account">Already have a Account?</span>
                        <span class="login__signup" id="sign-in">Sing In</span>
                    </div>
                    <div class="login__social">
                        <a href="" class="login__social-icon"><i class='bx bxl-facebook'></i></a>
                        <a href="" class="login__social-icon"><i class='bx bxl-twitter'></i></a>
                        <a href="" class="login__social-icon"><i class='bx bxl-google'></i></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="../asset/js/login.js"></script>
<script src="../asset/js/main.js"></script>

</html>