<?php
	
	
// PHP code to get the factorial of a number
// function to get factorial in iterative way
function factorial($number){
if(gettype($number)=="integer" &&  $number>=0){
if($number>=1){
    $factorial = 1;
    for ($i = 1; $i <= $number; $i++){
      $factorial = $factorial * $i;
    }
    return $factorial;}
else return 0;}else return null ;
}



	
