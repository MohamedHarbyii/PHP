<?php
/* 
A[] = {1,2,5,4,0}
B[] = {2,4,5,0,1}
*/
function ARe_equel($arr1,$arr2){
    $len1=count($arr1);
    $len2=count($arr2);
    $sum1=0;
    $sumTwo=0;
    if($len1==$len2){
        for($i=0;$i<$len1;$i++){
         $sum1+=$arr1[$i];
         $sumTwo+=$arr1[$i]+$arr2[$i];
        }
    }
else{return 0;}
return $sum1==($sumTwo/2)?1:0;
}



