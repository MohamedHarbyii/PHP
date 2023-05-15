<?php
  
  
  
  for($i=0;$i<count(filter_list());$i++)
   {
	$array;
	$array[$i]=filter_id(filter_list()[$i]);
   }
   echo "<pre>";
   print_r($array);
   print_r(array_combine($array,filter_list()));
   echo "</pre>";

















?>