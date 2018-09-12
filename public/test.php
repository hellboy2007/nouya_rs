<?php
function a(&$b) 
{ 
	$b++; 
} 
$c = 0;
call_user_func('a', $c); 