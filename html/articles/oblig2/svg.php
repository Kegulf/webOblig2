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
                <a href='#'>
                    SVG
                </a>
            </nav>

            <main>
                <article class="articleFull">
                    <header>
                        <h2>SVG</h2> 
                    </header>
                    
                    <p class="ingress">
                        Scalable Vector Graphics, eller SVG for kort, er et XML basert filformat 
                        som brukes til å lage vektor bassert grafikk. Vektor bassert grafikk er en 
                        type grafikk som skalerer ekstremt bra. Dette kommer av at det er bygget opp av
                        vektorer, som er en matematisk konstruksjon bestående av en retning og en lengde.
                        Ved å endre lengden på vektorene, kan bilde skaleres uten å ofre kvalitet.
                    </p>
                    
                    <section>
                        <h3>Hva kan det brukes til</h3>
                        <p>
                            SVG er SVÆRT allsidig, det eneste som setter grenser er fantasien!
                            Det kan blandt annet brukes til å tegne skalerbare bilder og ikoner,
                            det kan annimeres, det kan brukes som filter over HTML5 videoer. 
                            Dette krever selvfølgelig litt erfaring, men skal i teorien være ganske 
                            oppnåelig for de fleste. Anbefaler å sjekke ut denne linken for flere ting det kan brukes til.<br>
                            <a class="textLink" href="http://www.creativebloq.com/design/examples-svg-7112785">
                                20 examples of SVG!
                            </a>
                        </p>
                        
                    </section>
                    <section style="text-align:center;">
                        <h3>Eksempler:</h3>
                        
                        <svg style="border: 1px solid black;fill: none; stroke-width: 10; stroke: #000" height="360" width="360">
                            <rect x="128" y="10" width="220" height="220" />
                            
                            <line x1="126" y1="230" x2="8" y2="348"/>
                            
                            <line x1="126" y1="10" x2="8" y2="128"/>
                            
                            
                            <line x1="349" y1="230" x2="229" y2="350"/>
                            
                            <line x1="346" y1="10" x2="228" y2="128"/>
                            
                            
                            <rect x="10" y="128" width="220" height="220" />
                        </svg> 
                        
                        <svg style="border: 1px solid black;" height="360" width="360">                        
                            <circle cx="180" cy="180" r="130" style="fill:#90f;fill-opacity:0.9;stroke=#000" />
                            <circle cx="180" cy="180" r="100" style="fill:#fff;fill-opacity:0.3;stroke=#000" />
                            <circle cx="180" cy="180" r="70" style="fill: #90f; stroke-width: 5; stroke: #000" /> 
                        </svg>      
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