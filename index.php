<?php
$isOk = false
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>php part2 exe8</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
    <?php if ($isOk == false){ ?>
      <p id="wrong" >c'est ok !!!</p>
    <?php }else{?>
      <p id="right" >c'est pas bon !!</p>
      <?php }
/*echo ($isOk) ? 'c\'est ok !!' : 'c\'est pas bon !!!';*/
    ?>
</body>
</html>
