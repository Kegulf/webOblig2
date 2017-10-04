<!DOCTYPE html>
<html lang="nb">
    <head> 
        <title>Forside - Oddh</title>
        <?php
            include 'includes/head.php';
            head(1);
        ?>
    </head>
    <body>     
        <div id="master-grid">
            <header id="topHeader">
                <a id="star" href="index.php">*</a>
                <h1>AN ODD ONE</h1>
            </header> 
            
            <?php
                include 'includes/menu.php';
                menu(1);
            ?>
            
            
            <nav id="structuralNavBar"> 
                <a href='index.php'>
                    <i class="fa fa-home" aria-hidden="true">&nbsp;</i>HJEM
                </a>               
            </nav>
            <main>
                <div id="imageContainer">
            
                </div>
                <h2 id="newestArticles">Siste artikler</h2>
                <div class="cardContainer" id="articleContainer">
                    <article class="articleCard">
                        <header>
                            <h2>Git og GitHub</h2>
                            <p class="meta">Date: 16.09.17, 22:14. Author: Odd Martin Hansen</p>
                        </header>
                        <p class="ingress">
                            tekst
                        </p>
                        <a href="html/articles/oblig2/gitOgGitHub.php" class="readMoreLink">
                            Les mer
                        </a>
                    </article>
                    <article class="articleCard">
                        <header>
                            <h2>MathML</h2>
                            <p class="meta">Date: 16.09.17, 22:14. Author: Odd Martin Hansen</p>
                        </header>
                        <p class="ingress">MathML er et markup language for matematisk og vitenskapelig innhold til nettsider. Språket er utviklet av W3C i samarbeid flere firmaer med god erfaring innen prosessering og presentasjon av matematikk på data. Det bygger på XML og kan styles!</p>
                        <a href="html/articles/oblig2/mathML.php" class="readMoreLink">Les mer</a>
                    </article>
                    <article class="articleCard">
                        <header>
                            <h2>SVG</h2>
                            <p class="meta">Date: 16.09.17, 22:14. Author: Odd Martin Hansen</p>
                        </header>
                        <p class="ingress">
                            Scalable Vector Graphics, eller SVG for kort, er et XML basert filformat 
                            som brukes til å lage vektor bassert grafikk. Vektor bassert grafikk er en 
                            type grafikk som skalerer ekstremt bra. Dette kommer av at det er bygget opp av
                            vektorer, som er en matematisk konstruksjon bestående av en retning og en lengde.
                            Ved å endre lengden på vektorene, kan bilde skaleres uten å ofre kvalitet.
                        </p>
                        <a href="html/articles/oblig2/svg.php" class="readMoreLink">Les mer</a>
                    </article>
                </div>
            </main>
            <aside id="infoPanel"></aside>
            <footer>
                <?php
                    include 'includes/footer.php';
                    footer(1);
                ?>
            
            </footer>
        </div>
    </body>
    


</html>