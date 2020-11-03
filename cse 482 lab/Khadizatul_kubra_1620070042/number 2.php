<?php  

function wordReverse($str) 
{ 
    $i = strlen($str) - 1; 
    $end = $i + 1; 
    $result = ""; 
      
    while($i >= 0) 
    { 
        if($str[$i] == ' ') 
        { 
            $start = $i + 1; 
            while($start != $end) 
                $result = $result . $str[$start++]; 
              
            $result = $result . ' '; 
              
            $end = $i; 
        } 
        $i--; 
    } 
    $start = 0; 
    while($start != $end) 
        $result = $result . $str[$start++]; 
      
    return $result; 
} 
  
 
$str = "I AM A NSUER"; 
echo wordReverse($str); 

?>