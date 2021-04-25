<?php

// We want to generate a function that computes the series starting
//from 0 and ending until the given number.

//solution

function showSequence($count) {
    //for
   if($count == 0){
    return "0=0"; 
   }
   else if($count < 0){
     return "$count<0";
   }
   else{
    $sum = 0;
    for($i = 0; $i <= $count; $i++){
      $sum += $i;
      }
    //  while
    $j = 1;
    $string = "0";
    while($j < $count){
     $string .= "+$j"; 
      $j++;
    }
     $string .= "+$count = $sum";
     return $string;
  } 
 }

 //test

 echo showSequence(6); //should be "0+1+2+3+4+5+6 = 21"