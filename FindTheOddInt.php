<?php
/**
  * Given an array, find the int that appears an odd number of times.
  *
  * There will always be only one integer that appears an odd number of times.
 **/
function findIt(array $seq) : int
{
  $x = 0;
  
  foreach($seq as $data){
    $x ^= $data;
  }
  
  return $x;
}
