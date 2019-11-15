// 1
window.onload = (e) => {document.querySelector("#search").onclick = searchButtonClicked};
// 2
let displayTerm = "";
// 3
function searchButtonClicked(){
    console.log("searchButtonClicked() called");
    //1 - search endpoint
    const GIPHY_URL = "https://api.giphy.com/v1/gifs/search?"
    //2 - API key identifies you to owner of service
    let GIPHY_KEY = "dc6zaTOxFJmzC";
    //3 - specify a parameter and give it a value
    let url = GIPHY_URL;
    url += "api_key=" + GIPHY_KEY;
    //4 - value of text input field
    let term = document.querySelector("#searchterm").value;
    displayTerm = term;
    //5 - get rid of extra spaces
    term = term.trim();
    //6 - encodeURI will get rid of spaces, and symbols
    term = encodeURIComponent(term);
    //7 - bail out if nothing to search for
    if (term.length < 1) return;
    //8 - add search term to url
    url += "&q=" + term;
    //9 - grab value of select + add limit to url
    let limit = document.querySelector("#limit").value;
    url += "&limit=" + limit;
    //10 - update UI with user search term
    document.querySelector("#status").innerHTML = "<b>Searching for '" + displayTerm + "'</b>";
    //11 - log out the URL
    console.log(url);
    //12 - request data
    getData(url);
}

function getData(url) {
    //create new XHR object
    let xhr = new XMLHttpRequest();
    //2 - set onload handler
    xhr.onload = dataLoaded;
    //3 - set onerror handler
    xhr.onerror = dataError;
    //4 - open connection and send request
    xhr.open("GET", url);
    xhr.send();
}
function dataLoaded(e) {
    //5 - event.target is xhr object
    let xhr = e.target;
    //6 - xhr.responseText is the JSON file that was downloaded
    console.log(xhr.responseText);
    //7 - turn text into parsable JS object
    let obj = JSON.parse(xhr.responseText);
    if (!obj.data || obj.data.length == 0) {
        document.querySelector("#status").innerHTML = "<b>No results found for '" + displayTerm + "'<b>";
        return; //bail out
    }
    //9 - start building HTML string we will display to the user
    let results = obj.data;
    console.log("results.length = " + results.length);
    let bigString = "<p><i>Here are " + results.length + " results for '" + displayTerm + "'</i></p>";
    //10 - loop through results
    for(let i=0; i<results.length; i++) {
        let result = results[i];
        //11 - get the URL to the GIF
        let smallURL = result.images.fixed_width_small.url;
        if (!smallURL) smallURL = "images/no-images-found.png";
        //12 - get the URL to the GIPHY page, rating of GIPHY image
        let url = result.url;
        let rating = result.rating;
        //13 - Build a div to hold each result
        //ES6 String Templating
        let line = `<div class="result"><img src='${smallURL}' title='${result.id}'/>`;
        line += `<span><a target='_blank' href='${url}'>View on Giphy</a><p>Rating: ` + rating.toUpperCase()+
         `</p></span></div>`;
        //15 - add div to bigString and loop
        bigString += line;
    }
    //16 - done building HTML, show to user
    document.querySelector("#content").innerHTML = bigString;
    //17 - update the status
    document.querySelector("#status").innerHTML = "<b>Success!</b>";
}
function dataError(e) {
    console.log("An error occurred.");
}