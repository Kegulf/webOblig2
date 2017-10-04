<!DOCTYPE html>
<html lang="nb">
    <head> 
        <title>MathML - An Odd One</title>
        <?php
            include '../../../includes/head.php';
            head(4);
        ?>
    </head>
    <body>     
        <div id="master-grid">
            <header id="topHeader">
                <a id="star" href="index.php">*</a>
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
                <a href='#'>
                    MATHML
                </a>
            </nav>

            <main>
                <article class="articleFull">
                    <header>
                        <h2>MathML</h2> 
                    </header>
                    
                    <p class="ingress">
                        MathML er et markup language for å vise matematisk og vitenskapelig innhold til nettsider. 
                        Språket er utviklet av W3C i samarbeid flere firmaer med god erfaring innen 
                        prosessering og presentasjon av matematikk på data. Det bygger på XML og kan styles!
                    </p>
                    
                    <section>
                        <h3>Hva er MathML</h3>
                        <p>
                            Før MathML ble laget, var det lite effektivt å vise matematisk innhold på nettsider. 
                            Den vanligste løsningen var å skrive innholdet i et alternativt verktøy, for så å lage
                            et bilde som ble brukt på nettsiden. MathML ble laget som en løsning for å kunne vise 
                            matematisk innhold på en strukturert måte som kan styles og endres dynamisk.
                        </p>
                        <p>                           
                            Som sagt bygger MathML på XML. Med dette menes det at det er bygget opp med likt 
                            tag-system som HTML, som også bygger på XML. Det er dette som åpner for muligheten til å style
                            innholdet. 
                        </p> 
                        
                    </section>
                    <section>
                        <h3>Hvorfor er det nyttig</h3>
                        <p>
                            Noen av de største fordelene med MathML er:
                        </p>
                        <details>
                            <summary>Posisjonering</summary>
                            <p>
                                Posisjonering blir betrakelig lettere å posisjonere. Med tilgang til CSS kan marginer 
                                legges til på hvert enkelt element, noe som gir brukeren mye kontroll!
                            </p>  
                        </details>
                            
                            
                    </section>
                    <section>
                        <h3>Eksempler på bruk</h3>
                        
                        
                        
                        
                    </section>
                </article>
            </main>
            <aside id="infoPanel"></aside>
            <footer>
                
                <?php
                    include '../../../includes/footer.php';
                    footer(4)         
                ?>
                <p>Odd Martin Hansen &copy; 2017</p>
            
            </footer>
        </div>
    </body>
    


</html>