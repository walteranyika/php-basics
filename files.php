<?php
//files.php
$data="\nMary Jane";
file_put_contents("names.txt", $data, FILE_APPEND);

$data2 = file_get_contents("names.txt");

echo $data2;

//sudo chmod   777   -R   .

