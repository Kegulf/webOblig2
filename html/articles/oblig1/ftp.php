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
                <h1>Oppgave 3: FTP</h1>
            </header>
            
            
            <article>
                <h2>File Transfer Protocol</h2>                    
                
                <p class="ingress">
                    <strong>File Transfer Protocol (FTP)</strong> er en protokoll for overføring av filer i et 
                    TCP/IP-basert nettverk. Overføringen utføres mellom en FTP-klient og en FTP-server, eks programmet 
                    FileZilla (klient) som overfører filer til ask serveren (linuxserver) til Høgskolen.   
                </p>
                <section>
                    <h3>Kort om virkemåte</h3>
                    <p>
                        FTP bruker klient-server arkitektur. Dette vil si at der er en server som holder 
                        på filene og utfører autentisering av tilkoblinger, og en klient som aksesserer filene. 
                        Serveren lytter på nettet etter tilkoblings-forespørsler fra andre maskiner. 
                        Klienten kan koble seg til serveren ved hjelp av et FTP-klient program (software). 
                        Når tilkoblingen er opprettet lar det klienten utføre operasjoner på filene og mappene på serveren. 
                        Operasjonene kan være for eks: 
                    </p>
                    
                    <ul class="dottedList">
                        <li>Laste opp filer. (klientens filer blir lagt på serveren)</li>
                        <li>Laste ned filer. (filer fra serveren blir lagt på klient PCen)</li>
                        <li>Endre navn og slette filer på serveren.</li>
                        <li>Flytte filer rundt i andre mapper.</li>
                        <li>Opprette nye mapper/kataloger.</li>
                        <li>Endre fil rettigheter.</li>
                    </ul>
                    <p>Hvilke filer hvilke personer har rettigheter til blir konfigurert på server-siden av en nettverks administrator.</p>
                    <figure>
                        <a href="../../../pics/fileZilla.png" target="_blank">
                            <img src="../../../pics/fileZilla.png" alt="Picture of FileZilla" />
                        </a>
                        <figcaption>
                            FileZilla klienten for filoverføring ved hjelp av FTP.
                        </figcaption>
                    </figure>
                </section>
                <section>
                    <h3>FileZilla</h3>
                    <p>
                        FileZilla er en gratis, open-source FTP klient. Klienten er en av de mest populære klientene idag.
                        I bildet til høyre ser du en skjermdump av FileZilla.
                        Her er jeg logget på Høgskolen i Østfold sin Linux-server via FileZilla og SFTP (Secure Shell FTP) som er en sikrere versjon av FTP. 
                    </p>
                    <p>
                        Du kan åpne bildet i en ny fane ved å trykke på bildet.
                        I bildet har jeg nummerert noen avgrensede områder.
                        Disse er følgende:
                    </p>
                    <ol class="numberedList">
                        <li>
                            Meny, toolbar og tilkoblingsfelt. Ser spesielt på tilkoblingsfeltet. I host oppgir du hvilken protokoll du vil koble deg til serveren med, samt domenenavnet eller IP-adressen til serveren.
                        </li>
                        <li>
                            Log vindu for tilkoblingsrelaterte meldinger.
                        </li>
                        <li>
                            Dette er filtreet på min PC.
                        </li>
                        <li>
                            Filtreet til serveren. Her er jeg inne i htdocs mappen som er mappen som inneholder Hyper Text dokoumentene på området mitt.
                        </li>
                        <li>
                            En oversikt over filene og mappene i den nåværende valge mappen. Mappens path er oppgitt i rute 3 under "Local Site:" baren.
                        </li>
                        <li>
                            Oversikt over mappene i den nåværende valgte mappen i rute 4. Dette er hovedmappen i til nettsiden min. (Struktur er viktig!! :D).
                        </li>
                        <li>
                            Logg vindu for pågående filoverføringer. 
                        </li>
                    </ol>
                </section>
                <section>
                    <h3>Eksterne artikkler</h3>
                    <ul class="linkList">
                        <li><a href="https://simple.wikipedia.org/wiki/FTP" target="_blank">FTP - Wikipedia, Simple English</a></li>
                        <li><a href="https://kb.iu.edu/d/aerg" target="_blank">What is FTP - Indiana University</a></li>
                        <li><a href=""></a></li>
                    </ul>
                </section>
                
            </article>
        </main>  
        <footer>Odd Martin Hansen &copy; 2017</footer>
    </body>
</html>