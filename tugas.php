<?php

$jsonString = '{
    "name": "Khanesa Agil Fadilah",
    "age": 20,
    "pekerjaan": "Mahasiswa",
    "hobi": ["PHP", "JavaScript", "HTML"]
}';


$object = json_decode($jsonString);


$array = json_decode($jsonString, true);


echo "Akses dari PHP Object:" . PHP_EOL;
echo "Nama: " . $object->name . PHP_EOL;
echo "Umur: " . $object->age . PHP_EOL;
echo "Pekerjaan: " . $object->pekerjaan . PHP_EOL;
echo "Hobi: " . $object->hobi[0] . PHP_EOL;


echo PHP_EOL . "Akses dari PHP Array:" . PHP_EOL;
echo "Nama: " . $array['name'] . PHP_EOL;
echo "Umur: " . $array['age'] . PHP_EOL;
echo "Pekerjaan: " . $array['pekerjaan'] . PHP_EOL;
echo "Hobi: " . $array['hobi'][0] . PHP_EOL;
?>
