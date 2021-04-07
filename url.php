<?php

/*Complete the function/method so that it returns the url with anything after the anchor (#) removed.
// returns 'www.codewars.com'
removeUrlAnchor('www.codewars.com#about')*/


//solution
function replaceAll($string) {
  $url ='';
  for($i = 0;$i < strlen($string); $i++){
    if($string[$i] == '#'){
      break;
    }
    else{
      $url .= $string[$i];
    }
  }
  return $url;
}

  //tests

  echo (replaceAll("http://www.uol.com.br#teste")); // should return http://www.uol.com.br