<?php
// POST Request abfangen mit $_POST
// GET Request abfangen mit $_GET

//var_dump($_POST);
/*
$chkbox = null;
$emailMsg = null;
$emailError = null;
$pw = null;
$pwError = null;
$pwRpt = null;
$pwRptError = null;
$RegisterSuccess = null;
$RegisterError = null;
$Register = false;

if (isset($_POST['register'])){

  if (isset($_POST['chkbox'])){

   var_dump($_POST['email']);
   if (strlen($_POST['email'])>5){
     $emailMsg = "Ihre Eingabe ist richtig!";
     $Register = true;
   }else {
     $emailError = "Der eingegebene Wert ist falsch";
     $Register = false;
   };

   var_dump($_POST['password']);
   if (strlen($_POST['password'])>=8){
     $pw = "Ihre Eingabe entspricht den Vorraussetzungen für ein Sicheres Passwort!";
     $Register = true;
   }else {
     $pwError = "Bitte geben Sie ein Passwort mit mindestens 8 Zeichen ein";
     $Register = false;
   };

   var_dump($_POST['passwordRpt']);{
     if ($_POST['passwordRpt'] == $_POST['password'] and strlen($_POST['password']) >= 8){
        $pwRpt = "Ihr Passwort stimmt überein";
        $Register = true;
     }else {
        $pwRptError = "Ihr Passwort stimmt nicht überein";
        $Register = false;
      };
    };
    if (isset($_POST['register']) and strlen($_POST['password']) >= 8 and strlen($_POST['passwordRpt']) == $_POST['passwordRpt'] and strlen($_POST['email'])>5){
      $RegisterSuccess = "Anmeldung erfolgreich";
    }else {
      $RegisterError = "Anmeldung fehlgeschlagen";
      $Register = false;
    }
}else {
  $chkbox = "Bitte bestätigen!";
};
};
*/
// Wenn keine Fehler mehr kommen soll nach dem Button eine Meldung kommen das alles ok ist.

#$_POST
$arr = [];
$done = [];
if(isset($_POST['register'])){
  var_dump($_POST);
  if(strlen($_POST['email'])<5){
    $arr['email'] = "Ihre Email Adresse stimmt nicht";
  }else{
    $done['emailDone'] = "Ihre Eingabe ist korrekt";
  }
if(strlen($_POST['password'])<=6){
  $arr['pw'] = "Ihr Passwort ist zu kurz";
}else{
  $done['pw'] = "Ich Passwort ist sicher!";
}
if($_POST['password']===$_POST['passwordRpt'] && isset($done['pw'])){
  $done['pwRpt'] = "Die Eingaben stimmen überein";
}else{
  $arr['pwRpt'] = "Die Wiederholung stimmt nicht";
}
if(isset($_POST['chkbox'])){
  $done['chkbox'] = "Bestätigt!";
}else{
  $arr['chkbox'] = "Bestätigen Sie die Richtlinien!";
}
  if(count($arr) === 0){
    $done['register'] = "Ihre Daten wurden gespeichert";
  }
}


 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
     <title>Input Felder</title>
     <style media="screen">
       h1{
         text-align: center;
         margin-bottom: 5vh;
       }
       .done{
         color: green;
       }
       .error{
         color: red;
       }
     </style>
   </head>
   <body>
     <div class="container">
       <h1>Übung mit Input Feldern</h1>
       <form method="post">
  <div class="form-group">
    <label for="email">Email Addresse</label>
    <input <?=isset($_POST['email'])?"value='".$_POST['email']."'":''?> type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
    <?=isset($arr['email'])?"<div class='error'>".$arr['email']."</div>":''?>
    <?=isset($done['emailDone'])?"<div class='done'>".$done['emailDone']."</div>":''?>
  </div>
  <div class="form-group">
    <label for="pw">Password</label>
    <input type="password" name="password" class="form-control" id="pw">
    <?=isset($arr['pw'])?"<div class='error'>".$arr['pw']."</div>":''?>
    <?=isset($done['pw'])?"<div class='done'>".$done['pw']."</div>":''?>
  </div>
  <div class="form-group">
    <label for="pwRpt">Password Wiederholen</label>
    <input type="password" name="passwordRpt" class="form-control" id="pwRpt">
    <?=isset($arr['pwRpt'])?"<div class='error'>".$arr['pwRpt']."</div>":''?>
    <?=isset($done['pwRpt'])?"<div class='done'>".$done['pwRpt']."</div>":''?>
  </div>
  <div class="form-group form-check">
    <input type="checkbox" name="chkbox" class="form-check-input" id="chkbox">
    <label class="form-check-label" for="chkbox">Bestätige</label>
    <?=isset($arr['chkbox'])?"<div class='error'>".$arr['chkbox']."</div>":''?>
    <?=isset($done['chkbox'])?"<div class='done'>".$done['chkbox']."</div>":''?>
  </div>
  <button type="submit" name="register" class="btn btn-primary">Absenden</button>
</form>
<?=isset($done['register'])?"<div class='done'>".$done['register']."</div>":''?>

     </div>
   </body>
 </html>
