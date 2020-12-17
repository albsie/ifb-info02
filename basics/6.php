<?php

// Arrays

$betriebssytem[] = "Windows";
$betriebssytem[] = "Linux";
$betriebssytem[] = "Mac";
$betriebssytem[] = "Linux";
$betriebssytem[] = "Solaris";
$betriebssytem[] = "Linux";

// sort() sortiert ein Array nach dem Wert aufsteigend
//sort($betriebssytem);

// rsort() sortiert ein Array nach dem Wert absteigend
//rsort($betriebssytem);

// asort sortiert ein Array nach dem Wert aufsteigend,
//Indexverbindungen werden beibehalten
//asort($betriebssytem);

// arsort() gegenteil von asort
//arsort($betriebssytem);

// ksort sortiert das Array nach dem Index aufsteigend
ksort($betriebssytem);

// krsort sortiert das Array nach dem Index absteigend

krsort($betriebssytem);

echo "<pre>";
print_r($betriebssytem);
echo "</pre";

/*
foreach ($betriebssytem as $key => $value) {
  echo "<pre>";
  echo $key . " => " . $value;
  echo "</pre>";
}
*/


/* Aufgabe: Sortiere die Autokennzeichenkürzel und die Städte für:
- B - Berlin
- M - München
- MZ - Mainz
- RO - Rosenheim
- S - Stuttgart
- TÜ - Tübingen
- GAP - Garmisch
*/
echo "<br>";
$places['B'] = "Berlin";
$places['M'] = 'München';
$places['MZ'] = 'Mainz';
$places['RO'] = 'Rosenheim';
$places['S'] = 'Stuttgart';

//asort($places);
//ksort($places);
// array_key_exists() gibt true zurück, wenn der gesuchte Key enthalten ist
// count() zählt die Array länge
// in_array($suchwert, $array)
// shuffle($array) mischt die Elemente des Arrays zufällig
// array_unique($array) entfernt doppelte Einträge
// array_count_values($array) zählt die Wert eines Arrays die identisch sind
// min($array) und max($array) gibt die kleinste und größte Zahl zurück
// array_merge verbindet Arrays
// range(1,49) definiert die Zahlen in einem Array von 1 bis 49
$betriebssytem = array_unique($betriebssytem);
$arr = [2,4,4,14,2,2,2,2,2,2];
$arr2 = [4,6,8,1];
$newArr = array_merge($arr, $arr2);


echo "<br>";
var_dump(range(10, 15));
echo "<br>";
/*
echo "<pre>";
print_r($betriebssytem);
echo "</pre";
