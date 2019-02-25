<?php
//arrays
$names = ["Mary","Musa","Mike","Moha","Mendi","Jack"];

$ages = [19,34,45,12,45,77,34,23,61,43,76,89,23,41,92,67];

echo $names[4];
echo "<hr>";
echo $ages[0];

foreach ($names as $jina)
{
  echo "$jina <br>";
}

echo "<hr>";
echo sizeof($names);// count the # of names
echo "<hr>";
array_push($names , "Bush");
echo sizeof($names);
echo "<hr>";
var_dump($names);
echo "<hr>";
array_pop($names);
var_dump($names);
echo "<hr>";
rsort($ages);

foreach ($ages as $miaka)
{
    echo "$miaka<br>";
}
echo "<hr>";

echo array_sum($ages);

echo "<hr>";
//associative array
$person =["names"=>"Moha Musa", "age"=>61, "color"=>"black"];

//["first"=>78, "second"=>76, "submit"=>""]

echo $person["names"];
echo "<hr>";
echo $person["age"];
echo "<hr>";
echo $person["color"];



















