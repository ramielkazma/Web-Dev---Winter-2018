// ------------------------------------------------------------------------------
// Assignment 2
// Written by: Rami El-Kazma
// For SOEN 287 Section S – Winter 2018
// ------------------------------------------------------------------------------

function compute(){
var inputs = new Array(1);			//initialize an array to hold user input
var input = 0;						//current input
var even = 0;						//even number count
var odd = 0;						//odd number count

//prompt the user for numbers and loop for as many times as the user wishes
//if statement ends loop when user enters -1 to end the program
for(var i=0; input!=-1; i++)
{
	input = prompt("Enter a number. If you wish to end, enter \"-1\".");
	if(input!=-1)
	{
		inputs[i]=input;		//fill the array with user input
		if(input%2 == 0)		//even number has remainder 0
			even++;
		else odd++;
	}
}

//print the numbers that the user entered with the even/odd count
var div = document.getElementById("statsOut");
div.innerHTML = "<div>You have entered the below mentioned numbers:<br></div>";
for(var i=0; i<inputs.length; i++)
	div.innerHTML += "<div>" + inputs[i] + "</div>"
div.innerHTML += "<div>You have entered " + even + " even numbers and " + odd 
+ " odd numbers.</div>";
}