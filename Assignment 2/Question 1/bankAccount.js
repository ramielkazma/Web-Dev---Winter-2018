// ------------------------------------------------------------------------------
// Assignment 2
// Written by: Rami El-Kazma
// For SOEN 287 Section S – Winter 2018
// ------------------------------------------------------------------------------

var balance = 500; //starting balance

function validateAmount()
{
	//get the value of user input and check if it is a number
	var amount=document.getElementById("amt");
	if(isNaN(amount.value))
		alert("Please enter a numeric value");
	else withdrawAmount(amount.value);             	//amount is a number	
}

function withdrawAmount(x)
{
	if(!(Number.isInteger(x/20)))                  	//multiple of 20
		alert("Incorrect withdrawal amount")     
	if(x > (balance-0.5))                          	//$0.5 per transaction
		alert("Insufficient funds")
	else 
	{
		balance = balance-x;						//remove the user input amount
		balance = balance-0.5;						//remove transaction cost
		alert("Successful transaction! Current balance is: $" + balance);
	}
	
}