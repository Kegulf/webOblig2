<?php
function getElements($array, $prefix) {
    $count = 0;
    $res = "";
    foreach($array as $item) {
                $res = $res."  
                    <li class='menuElement'>
                        <a class='menuOption".++$count."' href='".$prefix.$array[$count - 1][1]."'>
                            <svg>
                                <circle class='circle' cx='50' cy='50' r='20'/>
                            </svg>
                            ".$array[$count - 1][0]."                              
                        </a>
                    </li>";
    }
    
    return $res;
}

function menu($pageLevel) {
    
    $menuItems = array(
        array("HJEM", "index.php"), 
        array("ARTIKLER", "html/articles.php"),
        array("GALLERI", "#"), //html/gallery.php"), 
        array("WEBUTV", "#"), //"html/web.php"), 
        array("RESSURSER", "#"), //"html/resources.php"), 
        array("OM SIDEN", "html/about.php")
    );
        
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
       
    $listElements = getElements($menuItems, $prefix);
    
    echo "<nav id='navigation'>
                <h2> MENY </h2>
                <ul>".$listElements."
                </ul>
            </nav>";
}
?>