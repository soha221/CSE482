<?php 

function Reverse($array) 
{ 
    return(array_reverse($array)); 
} 
  
$array = array("soha", "koli", "nusrat", "monira"); 
  
echo "Before:\n"; 
print_r($array); 
  
echo "\nAfter:\n"; 
print_r(Reverse($array)); 
  
?>