<?php
function Armstrong_number($num){
    $num=(string)$num;
    $sum=0;
    for($i=0;$i<strlen($num);$i++){
    $sum+=($num[$i]**3);
    }
return $sum==$num?"Yes":"No";
}

?>