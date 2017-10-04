<!DOCTYPE html>
<html lang="nb">
    <head>    
        <?php
            include '../../../includes/head.php';
            head(4);
        ?>     
    </head>
    <body>    
        <header>
            <?php
                include '../../../includes/menu.php';
                menu(4);
            ?>
        </header>     
        <main>
            
            <header class="headline">
                <h1>Oppgave 2: Webservere</h1>
            </header>
            
            
            <article>
                <h2>Webserver</h2> 
                <section>
                    <h3>Hva er en webserver?</h3>
                    <p class="ingress">
                        En <strong>webserver</strong> er software som er ansvarlig for å servere en klient en webside. Den mottar HTTP-requests og sender tilbake HTTP-responses. Disse responsene inneholder HTML, CSS og JS filene klienten etterspør.
                    </p>
                </section>    
                <section>
                    <h3>Ulike typer</h3>
                    <p>
                        Ordet webserver kan referere til både software og til hardware. På hardware siden fins det noe som heter en dedikert server PC. Dette er en datamaskin, ofte Linux-basert, som kjører webserver software. Eks. den Linux-baserte serveren ask, eid av Høgskolen.
                    </p>
                    <p>
                        Software messig, fins det mange programmer å velge mellom. Tre av de mest populære server-softwarene er:
                    </p>
                    <ul class="dottedList">
                        <li>Apache HTTP Server</li>
                        <li>Internet Information Services (IIS Web Server)</li>
                        <li>lighttpd (uttalt lighty)</li>
                    </ul>
                </section>
                <section>
                    <h3>Hvordan virker den?</h3>
                    <p>
                        Webserveren er koblet opp til internett, hvor den får en unik IP-adresse. 
                        Adressen er bygget opp av 4 tall adskilt av punktum-tegn (IPv4), hvor verdiene av tallene har en verdi fra 0 til 255, <br>(eks. 135.10.64.128). IP-adressen er serverens unike identifikasjons informasjon. Om man skriver IP adressen i et nettleser vindu vil man få opp index siden i htdocs mappen på webserveren.
                    </p>
                    <p>
                        Å gå rundt å huske på IP-adresser er tungvindt. Derfor brukes noe som heter domenenavn isteden. Når et domenenavn, som for eks. www.vg.no, blir opprettet, må IP-adressen oppgies slik at domenenavnet tilknyttes IP-adressen. 
                    </p>
                    <p>
                        Når en klient (nettleser) skriver inn domene-navnet, sendes en HTTP-request (Hyper Text Transfer Protocol), til serveren. Serveren mottar og prosseserer requesten, utfører server side scripts som php (server-side programmeringsspråk). Deretter sender den tilbake en HTTP-response som inneholder websiden som klienten etterspør sin HTML (Hyper Text Markup Language), CSS og JS.
                    </p>
                </section>
                <section>
                    <h3>Eksterne artikkler</h3>
                    <ul class="linkList">
                        <li><a href="https://developer.mozilla.org/en-US/docs/Learn/Common_questions/What_is_a_web_server" target="_blank">What is a webserver - Mozilla</a></li>
                        <li><a href="http://www.fastwebhost.in/blog/what-is-web-servers-different-types-of-web-servers/" target="_blank">Webservers - FastWebHost.in</a></li>
                    </ul>
                </section>
                
            </article>
        </main>  
        <footer>Odd Martin Hansen &copy; 2017</footer>
    </body>
</html>