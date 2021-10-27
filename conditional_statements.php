<?php
$age=30;

if ($age <18){
    echo "Sorry, we can't allow you to access this content";
}else{
    echo "Have fun!!!";
}
echo "<br>";

$marks=60.9;
if ($marks<60){
    echo "FAIL";
}else{
    echo "PASS";
}
echo "<br>";

$registeredUsername="joy";
$registeredpassword="joy123";
$Username="joy";
$password="joy1234";
if ($username==$registeredUsername and $password==$registeredpassword){
    echo "login successful";
}else{
    echo "Incorrect Password";
}
echo "<br>";

$score=50;
if ($score<40){
    echo "E";
}else if ($score<50){
    echo "D";
}else if ($score<60){
    echo "B";
}else{
    echo "A";
}
echo "<br>";

$shoesize=29;
if ($shoesize<39){
    echo "kid shoe";
}else{
    echo"adult";
}
echo "<br>";

$temp=40;
if ($temp<38){
    echo"low";
}elseif ($temp=38){
    echo "normal";
}else{
    echo "high";
}
