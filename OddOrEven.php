<?php
function odd_or_even(array $a): string {
  return array_sum($a) % 2 == 0? 'even' : 'odd';
}
