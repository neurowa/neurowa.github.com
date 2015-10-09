<?php
    $messages = json_decode(file_get_contents('messages.json'),true);
	
    if(isset($_POST['username'])&&isset($_POST['mssg'])) {  //save settings
        $message = new StdClass();
		$message->username = htmlentities($_POST['username']);
		$message->mssg = htmlentities($_POST['mssg']);
		
		$messages[] = $message; //remember to sanitize
		$fp = fopen('messages.json','w+');
		fwrite($fp, json_encode($messages));
		fclose($fp));
		
        //file_put_contents($file,json_encode($messages),FILE_APPEND);
        exit;
		}elseif(isset($_POST['read'])&&$_POST['read']=='messages'){
		   echo json_encode($messages);
		   exit;
		}

?>