<?php 
// echo readfile("test.txt");
session_start();
session_get_cookie_params();
if(!isset($_COOKIE['PHPLOGIN'])){
    header('location:index.php');
}
    $_SESSION['username'] = explode(":",$_COOKIE['PHPLOGIN'])[1];
?>




<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Cookie Monster</title>

    <link rel="stylesheet" type="text/css" href="css/comments.css">
    <script src="js/prefixfree.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>

<body>

    <div class="body">
    <div class='row heading'>
    <div class='col-md-5'></div>
    <div class='col-md-6 '><h2>Welcome <?php echo $_SESSION['username'] ?></h2></div>
    </div>
    <div class='wrap'>

        <div class='container'>
            <?php
            $handle = fopen("comments/comments.txt", "r");
            $count=1;
            while (($line = fgets($handle)) !== false) {
                echo "<h5>";
                if($count%2 == 0){
                    $position = 'left';
                echo "<div class='row  ".$position."'><div class='col-md-2'></div>" .$line."</div></br>";

                }
                else{
                    $position = 'right';
                echo "<div class='row ".$position."'><div class='col-md-8'></div><div class='col-md-4'>" .$line."</div></div>";

                }
                echo "</h3>";

                $count++;
            }
    
        fclose($handle);
            ?>
        <div class="form-group shadow-textarea">
        <form method='post' action='savecomment.php'class=" ">
            <textarea name = "comment" class="footer form-control z-depth-1" id="exampleFormControlTextarea6" rows="2" placeholder="Write Your Comment"></textarea>
            <button type="submit" class="footer2 btn btn-link"> <img src="send.png" width="50" /></button>
        <form>
        </div>
    </div>
</div>
<script>


</script>
</body>

</html>
