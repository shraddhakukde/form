<?php

$link = mysqli_connect("localhost", "root", "", "form");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
    echo "connected";
}
 

$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$address = mysqli_real_escape_string($link, $_REQUEST['address']);
$phone = mysqli_real_escape_string($link, $_REQUEST['phone']);
$country = mysqli_real_escape_string($link, $_REQUEST['country']);
$state = mysqli_real_escape_string($link, $_REQUEST['state']);
$city = mysqli_real_escape_string($link, $_REQUEST['city']);
$gender = mysqli_real_escape_string($link, $_REQUEST['gender']);
$hobbies = mysqli_real_escape_string($link, $_REQUEST['hobbies']);


 

 $sql = "INSERT INTO task (name,email,address,phone,country,state,city,gender,hobbies)
    VALUES ('$name', '$email','$address','$phone','$country','$state','$city','$gender','$hobbies')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 

mysqli_close($link);
?>