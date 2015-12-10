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

<div id='center_panel' class='panel'>

</div>

<div id='bottom_panel' class='panel'>
	<img alt='Settings icon here.'></img>
	<div id='menu'>
		<ul>
			<li><h2></h2></li>
		</ul>
	</div>
</div>

<script type='text/javascript'>
var num_screens = 1; var num_callouts = 1; var display[]; var syncStep; 
var cakeScreenCounter[]; var calloutScreenCounter[]; var calloutTextCounter[]; 
$.post('system/config.php', 'q=getContext');

function processContext(data){
	//alert(data);
	var process = jQuery.parseJSON(data);
	
	setInterval(demoCake, 100, 1, process.sequence, process.message); 
	//for each screen, process the slides for that screen, wait to be synced, update the next round
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
