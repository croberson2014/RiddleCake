<?php 
//this could be an information expert, should be easy to decouple of necessary
// sentiment -> recall -> communication -> animation 

//should receive a request from the javascript, and will be responsible for sending back an http response for the moment. Could potentially pass additional requests to different scripts as well.

//parse the request, it can have content to be sent, send that into the animation engine method and then 
//replace the xml with the appropriate image files. 
	
//throw a post retrieval, get the function that you want to occur based on send(content) 

@$q = htmlspecialchars(strip_tags($_POST['q']));

if($q == "getSequences"){getSequences(); }

function getSequences(){
	
	$arr = array('sequence'=>array('frame'=> 'image/cake/defaultcake1.png',
					'frame'=>'image/cake/defaultcake2.png',
					'frame'=>'image/cake/defaultcake3.png',
					'frame'=>'image/cake/defaultcake4.png',
					'frame'=>'image/cake/defaultcake5.png'
			), 
			'callout'=>'message'=>array('text'=>'Is someone there?!'
					'text'=>'Im fresh out of the oven and ready to talk about computers! I swear those concepts are related somehow...'
					'text'=>'Its so bright in here. Please... a little darker... I have a hangover...'
					'text'=>'Shake your pom pom, shake your pom pom, shake your pom pooooom.'
					), 
				'duration'=>array('length'=>3,
						'length'=>8, 
						'length', 7, 
						'length'=>6
				)
				
		);
		
		echo json_encode($arr);
}

		/*echo "<?xml version=\"1.0\" ?>
			<sequence>
			<frame>image/cake/defaultcake1.png</frame> 
			<frame>image/cake/defaultcake2.png</frame> 
			<frame>image/cake/defaultcake3.png</frame> 
			<frame>image/cake/defaultcake4.png</frame> 
			<frame>image/cake/defaultcake5.png</frame> 
			</sequence>
			<callout>
				<message id='five'>Is someone there?!</message> 
				<duration>3</duration>
			</callout> 
			<callout> 
			<message>I'm fresh out of the oven and ready to talk about computers! I swear those concepts are related somehow...</message>
			<duration>8</duration> 
			</callout>
			<callout> 
			<message>It's so bright in here. Please... a little darker... I have a hangover...</message>
			<duration>7</duration>
			</callout>
			<callout> 
				<message>Shake your pom pom, shake your pom pom, shake your pom pooooom.</message>
				<duration>6</duration>
			</callout>
			"; 

			*/
			
			
			/*
			@$q = htmlspecialchars(strip_tags($_POST['q'])); 
			$arr = array('selector'=>'#updateCategory',
					'content'=>array('id' => $product_id, 
								'column' => $column, 
								'value' => $value)
				); 
			*/
			//echo json_encode($arr); 
?> 
