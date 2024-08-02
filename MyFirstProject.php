<?php

$x = 2;
$y = 3;

$abc = $x + $y;

echo $abc;

$arrayA = array("adil", "maryam", "sjawal");
$arrayB = ["maths","computer", "Science"];
$arrayC = ["class"=> "7th", "Student"=> "Adnan", ];
echo $arrayA["1"];
echo $arrayB["1"];
echo $arrayC["class"];

//Multidimension Array
$employeeRecord = [
    "maryam" => ["fname"=> "Maryam", "lname"=> "farooq", "designation"=> "SQA", 
    "Experties"=> ['manual', 'automation']],
    "mehrun"=> ["fname"=> "Mehrun", "lname"=> "Khalid", "designation"=> "SQA", 
    "Experties"=> ["manual", "automation"]],

];
echo $employeeRecord["mehrun"]["Experties"][1];
//Php statements Using if else

 $day = date("l");

 // debugging purpose, it will show you what your variables are getting to store.
 // echo "Today is: "` . $day . "<br>"; 

if($day == "Monday") {

    echo "Today is Monday";
}elseif($day == "Sunday"){

    echo "Have a greate weekend";
}else {

    echo "Have a good day";
}

//php functions
    function sum($x,$y=0){
        return $x+$y;
    }
    echo sum(3);

// function with default paramete
function age($str, $num=12)
{
    echo "$str is $num years old \n";
}

age("Maryam", 15);
age("Mehrun");

function number($num1, $num2, $num3){
    $product= $num1 * $num2 * $num3; 
    return $product;
}
$retValue = number(2,4,6);
echo "The product is $retValue";
?>