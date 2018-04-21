<?php

$data = $_POST['nomeAjax'];

$inp = file_get_contents('nomes.json');
$tempArray = json_decode($inp, true);
array_push($tempArray, $data);
$jsonData = json_encode($tempArray);
file_put_contents('nomes.json', $jsonData);



?>