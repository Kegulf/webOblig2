<!DOCTYPE html>
<html lang="nb">
    <head> 
        <title>Artikler - An Odd One</title>
        <?php
            include '../includes/head.php';
            head(2);
        ?>
        <script src="articles/articles.json"></script>
        <script src="../js/articleDisplayer.js"></script>
        
        <style>
        
            #cardContainer {
                width: 100%;
                padding: 30px;
                
                display: grid;
                grid-template-columns: 1fr 1fr 1fr;
                grid-gap: 30px;
            }
        
        </style>
        
        
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
                <a href='../index.php'>
                    <i class="fa fa-home" aria-hidden="true">&nbsp;</i>HJEM
                </a>
                &gt;
                <a href='articles.php'>
                    ARTIKLER
                </a>               
            </nav>
            <main id="mainContent">
                
            </main>
            <aside id="infoPanel"></aside>
            <footer>
                
                <p>Odd Martin Hansen &copy; 2017</p>
            
            </footer>
        </div>
    </body>
    


</html>