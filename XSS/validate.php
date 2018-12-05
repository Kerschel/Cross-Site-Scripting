<?php 
    if(isset($_POST['user'])){
        $stay = 600;
        if(crypt($_POST['password'],'salted') == crypt('password','salted')){
            session_start();
            setcookie('PHPLOGIN', crypt($_POST['password'],'salted') .":".$_POST['user'],time() + $stay);
            session_get_cookie_params();
            header("location:chat.php");
        }
        else{
        header("location:index.php");

        }
    }else if(isset($_COOKIE['PHPLOGIN'])){
        session_get_cookie_params();
        header("location:chat.php");
    }
    else
    {
        header("location:index.php");
    }
?>
