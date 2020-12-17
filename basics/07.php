<?php
// str_replace();

$zahl = "30,45";

if(gettype($zahl)==="string"){
$zahl = str_replace(",", ".", $zahl);
$zahl = floatval($zahl);
}

#var_dump($zahl);

// strpos();
$name = "Hallo Info2";
#echo strpos($name, "2");
#echo stripos($name, 'info');

$wert = "     Leerzeichen Test";
#echo "<pre>" . trim($wert) . "</pre>";

// strtoupper -> Alles großschreiben
echo strtoupper($name);
echo "<br>";
// strtolower -> Alles kleinschreiben
echo strtolower($name);


?>
