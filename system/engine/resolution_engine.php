<?php 
//this could be an information expert, should be easy to decouple of necessary
// sentiment -> recall -> communication -> animation 

//should receive a request from the javascript, and will be responsible for sending back an http response for the moment. Could potentially pass additional requests to different scripts as well.

//parse the request, it can have content to be sent, send that into the animation engine method and then 
//replace the xml with the appropriate image files. 
	
//throw a post retrieval, get the function that you want to occur based on send(content) 
	
		@$q = htmlspecialchars(strip_tags($_POST['q'])); 
		//echo "Made it to the script.";
		//echo "<p>Made it to the resolution engine.</p>";
		
		if($q == 'getSequences'){getSequences();}
		
		function getSequences(){
			
			$arr = array('sequence'=>array('image/cake/defaultcake1.png', 
									'image/cake/defaultcake2.png', 
									'image/cake/defaultcake3.png',
									'image/cake/defaultcake4.png',
									'image/cake/defaultcake5.png'
			
			), 
			'message'=>array('Is someone there!?',
						'Im fresh out of the oven! Wait, who are you?',	
						'Its so bright in here. Please... a little darker... I have a hangover...',
						'Shake your pom pom, shake your pom pom, shake your pom poooooom.'
				) 
			);
			
			echo json_encode($arr); 
		}
		
		
?> 
