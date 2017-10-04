<?php

        
function footer ($pageLevel) {
    switch ($pageLevel) {
        case 1:
            $prefix = "";
            break;
        case 2:
            $prefix = "../";
            break;
        case 3:
            $prefix = "../../";
            break;
        case 4:
            $prefix = "../../../";
            break;
        default:
            $prefix = "";
    }
    
        
    echo    "   <a class='textLink' href='".$prefix."html/about.php'>Om siden</a>".
            "   <p class='copyright'>Odd Martin Hansen &copy; 2017</p>";
        
}