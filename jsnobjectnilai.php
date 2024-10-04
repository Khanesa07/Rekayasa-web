<?php
$jsonobj = '{"Khanesa":35,"Agil":37,"Fadilah":43}';

$obj = json_decode($jsonobj);

echo $obj->Khanesa;  // Memperbaiki typo
echo $obj->Agil;
echo $obj->Fadilah;
?>
