<?php 
/*
Return the number (count) of vowels in the given string.

We will consider a, e, i, o, u as vowels for this Kata (but not y).

The input string will only consist of lower case letters and/or spaces.*/

//solution
function getCount($str) {
    $vowelsCount = 0;

    // enter your magic here
    $vowels = ["a", "e", "i", "o", "u"];
    for($i = 0; $i < strlen($str);$i++){
      if(in_array($str[$i], $vowels)){
        $vowelsCount++;
      }
  }
  return $vowelsCount;
}



//tests

echo getCount("abracadabra"); // should return 5
echo getCount("pear tree"); // should return 4