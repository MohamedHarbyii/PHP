<?php
function fake_bin(string $s): string {
    
   return implode(array_map(function($n){return $n>=5?$n=1:$n=0;},str_split($s)));

    
  }

echo fake_bin('45385593107843568');
?>