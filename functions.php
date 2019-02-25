<?php
//functions
$number  = 100;
$root = sqrt($number);
echo $root;
echo "<br>";
echo sqrt(1000);
echo "<br>";
echo  pow(2.3, 5.1);// arguments
echo "<br>";
echo  max(34, 674, 76, 664, 827,453, 905,1002,435,534);
echo "<br>";
echo  min(34, 674, 76, 664, 827,453, 905,1002,435,534);

$x = 63.14849;
echo "<hr>";
echo round($x);
echo "<hr>";
echo round($x, 3);
echo "<hr>";
echo floor($x);
echo "<hr>";
echo ceil($x);

$sentence="The quick brown fox jumped over a lazy dog";
echo "<hr>";
echo  strtoupper($sentence);
echo "<hr>";
echo strtolower($sentence);
echo "<hr>";
echo  ucwords($sentence);
echo "<hr>";
echo str_word_count($sentence);
echo "<hr>";
echo  strlen($sentence); // number of letters
echo "<hr>";

$password = "p@55w0rd";

echo "<hr>";
echo  md5($password);
echo "<hr>";
echo sha1($password);
//
echo "<hr>";
echo crypt($password, "sdfghjkl;lkjhyt@#$%^&*()_)(*&^rertyuiopghjkhg");

//date
//files
//db
//email
//fetch data










