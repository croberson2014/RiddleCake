<html> 
<head>
<title>
RiddleCake
</title>
<style> 
body{
	font-family : 'AR HERMANN';
}
#pagetitle{
position: absolute;
width: 400px; 
margin-left: 100px;
	font-size : 50px; 
	color: pink; 
}
#cakescreen1{
	width: 200px; 
	height: 200px; 
	position : absolute; 
	left: 500px; 
	top : 350px; 
}
#calloutscreen1{
	width: 500px; 
	height: 300px; 
	position : absolute; 
	left: 600px; 
	top : 60px; 
	z-index: 0; 
}
#callouttext1{
	position : absolute; 
	width: 400px; 
	height: 200px; 
	left: 665px; 
	top : 150px; 
	z-index: 1; 
	color : white;
}
</style> 
<script src='lib/jquery-1.11.3.js'></script>
<script src='lib/ajax_functions.js'></script> 
</head>
<body> 
<script type='text/javascript'></script>
<h1 id='pagetitle'>Riddle Cake</h1>


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
var cakescreen1_counter = 0; var calloutscreen1_counter = 0; var callouttext1_counter = 0; 
$.post('system/engine/resolution_engine.php', 'q=getSequences', processResponse); 

function processResponse(data){
	//alert(data);
	var process = jQuery.parseJSON(data);
	//alert(process);
	//alert(process.sequence[1]);
	//alert(process.message[2]);
	//$('#cakescreen1').attr('src', process.sequence[4]);
	setInterval(updateCake, 100, 1, process.sequence, process.message); 
}

function updateCake(screen, frames, callouts){
	if(screen == 1){
	$('#cakescreen1').attr('src', frames[cakescreen1_counter]); 
	cakescreen1_counter++; 
	if(calloutscreen1_counter == 1){
		$('#callouttext1').html('<b>'+callouts[callouttext1_counter]+'</b>'); 
	}
	callouttext1_counter++; 
	calloutscreen1_counter++; 
	if(cakescreen1_counter > 4){
		cakescreen1_counter = 0; 
		}
	if(calloutscreen1_counter > 100){
		calloutscreen1_counter = 0; 
		}
	}
	if(callouttext1_counter > 3){
		callouttext1_counter = 0; 
	}
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
