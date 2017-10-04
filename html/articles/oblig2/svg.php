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
                    SVG
                </a>
            </nav>

            <main>
                <article class="articleFull">
                    <header>
                        <h2>SVG</h2> 
                    </header>
                    
                    <p class="ingress">
                        MathML er et markup language for matematisk og vitenskapelig innhold til nettsider. 
                        Språket er utviklet av W3C i samarbeid flere firmaer med god erfaring innen 
                        prosessering og presentasjon av matematikk på data. Det bygger på XML og kan styles!
                    </p>
                    
                    <section>
                        <h3>Hva er MathML</h3>
                        
                        
                    </section>
                    <section>
                        <h3>Hvorfor er det nyttig</h3>
                        
                        
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