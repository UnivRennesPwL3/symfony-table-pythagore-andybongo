<?php

namespace App\Utility;

class PythagoreUtility
{
    
    public function display($size = 10)
    {
       
        $html = "<table border='1' cellpadding='5' cellspacing='0'>\n";

        
        for ($i = 1; $i <= $size; $i++) {
            $html .= "<tr>\n";  
            for ($j = 1; $j <= $size; $j++) {
                
                if ($i === $j) {
                    $html .= "<td>X</td>\n";
                } else {
                    
                    $html .= "<td>" . ($i * $j) . "</td>\n";
                }
            }
            $html .= "</tr>\n";  
        }

        
        $html .= "</table>\n";

        return $html;  
    }
}


$pythagore = new PythagoreUtility();
echo $pythagore->display(10);  
?>

