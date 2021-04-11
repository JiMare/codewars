<?php

/*A number is called Automorphic number if and only if its square ends in the same digits as the number itself.
Given a number determine if it Automorphic or not .*/

//solution

function automorphic($n) {
    $square = pow($n, 2);
    $countNumbers = strlen((string)$n);
    $operation = $square - $n;
    $divisor = 1;
    for($i = 1; $i <= $countNumbers; $i++){
      $divisor *= 10; 
    }
    if($operation === 0){
      return "Automorphic";
    }
    elseif($operation%$divisor === 0){
      return "Automorphic";
    }
    else{
      return "Not!!";
    }
  }

//test
  echo automorphic(625); // Automorphic

  echo automorphic(3); // Not!!

  echo automorphic(225); // Not!!