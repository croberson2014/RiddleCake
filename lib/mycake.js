var currentExchange = "default"; var currentContext = "";

function processContext(data){
	//alert(data);
	var process = jQuery.parseJSON(data);
	
	setInterval(demoCake, 100, 1, process.sequence, process.message); 
	//for each screen, process the slides for that screen, wait to be synced, update the next round
}

function setStage(element){
	//use the class to determine what type of element it is	
	
	//if the element does not exist then create it, this can be determined by the id
	//multiple elements with the exact same features are actually different elements because of the configuration id
	return false; 
}

function updateStage(element){
	
	return false; 
}

function clearStage(){
	return false; 
}

function getExchange(context){
	
	return "0";
}

function getContext(){
	
return "0"; 
}

function play(){
	//check to see if the stage has been set through configuration
	
	//check to see if the context has been set 
	
	//check to see if the exchange has been set 
	
	//parse the text of the current exchange sequence 
		//get only the text that can be displayed in the current callout screen(s) 
			//only whole words
		//display the text (or black space waiting for sync) 
	
	//parse the process code, if any
	//for each letter, perform operations, some letters may be accompanied by integers
	//x ends a 'statement', example 'c5xa20' means, get configuration with the ID '5', stop, then get the animations with ID 20 
	switch(codeletter){
		case 's' : break; //sync | wait for other sequence to finish
		case 'a' : break; //animations 
		case 'u' : break; //user input 
		case 'c' : break; //config change, fetch the one at the number directly after
		case 'x' : break; //go to the next letter, a number was read 
	}
	
}
