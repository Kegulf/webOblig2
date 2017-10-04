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
                <h1>Obligatorisk innlevering 1</h1>
            </header>
            
            <article>        
                    <h2>Oppgave 1: Oversiktside</h2>
                    <p>
                        Oppgave 1 er å lage en oversikt/forside til 
                        denne innleveringen. Denne siden er den siden.                
                    </p>
            </article>
            <article> 
                    <h2>Oppgave 2: Webserver</h2>
                    <p>
                        En <strong>webserver</strong> er software som er ansvarlig for å servere en klient en webside. 
                        Den mottar HTTP-requests og sender tilbake HTTP-responses. 
                        Disse responsene inneholder HTML, CSS og JS filene klienten etterspør.
                    </p>
                    <a class="readMoreLink" href="oppgave2.php">Les mer...</a>
            </article>
            <article>
                    <h2>Oppgave 3: FTP</h2>
                    <p>
                        <strong>File Transfer Protocol (FTP)</strong> er en protokoll
                        for overføring av filer i et TCP/IP-basert nettverk.
                        Overføringen utføres mellom en FTP-klient og en FTP-server, eks programmet 
                        FileZilla (klient) som overfører filer til ask serveren (linuxserver) til Høgskolen.
                    </p>
                    <a class="readMoreLink" href="oppgave3.php">Les mer...</a>
            </article>
            <article>
                <h2>Oppgave 4: Domener og mappestrukturer</h2>
                    <p>
                        Et <strong>domene</strong> er en del av et nettverk som har samme begynnelse på nettadressen. 
                        <br>Man har et hoveddomene, som for eks. hiof, som igjen kan ha underdomener som it, ask, frigg osv. Et domene befinner seg på et toppdomene, i hiof's tilfellet er toppdomenet ".no"
                    </p>  
                    <a class="readMoreLink" href="oppgave4.php">Les mer...</a>
            </article>
            <article>
                <h2>Resterende oppgaver</h2>
                <ul class="linkList">
                    <li><a href="../../../css/stilark.css" target="_blank">Oppgave 5 - CSS filen</a></li>
                    <li><a href="oppgave6.php">Oppgave 6 - Box-model</a></li>
                    <li><a href="../../../css/menu.css" target="_blank">Ekstra oppgave 1 - Menyen</a></li>
                </ul>
            </article>
        </main>  
        <footer>Odd Martin Hansen &copy; 2017</footer>
    </body>
</html>