<html> 
<head>
<title>
RiddleCake
</title>
<style> 

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
