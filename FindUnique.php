<?php

function find_uniq($a) {
  $freq = [];
  
  foreach($a as $num){
    if(isset($freq["$num"])) $freq["$num"]++;
    
    else $freq["$num"] = 1;
  }
  
  foreach($freq as $k => $v){
    if($v == 1) return $k;
  }
  
  return 0;
  
}
