<?php

/*Given a two-dimensional array of integers, return the flattened version of the array with all the integers
 in the sorted (ascending) order.
 Example:

Given [[3, 2, 1], [4, 6, 5], [], [9, 7, 8]], your function should return [1, 2, 3, 4, 5, 6, 7, 8, 9]. */

//solution

function flatten_and_sort($array) {
    // Write your function here
    $flat = [];
    for($i=0; $i < count($array); $i++){
      for($j=0; $j < count($array[$i]); $j++){
        array_push($flat, $array[$i][$j]);
      }
    }
    sort($flat);
    return $flat;
  }


  //test
  print_r(flatten_and_sort([[3, 2, 1], [7, 9, 8], [6, 4, 5]])); // should return [1,2,3,4,5,6,7,8,9]