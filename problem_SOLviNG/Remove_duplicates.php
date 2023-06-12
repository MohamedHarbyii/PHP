<?php
//[3, 4, 4, 3, 6, 3]
//[4, 6, 3]
/*okay first we have 3 and 4 are duplicated wich we can refer them $duplicated_Nums we have here two ways that we take  
the duplicates and unset them but we will face a problem that we may unset them all 
sc one : we can take every number just one time and put it into an array but this will consume the memory becuase we
will set a new array okay 
*/
 function rmdup($duplicats){
 $count=count($duplicats);
 $countval= array_count_values($duplicats);
 $newarray=[];
 foreach($countval as $key => $val){
 $newarray[]=$key;
}
return $newarray;
}

echo "<pre>";
print_r(rmdup([3, 4, 4, 3, 6, 3]));
echo "</pre>";
?>