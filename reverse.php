<?php
/*
Complete the function that accepts a string parameter, and reverses each word
 in the string. All spaces in the string should be retained.
 "This is an example!" ==> "sihT si na !elpmaxe"
*/

//solution

function reverseWords($str) {
    // Go for it
   $str = explode(" ", $str);

   $reverseString = "";

foreach($str as $word){
  
    if(!empty($reverseString)){
    $reverseString .= " ";}
  
    $reverseWord = "";  
    for($i = strlen($word) - 1; $i >= 0; $i--){
     $reverseWord .= $word[$i];
    }
  
    $reverseString .= $reverseWord; 
  
  }
   
   return $reverseString;
}

//tests

echo reverseWords('double  spaced  words'); // should return 'elbuod  decaps  sdrow'
echo reverseWords('The quick brown fox jumps over the lazy dog.'); // should return 'ehT kciuq nworb xof spmuj revo eht yzal .god'