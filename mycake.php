<html> 
<head>
<title>
<img src='cakeicon.bmp'></img>
</title>
<style> 
#cakescreen1{
	width: 200px; 
	height: 200px; 
}
#calloutscreen1{

}
#callouttext1{

}
</style> 
<script src='lib/jquery-1.11.3.js'></script>
<script src='lib/ajax_functions.js'></script> 
</head>
<body> 
<script type='text/javascript'></script>
<h1>Riddle Cake</h1>


<?php   
//include('system/ncs.php');
//get the current context from config.php, update the session variable
session_start(); 

//each context has a function and parameters that have to be met before it reverts to the default
echo "<div id='cakecontainer1' class='cakecontainer'>"; 
echo "<img id='calloutscreen1' class='calloutscreen' src='image/comm/callout.png'></img>"; 
echo "<p id ='callouttext1' class='callouttext'></p>"; 
echo "<img id='cakescreen1' class='cakescreen' src='image/cake/designcake.png'></img>
<div>";

?>
<div id='menu'><ul><h2></h2></ul></div>
<script type='text/javascript'>

var global_photo_counter = 0; var global_message_counter = 0; 

$.post('system/engine/resolution_engine.php', 'q=getSequences', processResponse); 

function processResponse(data){
	var loop = jQuery.parseJSON(data);

	startAnimation(sequence.frame, callout.message);
}
//sequence.frame[i]
function updateCakeScreen1(photo){
	$('#cakescreen1').attr('src', photo[global_photo+counter]);
	global_photo_counter++; 
	if(global_photo_counter > 5){global_photo_counter = 0;}
}

function updateMessage(content){
	$('#callouttext1').text(content);
}

function startAnimation(photos, messages){
	var s = 0; 
	var i = 0; 
	
	window.setInterval(updateCakeScreen1(sequence.frame) ,1000);
	
}

 
 
 
 /*
 $.post('automate/product_functions.php', 'q=listCategories&r=1', processResponse); 
 processRsponse(); 
 var process = jQuery.parseJSON(data);
 process.access.
 
 */
</script>
</body> 
</html> 
