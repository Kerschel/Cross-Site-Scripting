<?php
session_start();
 $myfile = file_put_contents('comments/comments.txt', $_SESSION['username'].': '.$_POST['comment'].PHP_EOL , FILE_APPEND | LOCK_EX);
 header('location:chat.php')
?>