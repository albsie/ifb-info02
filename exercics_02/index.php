<?php
$con = new PDO('mysql:host=localhost;dbname=info02', 'root', '') or die("keine Datenbankverbindung");
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$errors = 0;
$done = null;
if(isset($_POST['register'])){
  $firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_STRING);
  $lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_STRING);
  $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);

  if(!$firstname || !$lastname || !$email){
    $errors++;
  }

  if(!$errors){
    $insert = "INSERT INTO users (firstname, lastname, email) VALUES (
      :firstname,
      :lastname,
      :email
    )";
    try {
      $state = $con->prepare($insert);
      $state->execute([
        'firstname' => $firstname,
        'lastname' => $lastname,
        'email' => $email
      ]);
      $done = "Erfolgreich gespeichert!";
    } catch(PDOException $e){
      die($e);
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Notenportal</title>
    <style media="screen">
    *{
      margin: 0;
      padding: 0;
      list-style-type: none;
      box-sizing: border-box;
    }
    ul{
      padding: 20px;
      background-color: lightblue;
    }
      ul li{
        display: inline;
        margin-right: 20px;
      }
      main form{
        margin-top: 5vh;
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr;
      }
      footer{
        margin-top: 5vh;
        padding-left: 20px;
      }
      .done{
        background-color: lightgreen;
        padding: 5vh 0;
        text-align: center;
      }
    </style>
  </head>
  <body>
    <header>
      <ul>
        <li><a href="index.php">Schüler</a></li>
          <li><a href="noten.php">Noten</a></li>
      </ul>
    </header>
    <main>
      <?=$done ? "<div class='done'>$done</div>":''?>
    <form method="post">
      <div class="">
        <label for="name">Vorname</label>
        <input type="text" id="name" name="firstname" value="">
      </div>
      <div class="">
        <label for="name">Nachname</label>
        <input type="text" id="name" name="lastname" value="">
      </div>
      <div class="">
        <label for="name">Email</label>
        <input type="email" id="name" name="email" value="">
      </div>
      <div class="">
        <button type="submit" name="register">Absenden</button>
      </div>
    </form>
    </main>
    <footer>
      <b>Übung Notenportal:</b> <br>
      - Html und Css Layout erstellen <br>
      - Datenbank anlegen <br>
      - Datenbankverbindung herstellen <br>
      - Daten zum Server senden -> var_dump() <br>
      - Daten mit Filter validieren <br>
      - Fehlermeldungen erstellen <br>
      - Wenn kein Fehler, dann zu Datenbank senden <br>
      - evtl. Meldung für einen erfolgreichen Datenbankeintrag erstellen <br>
      - Schüler im noten.php ausgeben und die Möglichkeit erstellen eine Note zu vergeben. <br>
      - Note soll immer veränderbar sein <br>
      <b>Wenn Zeit bleibt:</b> <br>
      - Schüler löschen <br>
      - Note löschen <br>
      - Schüler Daten verändern
    </footer>
  </body>
</html>
