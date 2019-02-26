<?php
//GET
//github.com
//bitbucket.com

//git download

if(isset($_GET["id"]))
{
    $conn = mysqli_connect("localhost","root","","shule");
    extract($_GET);
    $sql ="delete from employees where id=$id";
    mysqli_query($conn, $sql);
}
header("location:fetch.php");

//git init
//git add .
//git  commit  -m  "Php Basics files"
//clear
//git  config  user.name  "Monalisa"
//git  config  user.email  "monalisa@yahoo.com"







