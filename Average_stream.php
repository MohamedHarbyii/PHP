<?php
/* n = 5
arr[] = {10, 20, 30, 40, 50}
Output: 10.00 15.00 20.00 25.00 30.00 
Explanation: 
10 / 1 = 10.00
(10 + 20) / 2 = 15.00
(10 + 20 + 30) / 3 = 20.00
And so on.
 */
function A_O_stream($arr){
    $AVG=[];
    $C=1;
    $sum=0;
for($i=0;$i<count($arr);$i++){
$sum+=$arr[$i];
    $AVG[]=$sum /$C ;
    $C++;
}
return $AVG;
}
?>