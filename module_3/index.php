<?php
// if statement, if...else statement, ...elseif...else statement, switch statement

// if statement
$num = -1;

if($num<0){
    echo "$num is less than 0";
}

//if...else
$age=20;
if($age>18){
    echo "you are an adult";
}else{
    echo "you are an 18";
}

if(($age>12) && ($age<20)){
    echo "Discount for you !!!";
} 

//if...elseif...else
if($num<0){
    echo "The value of $num is a negative number.";
}elseif($sum==0){
    echo "The value of $num is 0.";
}else{
    echo "The value of $num is a positive number.";
}

$score = 90
if($score>89){
    echo"Your grade is A";
}elseif($score>79){
    echo"Your grade is B";
}elseif($score>69){
    echo"Your grade is C";
}elseif($score>59){
echo"Your grade is D";
}elseif($scor<50){
echo"Your grade is F";
}


?>