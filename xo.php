<?php

/*
Check to see if a string has the same amount of 'x's and 'o's. 
The method must return a boolean and be case insensitive. The string can contain any char.
XO("ooxx") => true
XO("xooxx") => false
XO("ooxXm") => true
XO("zpzpzpp") => true // when no 'x' and 'o' is present should return true
XO("zzoo") => false
*/

//solution

function XO($s) {
    $s = strtoupper($s);
    $o = 0;
    $x = 0;
    $bool = false;
    $length = strlen($s);
    for($i=0; $i<$length;$i++){
      if($s[$i]=='O'){
        $o++;
      }
      if($s[$i]=='X'){
        $x++;
      } 
    }
    if(($o == $x) || ($o == 0 && $x == 0)) {
        $bool = true;
      }

    return $bool;
  }

  //tests

 echo XO('xo'); // true
 echo XO('XO'); //true
 echo XO('xxxoo'); //false
