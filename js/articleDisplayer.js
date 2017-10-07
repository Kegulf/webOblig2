window.onload = main;

// For arrays
var allArticles, oblig1, oblig2, oblig3, oblig4, oblig5,
    xmlHttp, articlesJSON;

// Setup function
function main () {
    
    allArticles = [], oblig1 = [], oblig2 = [], 
         oblig3 = [], oblig4 = [], oblig5 = [];
     
    fetchJSON();  
}

function fetchJSON () {
    
    // Create a new Request using the HT Transfer protocol.
    xmlHttp = new XMLHttpRequest();
    
    // Add an function to the event "Request's readyStateChanged" 
    xmlHttp.onreadystatechange = (function() {
        
        // When the request get's to four, and the status is 200 OK
        if(xmlHttp.readyState === 4 && xmlHttp.status === 200) {
            
            // Take the response data and parse it as JSON
            articlesJSON = JSON.parse(xmlHttp.response);
            sortByObligNum(articlesJSON);
        }
    });
    
    // Request to open article.json file, in syncronous mode
    xmlHttp.open('GET', 'articles/articles.json', true);
    
    // Send request
    xmlHttp.send();    
}

// Sorts the article objects by oblig number
function sortByObligNum(articleList) {
    
    var obligNum;
    
    for(var i = 0; i < articleList.length; i++) {
        
        // Get the oblig number of the current article
        obligNum = articleList[i].obligNum;
        allArticles.push(articleList[i]);
        
        // Basically a if else bracket
        switch (obligNum) {
            case 1:                             // if obligNum === 1 
                oblig1.push(articleList[i]);    // Push it to oblig1 array
                break;                          // break out of the switch since we found the answer.
            case 2:                             // else if obligNum === 2
                oblig2.push(articleList[i]);    // Push it to oblig2 array
                break;                          // break out of the switch since we found the answer.
            default:                            // Else:
                console.log("Could not sort by oblig.");
        }
    }
    displayByOblig(2, oblig2);
    //displayByOblig(1, oblig1);
}

function displayByOblig (obligNum, array) {
    
    // Get the main tag
    var main = document.getElementById("mainContent");
    
    // Headline of the articles based on which
    // obligatory hand-in they were part of
    var obligHeadLine = document.createElement("h2");
    obligHeadLine.className = "obligHeadline";
    obligHeadLine.innerHTML = "Obligatorisk innlevering " + obligNum;
    main.appendChild(obligHeadLine);
    
    // Make flex container for cards by giving it class "cardContainer"
    var container = document.createElement("div");
    container.className = "cardContainer";
    
    // For each article in the array
    for(var i = 0; i < array.length; i++) {
        
        // Make a article card
        var card = document.createElement("article");
        card.className = "articleCard";
        
        // Make and add the header
        var header = document.createElement("header");
        card.appendChild(header);
        
        // Make and add a headline 
        var headline = document.createElement("h2");
        headline.innerHTML = array[i].headline;
        header.appendChild(headline);
        
        // Make p for the meta data (date, author)
        var meta = document.createElement("p");
        meta.className = "meta";
        meta.innerHTML = array[i].meta
        header.appendChild(meta);
        
        // Make p for the ingress of the article
        var ingress = document.createElement("p");
        ingress.className = "ingress";
        ingress.innerHTML = array[i].ingress;
        card.appendChild(ingress);
        
        // Make a read more link
        var readMoreLink = document.createElement("a");
        
        // Set the file path
        readMoreLink.href = "articles/oblig" + obligNum + "/" + array[i].filename;
        
        // Add class and text, then add to card
        readMoreLink.className = "readMoreLink";
        readMoreLink.innerHTML = "Les mer";
        card.appendChild(readMoreLink);
        
        // Add card to the card container
        container.appendChild(card);
    }
    // Add container to the <main> tag
    main.appendChild(container);
    
}

function displayAlphabethical () {

}

