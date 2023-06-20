<?php
function hello($name = ''): string {
	$name=ucfirst(strtolower($name));
	return $name!=null?"Hello, $name!":"Hello, World!";
  }
?>