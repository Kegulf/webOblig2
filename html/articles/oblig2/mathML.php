<!DOCTYPE html>
<html lang="nb">
    <head> 
        <title>MathML - An Odd One</title>
        <?php
            include '../../../includes/head.php';
            head(4);
        ?>
        <style>
            .mathHeader {        
                font-size: 1.8rem;
                padding-bottom: 5px;
                padding-top: 35px;
                border-bottom: 1px solid #ccc;
            }
        
        </style>
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
                <a href='mathML.php'>
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
                            Det har vært en mangel på et effektivt system for å skrive matematisk og vitenskapelig 
                            innhold i teknisk dokumentasjon på nett. HTML er ikke anlagt for det, bilder duger dårlig
                            grunnet liten tilgjengelighet.
                        </p>
                        <p>                           
                            Noen av de største fordelene med MathML er:
                        </p>
                        <details>
                            <summary>Posisjonering</summary>
                            <p>
                                Innholdet blir betrakelig lettere å posisjonere. Gir brukeren mye kontroll! 
                                Men når MathJax biblioteket må brukes må det scripting til for å få det til å
                                fungere skikkelig.
                            </p>  
                        </details>
                        <details>
                            <summary>Søkbart</summary>
                            <p>
                                Det gjør innholdet søkbart
                            </p>  
                        </details>
                        <details>
                            <summary>Tilgjengelighet</summary>
                            <p>
                                Tilgjengeligheten øker for de som bruker spesial browsere, for eksempel
                                en browser som sier innholdet av siden. Når innholdet er representert som et bilde
                                er det vanskelig å få lest opp innholdet.
                            </p>  
                        </details>       
                    </section>
                    <section>
                        <h3>Eksempler på bruk</h3>
                        <p>Noen eksempler på bruk av MathML: </p>
                        
                        <!-- Fermat's last theorem -->
                        <math id="fermat">
                            <mrow>
                                <mtext class="mathHeader">Fermat's siste teorem</mtext>
                                <mspace linebreak='newline' />
                            </mrow>
                            <mrow>
                                <mtext>Der fins ingen heltalls løsninger på likningen:</mtext>
                                <mspace linebreak='newline' />
                            </mrow>
                            <mrow>
                                <msup>
                                    <mi>x</mi>
                                    <mn>n</mn>
                                </msup>
                                <mo>+</mo>
                                <msup>
                                    <mi>y</mi>
                                    <mn>n</mn>
                                </msup>
                                <mo>=</mo>
                                <msup>
                                    <mi>z</mi>
                                    <mn>n</mn>
                                </msup>
                                <mtext>, for&nbsp;</mtext> 
                                <mi>n</mi>
                                <mo>&gt;</mo>
                                <mn>2</mn>
                            </mrow> 
                        </math>
                        
                        <!-- Euler's Identity -->
                        <math id="euler">
                            <mtext class="mathHeader">Euler's Identity</mtext>
                            <mspace linebreak='newline' />
                            <mrow>
                                <msup>
                                    <mi>e</mi>
                                    <mi>i&pi;</mi>
                                </msup> 
                                <mo>+</mo>
                                <mn>1</mn>
                                <mo>=</mo>
                                <mn>0</mn>                                
                            </mrow>      
                        </math>
                        <!-- ABC - formula -->
                        <math id="abcFormula">
                            <mtext class="mathHeader">ABC formelen</mtext>
                            <mspace linebreak='newline' />
                            <mi>y</mi>
                            <mo>=</mo>
                            <mfrac>
                                <mrow>
                                    <mo>-</mo>
                                    <mi>b</mi>
                                    <mo>&plusmn;</mo>
                                    <msqrt>
                                        <mrow>
                                            <msup>
                                                <mi>b</mi>
                                                <mn>2</mn>
                                            </msup>
                                            <mo>-</mo>
                                            <mn>4</mn>
                                            <mi>ac</mi>
                                        </mrow>
                                    </msqrt>
                                </mrow>
                                <mrow>
                                    <mn>2</mn>
                                    <mi>a</mi>
                                </mrow>
                            </mfrac>
                        </math>
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