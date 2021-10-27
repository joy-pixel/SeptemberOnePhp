<?php
function motto(){
    echo "Hi there, thisis our motto";
    echo "<br>";
}
motto();
function addition(){
    $x=10;
    $y=20;
    $z=$x+$y;
    echo"Your answer is $z";
    echo "<br>";
}
addition();

function avg($x,$y,$z){
    $average=($x+$y+$z)/3;
    echo "Your average is $average";
    echo "<br>";
}
avg(90,70,70);

function simple_interest($p,$r,$t){
    $interest=($p*$r*$t)/100;
    echo"Your interest at the end of the loan period will be $interest";
    echo "<br>";
}

simple_interest(20000,5,4);