<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- fevicon -->
  <link rel="shortcut icon" href="img/logo_icon_sourav.png" type="image/x-icon">
  <!-- link css  -->
   <link rel="stylesheet" href="css/all.min.css">
   <link rel="stylesheet" href="css/bootstrap.css">
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/media.css">
  <title>PHP TEST</title>
</head>
<body>
 <div class="container">
  <h2 class="text-center">PHP TEST</h2>
  <hr>
  <?php

  echo "Hello World!";
  echo "Hello World!";
  echo "Hello World!";
  echo "Hello World!";
  echo "<hr>";

  echo "<h2>"."Hello World!"."</h2>";
  echo "<hr>";

  echo "<h2>"."Hello world!"." "."<b>"."Hello World!"."</b>"." "."Hello World!"."</h2>";
  echo "<hr>";

  $title = "Variable";
  echo "<h2>"."<b>"."$title"."</b>"."</h2>";
  
  $name = "Sourav";
  $Name = "Sajid";
  echo "<h2>"."My name is"." "."<b>"."$name"."</b>"."</h2>";
  echo "<h2>"."My Name is"." "."<b>"."$Name"."</b>"."</h2>";

  $a = 20;
  $b = 30;
  $c = $a + $b;
  echo "<h3>"."20 + 30 ="." "."<b>"."$c"."</b>"."</h3>";

  $d = 50;
  $e = 40;
  $f = $d - $e;
  echo "<h3>"."50 - 40 ="." "."<b>"."$f"."</b>"."</h3>";

  $g = 90;
  $h = 80;
  $i = $g * $h;
  echo "<h3>"."90 * 80 ="." "."<b>"."$i"."</b>"."</h3>";

  $j = 60;
  $k = 40;
  $l = $j / $k;
  echo "<h3>"."60 / 40 ="." "."<b>"."$l"."</b>"."</h3>";

  $m = 70;
  $n= 40;
  $o = $m % $n;
  echo "<h3>"."70 % 40 ="." "."<b>"."$o"."</b>"."</h3>";
  echo "<hr>";

  echo "<h2>"."<b>"."Glogal & Local"."</b>"."</h2>";
  $glo = "Global";

  function callToAction(){
    global $loc;
    $loc = "Local";
  }

  callToAction();
  echo "<h3>"."<b>"."$loc"."</b>"."</h3>";
  echo "<h3>"."<b>"."$glo"."</b>"."</h3>";
  echo "<hr>";

  ?>
 </div>

  <script src="js/jquery-3.7.1.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/custom.js"></script>
</body>
</html>