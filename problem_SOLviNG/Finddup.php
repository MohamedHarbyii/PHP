<?php
//[1, 2, 4, 4, 3, 3, 1, 5, 3, "5"]  ==>  [4, 3, 1]
// [0, 1, 2, 3, 4, 5]                ==>  []
function duplicates($arr){
$dupl=array();
$seen=array();
    for($i=0;$i<count($arr);$i++){
    if(is_int($arr[$i])){
      if(in_array($arr[$i],$seen) && !in_array($arr[$i],$dupl)){
        array_push($dupl,$arr[$i]);
      }
    
       else{ array_push($seen,$arr[$i]);}
    }
}    
return $dupl;
}
echo "<pre>";
print_R(duplicates([1, 2, 4, 4, 3, 3, 1, 5, 3, "5"] ));
echo "</pre>";
?>