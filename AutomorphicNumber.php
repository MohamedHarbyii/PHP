<?php
function Automorphic_Number($num){
    $num_2=$num**2;
    return $num==substr($num_2,strlen($num_2)-2)?"Automorphic":"NotAutomorphic";
}
echo Automorphic_Number(16),"<br>";