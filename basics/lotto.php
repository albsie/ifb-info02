<?php
// Lottorechner

/*
gwünschte Ausgabe:
Button-Berechnen
Zahl 1 ist 20
Zahl 2 ist 3
Zahl 3 ist 35
Zahl 4 ist 45
Zahl 5 ist 23
Zahl 6 ist 12

Die Lottozahlen sollen von 1 bis 49 ausgewählt werden.
Es dürfen keine Doppelte Zahlen vorkommen.
*/
//var_dump($_POST);
$numbers = range(1,49);
shuffle($numbers);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>die Lottozahlen heute</title>
    <style media="screen">
      .container{
        width: 60%;
        margin: 0 auto;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <h1>Die Lottozahlen von heute</h1>
      <form method="post">
        <button name="register" type="submit">Lottozahlen</button>
      </form>
      <?php if(isset($_POST['register'])):?>
      <div class="lotto">
        <ul>
          <?php foreach ($numbers as $key => $value):?>
          <li>Zahl <?=$key+1?> ist <?=$value ?></li>
        <?php
            if($key >= 5){
                break;
                }
      endforeach; ?>
        </ul>
      </div>
    <?php endif; ?>
    </div>
  </body>
</html>
