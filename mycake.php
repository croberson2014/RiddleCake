<html> 
<head>
<title>
<img src='cakeicon.bmp'></img>
</title>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
</head>
<body> 
<script type='text/javascript'></script>
<h1>Riddle Cake</h1>


<?php
//get the context
session.start(); 

//get the security settings 
//change the context when the user has logged in 
//the cake will need to determine progress in the relationship 

//actually they are context codes with very specific functionality
$c = getContext(); 
processContext($c); 
//this method is not actually the name, and it may be a part of either 
//a) the configuration, like Configuration.processContext() or 
//b) an entirely different global


/*switch(context){ DON'T DO THIS, THERE IS NO REASON TO LOOK AT THIS SWITCHBOARD ON MY EFFING HOME PAGE
  //context = GUI configuration | relationship progress | previous session activity | more...
  
  case "D%v9" : getContext("05A79V5A");
  case 'browse' : getContext("browse"); break;
  case 'introduction' : getContext("introduction"); break; 
  case 'game' : getContext("game"); break; 
  case 'chat' : getContext("chat"); break; 
  case 'dev' : getContext("dev"); break; 
  default : getContext("browse"); break; 
}*/


//each context has a function and parameters that have to be met before it reverts to the default
echo "<div id='cakecontainer1' class='cakecontainer'>"; 
echo "<img id='cakescreen1' class='cakescreen'></img>"; 

?>
</div>
<div id='menu'><ul><h2></h2></ul></div>
<script type='text/javascript'>
  //send an AJAX request to get the sequences, text, and any updates to configuration
  //the text and sequences can be combined into an object so that their display is coordinated
  //configuration updates will change the css of the page 
  //This script runs every time the page loads and will continue to receive context updates 
  // from indicators in the scripts/sequences 
  
</script>
</body> 
</html> 
