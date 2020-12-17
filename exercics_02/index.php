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
      main{
        margin-top: 5vh;
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr;
      }
      footer{
        margin-top: 5vh;
        padding-left: 20px;
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
      <div class="">
        <label for="name">Vorname</label>
        <input type="text" id="name" name="" value="">
      </div>
      <div class="">
        <label for="name">Nachname</label>
        <input type="text" id="name" name="" value="">
      </div>
      <div class="">
        <label for="name">Email</label>
        <input type="text" id="name" name="" value="">
      </div>
      <div class="">
        <button type="button" name="button">Absenden</button>
      </div>
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
