<?php
function num_at_indx($arr){
  
        $arr2 = [];
        $n = count($arr);
        for ($i = 0; $i < $n; $i++) {
            if ($arr[$i] == $i ) { // Account for 1-based indexing
                $arr2[] = $i ;
            }
        }
        return $arr2;
   
}

?>