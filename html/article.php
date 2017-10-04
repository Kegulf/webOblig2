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
            
            
            <div id="structuralNavBar"> 
                <a href='index.php'>
                    <i class="fa fa-home" aria-hidden="true"> HJEM</i>
                </a>
                
                
            </div>
            <main>
                
            </main>
            <aside id="infoPanel"></aside>
            <footer>
                
                <p>Odd Martin Hansen &copy; 2017</p>
            
            </footer>
        </div>
    </body>
    


</html>