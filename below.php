<?php

/*You will be given an array and a limit value. You must check that all values in the array are below or equal
 to the limit value. If they are, return true. Else, return false. */

//solution 

function smallEnough($a, $limit)
{
  $below = true; 
  foreach($a as $item){
    if($item > $limit){
      $below = false;
    }
  }
  return $below;
}

//test

var_dump(smallEnough([78, 117, 110, 99, 104, 117, 107, 115], 100)); // should return false