<?php
function mouth_size($animal) {
    return stristr("alligator",$animal)? "small":"wide";
}
echo mouth_size("ALLIGATOR");

?>