<?php

        
function aside ($pageLevel) {
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
    
        
    echo    "<section class='infoBox'>\n".
"                   <h3>Frister</h3>\n".
"                   <p> Oblig 1 - 20 sept. </p>\n".
"                   <p> Oblig 2 - 04 okt. </p>\n".
"                   <p> Oblig 3 - 18 okt. </p>\n".
"                   <p> Oblig 4 - 01 nov. </p>\n".
"                   <p> Oblig 5 - 15 nov. </p>\n".
"               </section>\n".
"               <section class='infoBox'>\n".
"                   <h3>TimeOversikt</h3>\n".
"                   <details>\n".
"                       <summary>Forelesninger</summary>\n".
"                       <p>Mandag: 14:00 - 16:00</p>\n".
"                       <p>Onsdag: 12:00 - 14:00</p>\n".
"                       <p>Mandag: 08:00 - 10:00</p>\n".
"                   </details>\n".
"                   <details>\n".
"                       <summary>Støttetimer</summary>\n".
"                       <p>Mandag: 10:00 - 12:00</p>\n".
"                       <p>Tirsdag: 10:00 - 15:00</p>\n".
"                       <p>Onsdag: 08:00 - 12:00</p>\n".
"                       <p>Torsdag: 08:00 - 10:00, <br> 12:00 - 14:00</p>\n".
"                       <p>Fredag: 11:00 - 16:00</p>\n".
"                   </details>\n".
"               </section>\n".   
"               <section class='infoBox'>\n".
"                   <h3>Ressurser</h3>
                    <ul> 
                        <li>
                            <a class='textLink' href='http://www.css-tricks.com'>Css-Trick</a>
                        </li>
                        <li>
                            <a class='textLink' href='http://www.w3schools.com'>W3Schools</a>
                        </li>
                        <li>
                            <a class='textLink' href='http://www.github.com'>GitHub</a>
                        </li>
                    </ul>                  ".
            "   </section>";
        
}