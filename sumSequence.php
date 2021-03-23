<?php

/*
Your task is to make function, which returns the sum of a sequence of integers.

The sequence is defined by 3 non-negative values: begin, end, step.

If begin value is greater than the end, function should returns 0

sequence_sum(2, 2, 2); // => 2
sequence_sum(2, 6, 2); // => 12 (= 2 + 4 + 6)
sequence_sum(1, 5, 1); // => 15 (= 1 + 2 + 3 + 4 + 5)
sequence_sum(1, 5, 3); // => 5 (= 1 + 4)

*/

//Solution

function sequence_sum(int $begin, int $end, int $step): int {
    // May the Force be with you
    
    if($begin > $end){
      $sum = 0;
    }
    else{
      $sum  = $begin;
      $increase = $begin;
      while(($increase + $step) <= $end)
      {
       $increase += $step; 
       $sum += $increase;
      }
    }
    return $sum;
  }

  echo(sequence_sum(2,6,2));
  echo(sequence_sum(1,5,3));