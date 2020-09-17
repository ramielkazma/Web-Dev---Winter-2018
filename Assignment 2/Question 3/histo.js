// ------------------------------------------------------------------------------
// Assignment 2
// Written by: Rami El-Kazma
// For SOEN 287 Section S – Winter 2018
// ------------------------------------------------------------------------------

//take the input of the user and match the letters of the word to the string
function parseInput()
{
	//create arrays of the letters in the string and word
	var string = document.getElementById("str").value.split("");
	var word = document.getElementById("wd").value.split("");

	var x=[];								//initialize an array to will hold matched letters

	for(var i=0;i<string.length;i++)     	//checks for only alphabets in word
	{
		if(word.indexOf(string[i])!=-1)
			x.push(string[i]);				//create an array with all the matched letters
	}

	alert("Matched letters: " + x);

	plotHisto(x);
}

//pass the data to be graphed as well as the layout of the graph
function plotHisto(x)
{
	var histElements = {x: x, type: 'histogram', marker: {color: 'orange',},};

	var layout = {bargap: 0.05, bargroupgap: 0.5, barmode: "overlay", title: "Histogram",
				  xaxis: {title: "Values",}, yaxis: {title: "Count"},};
				  
	var data = [histElements];

	Plotly.newPlot("graph", data, layout);	//plot the graph in the div "graph"
}