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
                    
                    <article class="articleCard" id="article1">
                        <header>
                            <h2>First post!</h2>
                            <p class="meta">Date: 16.09.17, 22:14. Author: Odd Martin Hansen</p>
                        </header>
                        <p class="ingress"></p>
                        <a class='readMoreLink' href="#">Les mer</a>        
                    </article> 

                    <article class="articleCard" id="article2">      
                        <header>
                            <h2>First post!</h2>
                            <p class="meta">Date: 16.09.17, 22:14. Author: Odd Martin Hansen</p>
                        </header>
                        <p  class="ingress">
                            Velkommen til min nye nettside. Mitt navn er Odd Martin Hansen, jeg studerer dataingeniør ved Høgskolen i Østfold. 
                            For å finne ut mer om meg kan du gå inn på siden "About me".
                            Denne siden er en kilde hvor den besøkende kan se igjennom mine innleveringer og prosjekter.
                        </p>
                        <a class='readMoreLink' href="#">Les mer</a>
                    </article> 

                    <article class="articleCard" id="article3">      
                        <header>
                            <h2>MathML</h2>
                            <p class="meta">Date: 03.10.17, 22:14. Author: Odd Martin Hansen</p>
                        </header>
                        <p class="ingress">
                            MathML er et markup language for matematisk og vitenskapelig innhold til nettsider. 
                            Språket er utviklet av W3C i samarbeid flere firmaer med god erfaring innen prosessering 
                            og presentasjon av matematikk på data. Det bygger på XML og kan styles!
                        </p> 
                        <a class='readMoreLink' href="html/articles/oblig2/mathML.php">Les mer</a>         
                    </article>     
                </div>
            </main>
            <aside id="infoPanel"></aside>
            <footer>
                
                <p>Odd Martin Hansen &copy; 2017</p>
            
            </footer>
        </div>
    </body>
    


</html>