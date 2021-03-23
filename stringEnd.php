<?php

/*
Complete the solution so that it returns true if the first argument(string)
 passed in ends with the 2nd argument (also a string).

Examples:

solution('abc', 'bc') // returns true
solution('abc', 'd') // returns false
*/

//solution

function solution($str, $ending) {
    // TODO: complete
    $endOfStr = [];
    for($i = 0; $i < strlen($str); $i++){
        $endOfStr[$i] = $str[$i];
    }
    $endOfStr = implode('',array_slice($endOfStr, strlen($str) - strlen($ending)));
    if($endOfStr == $ending){
      return true;
    }
    else{
      return false;
    } 
  }

  //test
  echo solution('abc', 'bc');