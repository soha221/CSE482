<?php 

$Array = array(1, 1, 2, 3, 1, 4, 2, 6); 

print_r($Array); 


$List = implode(', ', $Array); 
 

sort($List);

print_r($List);

?>