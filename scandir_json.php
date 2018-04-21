<?php
$dir1 = scandir("/home/edisonpetter/www/wiking/", 1);

$jason = json_encode($dir1);


$criaJason = fopen("jason.json", "w");
$texto = $jason;
fwrite($criaJason, $texto);


?>
