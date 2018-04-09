document.querySelector('img').src = "http://placeimg.com/300/200/animals";
document.body.style.backgroundColor = "green";



var pageDiv = document.querySelector("div");
var newParagraph  = document.createElement("p");
var paragraphText = document.createTextNode("JavaScript, y\'all!");
newParagraph.appendChild(paragraphText);
pageDiv.appendChild(newParagraph);



var img = document.getElementById("myImg");

img.addEventListener("mouseover", function (event) {
	alert("What\'s up?");
});



var link = document.getElementById("gdiLink");

link.addEventListener("click", function(event) {
	alert("Error!!!!");
	event.preventDefault();
});



var submitButton = document.getElementById("submitBtn");

submitButton.addEventListener("click", function(event) {
	event.preventDefault();

	var name = document.getElementById("firstName").value;
	alert("Howdy " + name);
})