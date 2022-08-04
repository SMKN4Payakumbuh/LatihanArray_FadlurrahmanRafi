<?php
$duit = [
    100000,
    50000, 
    20000, 
    10000, 
    5000, 
    2000, 
    1000, 
    500, 
    200, 
    100, 
    50, 
    25, 
    10, 
    5, 
    1
];
$nom =(int)readline("Masukkan Nilai Rupiah :");
echo $nom . "\n";
for ($i = 0; $i < count($duit); $i++) {
 if ($nom % $duit[$i] < $nom) {
 echo $duit[$i]. " : " . floor($nom / $duit[$i]) . "\n";
 $nom = $nom % $duit[$i];
 }
}
?>