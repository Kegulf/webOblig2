window.onload = main;
            
var allArticles, oblig1, oblig2, oblig3, oblig4, oblig5,
    xmlHttp, articlesJSON;

// Setup function
function main () {
    allArticles = [], oblig1 = [], oblig2 = [], oblig3 = [], oblig4 = [], oblig5 = [];
    fetchJSON();  
}

function fetchJSON () {
    xmlHttp = new XMLHttpRequest();
    xmlHttp.onreadystatechange = (function() {
        if(xmlHttp.readyState === 4 && xmlHttp.status === 200) {
            articlesJSON = JSON.parse(xmlHttp.response);
            workIt(articlesJSON);
        }
    });
    xmlHttp.open('GET', 'articles/articles.json', true);
    xmlHttp.send();    
}

function workIt(array) {
    var obligNum;
    for(var i = 0; i < array.length; i++) {
        obligNum = array[i].obligNum;
        allArticles.push(array[i]);
        switch (obligNum) {
            case 1:
                oblig1.push(array[i]);
                break;
            case 2:
                oblig2.push(array[i]);
                break;
        }
    }
    displayByOblig(2, oblig2);
    //displayByOblig(1, oblig1);
}

function displayByOblig (obligNum, array) {

    var main = document.getElementById("mainContent");
    
    var obligHeadLine = document.createElement("h2");
    obligHeadLine.className = "obligHeadline";
    obligHeadLine.innerHTML = "Obligatorisk innlevering " + obligNum;
    main.appendChild(obligHeadLine);
    
    var container = document.createElement("div");
    container.className = "cardContainer";
    
    
    for(var i = 0; i < array.length; i++) {
        
        var card = document.createElement("article");
        card.className = "articleCard";
        
        var header = document.createElement("header");
        card.appendChild(header);
        
        var headline = document.createElement("h2");
        headline.innerHTML = array[i].headline;
        header.appendChild(headline);
        
        var meta = document.createElement("p");
        meta.className = "meta";
        meta.innerHTML = array[i].meta
        header.appendChild(meta);
   
        var ingress = document.createElement("p");
        ingress.className = "ingress";
        ingress.innerHTML = array[i].ingress;
        card.appendChild(ingress);
        
        var readMoreLink = document.createElement("a");
        readMoreLink.href = "articles/oblig" + obligNum + "/" + array[i].filename;
        readMoreLink.className = "readMoreLink";
        readMoreLink.innerHTML = "Les mer";
        card.appendChild(readMoreLink);
        
        container.appendChild(card);
    }
    main.appendChild(container);
    
}

function displayAlphabethical () {

}