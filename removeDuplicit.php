<?php

/*
Your task is to remove all duplicate words from a string, leaving only 
single (first) words entries.

Example:

Input:

'alpha beta beta gamma gamma gamma delta alpha beta beta gamma gamma gamma delta'

Output:

'alpha beta gamma delta'
*/

//solution

function removeDuplicateWords($s) {
    $arr = explode(" ", $s);
    $arr = array_unique($arr);
    $uniqueString = implode(" ", $arr);
    return $uniqueString;
  }

  //tests

  echo(removeDuplicateWords('alpha beta beta gamma gamma gamma delta alpha beta beta gamma gamma gamma delta'));