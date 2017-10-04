<?php

function head ($pageLevel) {
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
    
    echo "<meta name='viewport' content='initial-scale=1, maximum-scale=2.5, width=device-width, height=device-height'>    
        <meta charset='utf-8'>
        <link rel='stylesheet' type='text/css' href='".$prefix."css/gridLayout.css' media='all'/>
        <link rel='stylesheet' type='text/css' href='".$prefix."css/print.css' media='print'/>
        
        <script src='https://use.fontawesome.com/530527d8dd.js'></script>
        <script type='text/javascript' async 
                src='https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.2/MathJax.js?config=MML_CHTML'>
        </script>
        
";
    
        

}