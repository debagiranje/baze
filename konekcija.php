<?php
$user="root";
$passw="";
$host="localhost";
$name= "muzickaprodavnica";

$conn=new mysqli($host, $user, $passw, $name);
if($conn->connect_error){
    echo "nismo se povezali";
}
?>