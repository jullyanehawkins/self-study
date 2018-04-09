/*alert("Hello World!");
console.log("Secret message");
console.log(2+2);
document.write("<b>Hello world</b>");*/



/*var jully = 27;

document.write(jully);*/



/*var numOfBeers = 12;
var numOfCokes = 24;
var numOfDrinks = numOfBeers + numOfCokes;

document.write(numOfDrinks);*/



//document.write("I'd like a coke, please");



/*var firstName = "Jullyane ";
var lastName = "Hawkins";
var fullName = firstName + lastName;

document.write(fullName);*/



/*var preTip = 100;
var amount = (15/100) * preTip;
var totalBill = preTip + amount;

document.write("Your total bill, with tip, is $" + totalBill.toFixed(2));*/



/*var parrotFacts = function () {
	console.log('Some parrot species can live for over 80 years');
	console.log('Kakapos are a critically endangered flightless parrot');
} //making the function

parrotFacts();//calling the function*/



/*var helloWorld = function() {
	document.write("HELLO WORLD");
}

helloWorld();*/



/*var callKitten = function (kittenName){
	document.write('Come here, ' + kittenName + '!');
}

callKitten('Fluffy'); // outputs 'Come here, Fluffy!'

var addNumbers = function (a, b){
	ocument.write(a + b);
}

addNumbers(5, 7);  // outputs 12
addNumbers(9, 12); // outputs 21*/



/*var addOne = function (num){
	var newNumber = num + 1;
	console.log('You now have ' + newNumber);
}

// Declare variables
var numberOfKittens = 5;
var numberOfPuppies = 4;

// Use them in functions
addOne(numberOfKittens);
addOne(numberOfPuppies);*/



/*var fullName = function(firstName, lastName) {
	return firstName + lastName;
}

document.write(fullName("Jullyane ", "Hawkins"));*/



/*var temperature = function(weather) {
	document.write("The temperature is " + weather);
	if (weather < 0){
		document.write(" Stay inside <br>");
	} else if (weather < 30) {
		document.write(" Wear a coat and a hat<br>");
	} else if (weather < 50){
		document.write(" Wear a coat <br>");
	} else {
		document.write(" Wear whatever you want");
	}
}

temperature(-1);
temperature(25);
temperature(45);
temperature(69);*/



/*var canDrive = 16;
var canDrink = 21;

var age = function(years) {
	document.write("Your age is" + years);
	if (years >= canDrive && years >= canDrink){
		document.write(" You can drink and drive<br>");
	} else if (years >= canDrive && years < canDrink){
		document.write(" You can drive, but not drink<br>");
	} else {
		document.write(" You can't drink and can't drive<br>");
	}
}

age(15);
age(25);*/



/*for (var i = 1; i <= 12; i++){
	document.write("9 x " + i + " = " + 9*i)
	document.write('<br>')
}*/



/*var myFavoriteFoods = ["pizza", "tacos", "chinese", "burgers", "brisket", "sushi", "feijoada"];
document.write(myFavoriteFoods[2]);*/



/*var myFavoriteFoods = ['pizza ', 'tacos ', 'chinese ', 'burgers ',
	'brisket ', 'sushi ', 'feijoada '];

for (var i = 0; i < myFavoriteFoods.length; i++) {
	document.write(myFavoriteFoods[i]);
}*/



/*var recipe = {
	recipeTitle: "Caipirinha"
	servings: 1,
	directions: 'Mix everything and drink it',
	ingredients: ['cachaca', 'lime']
}

for (var i = 0; i < recipe.ingredients.length; i++){
	console.log("ingredient " + i + " = " + recipe.ingredients[i]);
}*/



/*var recipe = {
	recipeTitle: "Caipirinha",
	servings: 1,
	directions: 'Mix everything and drink it',
	ingredients: ['cachaca', 'lime'],
	letsCook: function() {
		console.log('I\'m hungry! Let\'s cook');
	}
};
recipe.letsCook();*/