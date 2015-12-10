<?php 
  include 'uiconfig.php';
  
  /*    
  version : 1.0 
  description : This class will allow manipulation of configuration content via an OO class. The current plan is 
  to have a javascript 'Settings' tab which will use ajax to manipulate server XML (or other format). Each settings 
  will trigger the appropriate PHP script. Only specific parameters can be passed into the configuration files, obv 
  because they need to read specific character sequences or strings to function! Some settings will be configured by system 
  events as well, esp. to avoid failures in execution. 
  
  
  Dynamic configurations are included, such as the current display pattern (which is also stored in the session). Requests will be 
  accepted by this class for certain information otherwise unavailable to javascript, but not including animations, speech, et
  */
@session_start(); 
@$q = htmlspecialchars(strip_tags($_POST['q'])); 
  
  switch($q){
  case 'getContext'  : getContext(); break; 
  case 'updateContext' : updateContext($r, $s, $t); 
  
  }
  
  function getContext(){
    
    if($_SESSION['username'] == null){
      $_SESSION['mode'] == 'GEN';
    }
    
    if(!($_SESSION['username'] == null)){
      //get the user's progress and mode 
      //get the uiconfig associated with the mode 
      // if these don't exist return 'INTRO'
    }
    
  }
?>
