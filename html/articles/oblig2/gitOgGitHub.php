<!DOCTYPE html>
<html lang="nb">
    <head> 
        <title>SVG - An Odd One</title>
        <?php
            include '../../../includes/head.php';
            head(4);
        ?>
    </head>
    <body>     
        <div id="master-grid">
            <header id="topHeader">
                <a id="star" href="../../../index.php">*</a>
                <h1>AN ODD ONE</h1>
            </header> 
            
            <?php
                include '../../../includes/menu.php';
                menu(4);
            ?>
            
            
            <nav id="structuralNavBar"> 
                <a href='../../../index.php'><i class="fa fa-home" aria-hidden="true">&nbsp;</i>HJEM</a>
                &gt; 
                <a href='../../articles.php'>
                    ARTIKLER
                </a>
                &gt;
                <a href='gitOgGitHub.php'>
                    GIT OG GITHUB
                </a>
            </nav>

            <main>
                <article class="articleFull">
                    <header>
                        <h2>Git og GitHub</h2> 
                    </header>
                    
                    <p class="ingress">
                        Git er et versjonskontrollsystem, utviklet av Linus 
                        Torvalds (creater of Linux). Programvaren gir brukerene 
                        mulighet til å følge endringene i filer, samt samarbeide
                        på større prosjekter. Det er i hovedsak brukt til kildekode 
                        håndtering i programvare utvikling. Det er bygget for å være
                        raskt, samt beskytelse av integriteten til data.
                    </p>
                    <p>
                        GitHub er en web-basert Git repository hosting tjeneste. 
                        Siden er i hovedsak bruk til kode og tilbyr alle tjenestene
                        Git tilbyr, samt egenutviklede tilleggstjenester. <br>
                            
                    </p>
                        
                    </section>
                    
                    <section>
                        <h3>Fordeler med Git og GitHub</h3>
                        <p>
                            Den største fordelen med Git og GitHub er at skulle det 
                            utenkelige skje, og filene dine forsvinner fra lagringsmediet
                            ditt, kan en clone lastes ned fra GitHub. Bruker man flere PC'er
                            til å arbeide på prosjektet er det veldig praktisk til å flytte nyeste
                            versjon av prosjektet mellom arbeidsstasjoner. GitHub er også ypperlig 
                            til sammarbeidsprosjekter da siden gir tilgang til en del ekstra funksjoner, 
                            blandt annet vertøy som:
                        </p>
                        <ul>
                            <li>Bug tracking - brukere kan sende inn bug-rapporter.</li>
                            <li>Feature request - brukere kan sende inn ønsker om nye programvarefunksjoner.</li>
                            <li>Wiki for prosjektet - Slik at informasjon om prosjektet kan publiseres samtidig som prosjektet.</li>
                        
                        </ul>
                        
                    </section>
                    <section style=>
                        <h3>GitKraken koblet opp mot GitHub</h3>
                        
                              
                    </section>
                </article>
            </main>
            <aside id="infoPanel"></aside>
            <footer>
                <?php
                    include '../../../includes/footer.php';
                    footer(4)  
                ?>
            </footer>
        </div>
    </body>
    


</html>