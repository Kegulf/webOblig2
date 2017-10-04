<!DOCTYPE html>
<html lang="nb">
    <head> 
        <title>Forside - Oddh</title>
        <?php
            include '../includes/head.php';
            head(2);
        ?>
    </head>
    <body>     
        <div id="master-grid">
            <header id="topHeader">
                <a id="star" href="index.php">*</a>
                <h1>AN ODD ONE</h1>
            </header> 
            
            <?php
                include '../includes/menu.php';
                menu(2);
            ?>
            
            
            <nav id="structuralNavBar"> 
                <a href='../index.php'><i class="fa fa-home" aria-hidden="true">&nbsp;</i>HJEM</a>
                &gt; 
                <a href='about.php'>
                    OM SIDEN
                </a>
            </nav>

            <main>
                <article class="articleFull">
                    <header>
                        <h2>Om Siden</h2> 
                    </header>
                    
                    <p class="ingress">
                        Dette nettstedet er ment å være et nettsted for meg som student ved HiØ. 
                        Den vil bli brukt til å levere artikler om emnene vi lærer om i faget Webutvikling. 
                        Siden er også del av besvarelsen av den andre obligatoriske oppgaven i samme fag.
                    </p>
                    
                    <section>
                        <h3>Planlegging</h3>
                        <p>
                            Som en del av innleveringen ble vi bedt om å planlegge nettsiden. I denne prosessen har 
                            jeg brukt PDF‘en "Usability and heuristics". Denne PDF'en påpeker en del viktige elementer
                            å ta hensyn til når man designer websider.
                        </p>
                        <p>
                            <strong>Viktige ting å tenke på:</strong>
                        </p>
                        <ul>
                            <li>Ryddighet og god struktur framfor kaos.</li>
                            <li>Språkbruk, «jobber» istedenfor «Job-o-rama»</li>
                            <li>Gjenkjennelige design elementer eks. søkeboks eller hamburger ikon for meny.</li>
                            <li>Viktig info synliggjøres</li>
                            <li>Klikkbart skal se klikkbart ut</li>
                            <li>Formater tekst for scanning, ikke lesing</li>
                            <li>Unngå instruksjoner, bør være lett for brukeren å forstå funksjonaliteten.</li>
                        </ul>
                        <h3>Navigasjon og brødsmuler</h3>
                        <p>
                            På nettsiden jeg leverte obligatorisk innlevering 1
                            (<a href="http://ask.hiof.no/~oddh/webutvikling/current" target="_blank">link <i class="fa fa-external-link" aria-hidden="true"></i></a>), 
                            var navigasjonen min et mareritt.
                            Derfor bestemte jeg meg for å lage en mindre komplisert meny med kun de viktigste elementene,
                            for så å lage en utvidet oversikt på de enkelte sidene.
                            I tillegg nevner PDF‘en «brødsmuler». Dette er en horisontal nav bar i toppen av 
                            siden som beskriver hvor i side hierarkiet brukeren er.
                        </p>
                    </section>
                    
                    <section>
                        <h3>Design og tegning</h3>
                        <p>
                            I planleggingen inngikk det også et krav om å tegne opp designet av nettsiden.
                            Dette kunne enten gjøres med program på PCen eller for hånd. 
                            Jeg valgte å gjøre det for hånd.
                        </p>
                        <figure>
                            <img src="http://via.placeholder.com/320x180" />
                            <figcaption>Design av forsiden</figcaption>
                        </figure>    
                        <figure>
                            <img src="http://via.placeholder.com/320x180" />
                            <figcaption>Design av en artikkel</figcaption>
                        </figure>
                        <p>                       
                            Designprosessen begynte med en søken etter inspirasjon, på Google.
                            Tok hovedutgangspunkt i designet fra to sider når jeg designet forsiden.
                            Disse sidene var CSS-tricks og View.
                            Artikkelsiden er delvis inspirert av Google sine hjelpesider.
                        </p> 
                        <p>                      
                            Det måtte noen forsøk til før den endelige skissen ble ferdigstilt.
                            I bildene til høyre kan du se hvordan jeg opprinnelig hadde tenkt at 
                            forsiden og artikkel siden skulle se ut. 
                        </p>
                        <p>
                            Men som alle vet er det stor forskjell fra planleggingsbordet til
                            ferdig produkt. Noen ting fungerer bedre på papir, som for eksempel
                            footeren. Denne har jeg i PC versjonen flyttet til bunnen av det 
                            høyre sidepanelet
                        </p>                                
                    </section>
                    
                    <section>
                        <h3>Inspirasjonskilder</h3>               
                        <table id="inspiration">
                            <tr>
                                <th>Inspirasjons side</th>
                                <th>Elementer</th>         
                            </tr>
                            <tr>
                                <td>
                                    <a href="http://www.css-tricks.com" target="_blank">
                                        CSS-tricks <i class="fa fa-external-link" aria-hidden="true"></i>
                                    </a>
                                </td>
                                <td>
                                    Hovedoppsett - Meny, header og aside oppsett.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="http://www.view.no" target="_blank">
                                        View <i class="fa fa-external-link" aria-hidden="true"></i>
                                    </a>
                                </td>
                                <td>
                                    Forside - artikkeloppsett, tre bokser.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="https://support.google.com/chrome/answer/95414?hl=en&ref_topic=7438008" target="_blank">
                                        Google hjelpesider <i class="fa fa-external-link" aria-hidden="true"></i>
                                    </a>
                                </td>
                                <td>
                                    Artikkelside - Luftig og fin artikkel kolonne
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Ingen spesifikk side
                                </td>
                                <td>
                                    Forside - Photo wheel, jeg tar mye bilder :)
                                </td>
                            </tr>
                        </table>                    
                    </section>
                    
                </article>
            </main>
            <aside id="infoPanel"></aside>
            <footer>
                
                <p>Odd Martin Hansen &copy; 2017</p>
            
            </footer>
        </div>
    </body>
    


</html>