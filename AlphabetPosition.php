<?php

function alphabet_position(string $s): string {
  $s = strtoupper($s);
  $newStr = "";
  
  $aOrd = ord('A');
  $zOrd = ord('Z');
  
  for($i = 0; $i < strlen($s); $i++){
    $ord = ord($s[$i]);
    if($ord >= $aOrd && $ord <= $zOrd){
      $newStr .= $ord - 64 . " ";
    }
    
  }
  
  return trim($newStr);
}
