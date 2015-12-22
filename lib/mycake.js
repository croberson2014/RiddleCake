var currentExchange = "default"; var currentContext = ""; var currentConfig = ""; 
var loadingAnimations[]; 

function processContext(data){
	//alert(data);
	var process = jQuery.parseJSON(data);
	
	setInterval(demoCake, 100, 1, process.sequence, process.message); 
	//for each screen, process the slides for that screen, wait to be synced, update the next round
}

function setStage(config){
	//use the class to determine what type of element it is	
	
	//if the element does not exist then create it, this can be determined by the id
	//multiple elements with the exact same features are actually different elements because of the configuration id
	return false; 
}

function updateStage(config){
	
	return false; 
}

function clearStage(){
	return false; 
}

function stageIsSet(){
	return false; 
}

function getExchange(context){
	
	return "0";
}

function getContext(){
	//send a post to the config.php, | get the user's login status, get the progress object
	var a = getProgress(); 
return "0"; 
}

function getProgress(){
	
	return "0"; 
}

function isReadyState(){
	//check to see if the stage has been set through configuration
	
	//check to see if the context has been set 
	
	//check to see if the exchange has been set 
	
	return false; 
}

1 function upChoice(number, type){ 
2   //call the PHP script for the particular choice 
3 } 
4 
 
5 function downChoice(number, type){ 
6   //call the PHP script for the particular choice with a post 
7   //the number is the integer representation of the sentiment or usage  
8   //the type is either sentiment or usage at the moment 
9 } 


function play(){
	
	
	//this entire method is a continuous interval loop
	
	//parse the text of the current exchange sequence
		//the first sequence number's text will have a configuration request, animation requests, etc. 
		//get only the text that can be displayed in the current callout screen(s) 
			//only whole words
		//display the text (or blank space waiting for sync) 
	
	//parse the process code, if any
	//for each letter, perform operations, some letters may be accompanied by integers
	//x ends a 'statement', example 'c5xa20' means, get configuration with the ID '5', stop, then get the animations with ID 20 
	//possible switch to an architecture where the letters are processed first, then the numbers
	//ex. CXA-5-20 would mean the same thing
	switch(codeletter){
		case 's' : break; //sync | wait for other sequence to finish
		case 'a' : break; //animations 
		case 'u' : break; //user input 
			//store the input in a variable 
			//if the process is forked afterward, the following integer(s) as a separated by a 'fork symbol' will 
			//determine further processing, and would need those sequence nos. fetched
		case 'c' : break; //config change, fetch the one at the number directly after
		case 'x' : break; //go to the next letter, a number was read 
	}
	
}
