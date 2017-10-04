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
                <h1>Oppgave 4: Domener og URLer</h1>
            </header>
            
            
            <article>
                <h2>Domener og URLer</h2> 
                <section>
                    <h3>Hva er et domene?</h3>
                    <p class="ingress">
                        Et <strong>domene</strong> er en del av et nettverk som har samme begynnelse på nettadressen. 
                        <br>Man har et hoveddomene, som for eks. hiof, som igjen kan ha underdomener som it, ask, frigg osv. Et domene befinner seg på et toppdomene, i hiof's tilfellet er toppdomenet ".no"
                    </p>
                </section>    
                <section>
                    <h3>Strukur og oppbygging av URL</h3>
                    <p>
                        URL står for Uniform Resource Locator. URL brukes for å lettere kunne koble til domener.
                        Oppbyggingen av en URL adresse er følgende:
                    </p>
                    <p>
                        protokoll://underdomene.domene.toppdomene/sti/side
                    </p>
                    <figure>
                        <img src="../../../pics/url-structure.png" alt="Bilde av URL's oppbygging" />
                        <figcaption>
                            Hentet fra <a class="srcLink" href="https://seovaralaxmi.wordpress.com/">SEO Varalxmi - WordPress</a>
                        </figcaption>
                    </figure>
                    <details>
                        <summary>Protokoll</summary>
                        <p>
                            Refererer til protokollen som brukes i tilkobling, eks HTTP, HTTPS osv.
                        </p>
                    </details> 
                    <details>
                        <summary>Underdomene</summary>
                        <p>
                            Underdomene er en spesifikk del av domenet, bruker hiof sitt domene som eksemepel, hvor underdomener er eks. it, ask, frigg. Eventuelt kan man også referere til www, som er World Wide Web.
                        </p>
                    </details>
                    <details>
                        <summary>Toppdomene</summary>
                        <p>
                            Topplevel domenet (TLD) kan deles inn i to typer; 
                        </p>
                        <ol class="numberedList">
                            <li>
                                Generiske topp domener - eks .com, .org og .net
                            </li>
                            <li>
                                Toppdomener med landskode - Alle domener som identifiseres med et geografisk sted, eks .no .se .co.uk osv.
                            </li>
                        </ol>
                    </details>
                    <details>
                        <summary>Sti og side</summary>
                        <p>
                            Stien beskriver mappestrukturen som må navigeres for å finne side filen. Eks om du ser i adressefeltet på denne nettsiden vil du se at URLen er .../html/web/obl1/oppgave4.php.
                        </p>
                        <p>
                            Side-filen oppgave4.php ligger i mappen obl1, som ligger i mappen web, som ligger i mappen html.
                        </p>
                    </details>
                </section>
                <section>
                    <h3>DNS - Domain Name System</h3>
                    <p>
                        DNS er et system som brukes til å konvertere en servers URL til IP-adressen. Hvis en klient ønsker å koble seg til en webserver, skriver klienten inn URL-adressen, for eks. http://ask.hiof.no/. DNSen vil konvertere URLen til IP-adressen til serveren slik at klientens request kan sendes dit den skal.
                    </p>
                </section>
                <section>
                    <h3>Domene og SEO</h3>
                    <p>
                        Valg av domenenavn og SEO henger tett sammen. Et vel valgt domenenavn kan forbedre rangeringen til en nettside i søkemotorene. 
                    </p>
                    <p>
                        Før 2010 var konseptet EMD, eller Exact Match Domain veldig populært og effektivt. Dette konseptet gikk ut på å registrere et domenenavn som var veldig spesifikt i forhold til forventede søkeord eller søkestrenger. Eks. BuyUsedBikes.com. At selve søkestrengen fantes i domenenavnet var veldig effektivt.
                    </p>
                    <p>
                        Dette fungerte veldig bra fram til 2010. Da kom google med en del oppdateringer som gjorde at EMDer's effektivitet droppet drastisk. 
                    </p>
                    <p>
                        Idag er det viktigere å tenke brand-name i domeneverden. Sålenge domenenavnet er lett å huske, vil det lettere kunne bli delt og flere vil søke etter domenenavnet spesifikt. Et eksempel er amazon.com. Det har veldig lite å gjøre med varehus, men det er et av de største nettbaserte varehusene på nettet.
                    </p>
                </section>
            </article>
        </main>  
        <footer>Odd Martin Hansen &copy; 2017</footer>
    </body>
</html>