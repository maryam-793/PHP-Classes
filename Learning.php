<?php

 $x = 10;
 
 if($x > 20){
 
  echo $x . "this is equal" ;
}
 if($x <= 0){
 
 echo $x . "this is greater or equal";
 
} 
class car{

// properties 

public $make;
public $model;
public $year;

// methods

function set_year($year){
 $this->year = $year;
}

function get_year(){
return $this->year;
 }
}

// objects & instances
$honda = new car();
$ford = new car();

// use properties of class

$honda->make = "honda";
$honda->model = "accord";
$ford->make = "ford";
$ford->model = "explored";

// use class methods

$honda->set_year(2019);
$ford->set_year(2020);

echo $honda->get_year() . ' ' . $honda->make . ' ' . $honda->model . '<br/>'; 

echo $ford->get_year() . ' ' . $ford->make . ' ' . $ford->model; 

// function

function oddorEven($x){
 
 if($x % 2==1){
  return "Even";
  }
else {
    return "odd";
 }
}
?>