function processContext(data){
	//alert(data);
	var process = jQuery.parseJSON(data);
	
	setInterval(demoCake, 100, 1, process.sequence, process.message); 
	//for each screen, process the slides for that screen, wait to be synced, update the next round
}
