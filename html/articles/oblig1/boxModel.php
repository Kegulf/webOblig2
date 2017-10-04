<!DOCTYPE html>
<html lang="nb">
    <head> 
        <title>Forside - Oddh</title>
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
                    <h2>Hva er Box-model</h2>
                    <p>
                        Når en nettleser skal rendere et html dokument, representerer renderingsmotoren i nettleseren alle elementersom en rektangulær boks.
                        Dette er det som kalles Box-model. Med CSS defineres størrelsen, posisjonen og egenskapene (farge, bakgrunn, etc.) til disse boksene.
                    </p>
                    <section> 
                        <figure>
                            <img src="../../../pics/border-box.png" alt="Bilde av Border-box prinsippet" />
                            <figcaption>Bilde av Border-box prinsippet</figcaption>
                        </figure>
                        <h3>Bildeforklaring</h3>
                        <ul class="dottedList">
                            <li>
                                <strong>Content</strong> - Innholdet i boksen, bilder og tekst dukker opp her.
                            </li>
                            <li>
                                <strong>Padding</strong> - Avstand fra innholdet til kanten av boksen. Paddingen er gjennomsiktig. 
                            </li>
                            <li>
                                <strong>Border</strong> - En synlig borde som går rundt padding og innholdet. 
                            </li>
                            <li>
                                <strong>Margin</strong> - Avstand fra borden til andre bokser. Marginen er også gjennomsiktig.
                            </li>
                        </ul>

                    </section>   
                    <section>
                        <h3>Prinsipper:</h3>
                        <ul class="linkList">
                            <li><a href="#size">Width og hegiht</a></li>    
                            <li><a href="#borders">Borders</a></li>    
                            <li><a href="#margAndPad">Margin and padding</a></li>
                            <li><a href="#overflow">Overflow</a></li>    
                            <li><a href="#box-sizing">Box-sizing</a></li>                    
                        </ul>
                        <p>Link til css-filen for disse boksene finner du
                        <a class="srcLink" href="../../../css/boxes.css" target="_blank">her!</a>
                        </p>
                    </section>
                </article>
                <article id="size">
                    <h2>Width and height</h2>
                    <div class="textBox" id="tallBox">
                        <p>Tall Box</p>
                    </div>
                    <div class="textBox" id="wideBox">
                        <p>Wide Box</p>
                    </div>
                    <div class="textBox" id="squareBox">
                        <p>Square Box</p>
                    </div>
                </article>
                <article id="borders">
                    <h2>Borders</h2>       
                    <div class="textBox borderBox" id="dotBorderBox">
                        <p>Dotted border</p>
                    </div>
                    <div class="textBox borderBox" id="solidBorderBox">
                        <p>Solid border</p>
                    </div>
                    <div class="textBox borderBox" id="dashBorderBox">
                        <p>Dashed border</p>
                    </div>
                    <div class="textBox borderBox" id="doubleBorderBox">
                        <p>Double border</p>
                    </div>
                </article>
                <article id="margAndPad">
                    <h2>Margin and padding</h2>
                    <div class="margAndPadBox" id="marginBox">
                        <p>Big marg, no pad</p>
                    </div>
                    <div class="margAndPadBox" id="paddingBox">
                        <p>With pad, no marg</p>
                    </div>
                </article>
                <article id="overflow">
                    <h2>Overflow</h2>
                    <div class="textBox" id="visibleOFBox">
                        <p>Overflow: visible</p>
                        <p>
                            Lorum ipsum. Lorum ipsum. Lorum ipsum. Lorum ipsum. Lorum ipsum. Lorum ipsum. Lorum ipsum. Lorum ipsum. Lorum ipsum. Lorum ipsum. Lorum ipsum. Lorum ipsum. Lorum ipsum. Lorum ipsum. Lorum ipsum. 
                        </p>
                    </div>
                    <div class="textBox" id="hiddenOFBox">
                        <p>Overflow: hidden</p>
                        <p>
                            Lorum ipsum. Lorum ipsum. Lorum ipsum. Lorum ipsum. Lorum ipsum. Lorum ipsum. Lorum ipsum. Lorum ipsum. Lorum ipsum. Lorum ipsum. Lorum ipsum. Lorum ipsum. Lorum ipsum. Lorum ipsum. Lorum ipsum. 
                        </p>
                    </div>
                    <div class="textBox" id="scrollOFBox">
                        <p>Overflow: scroll</p>
                        <p>
                            Lorum ipsum. Lorum ipsum. Lorum ipsum. Lorum ipsum. Lorum ipsum. Lorum ipsum. Lorum ipsum. Lorum ipsum. Lorum ipsum. Lorum ipsum. Lorum ipsum. Lorum ipsum. Lorum ipsum. Lorum ipsum. Lorum ipsum. 
                        </p>
                    </div>
                    <div class="textBox" id="autoOFBox">
                        <p>Overflow: auto</p>
                        <p>
                            Lorum ipsum. Lorum ipsum. Lorum ipsum. Lorum ipsum. Lorum ipsum. Lorum ipsum. Lorum ipsum. Lorum ipsum. Lorum ipsum. Lorum ipsum. Lorum ipsum. Lorum ipsum. Lorum ipsum. Lorum ipsum. Lorum ipsum. 
                        </p>
                    </div>
                </article>
                <article id="box-sizing">
                    <h2>Box-sizing</h2>
                    <p>
                        Denne egenskapen må gies en liten forklaring. Box-sizing definerer hvilke deler av boksen som skal regnes med i bredde og høyde verdiene til boksen.
                        Begge disse boksene har samme egenskaper, gitt av klassen borderSizingBox. Eneste forskjellen er box-sizing egenskapene gitt av hver boks sine id'er.
                    </p>
                    <section> 
                        <h3>Examples</h3>
                        <div class="borderSizingBox" id="contentSizedBox">
                            <p>Content-box (default)</p>
                        </div>
                        <div class="borderSizingBox" id="borderSizedBox">
                            <p>Border-box</p>
                        </div>
                        <p class="explaination" id="content-boxExpl">
                           <strong>Content-box</strong> regner kun content som width and height, derfor blir boksen større enn 200px bred og høy, som er fastsatt i CSS. 
                        </p>
                        <p class="explaination" id="border-boxExpl">
                            <strong>Border-box</strong> tar med både border, padding og content i bredde og høyde beregningene av boksen, men ikke margin. 
                        </p>
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


