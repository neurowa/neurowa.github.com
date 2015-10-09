<?php
	$file = 'messages.json';
	$messages = json_decode(file_get_contents($file),true);
    if(isset($_POST['username'])&&isset($_POST['mssg'])) {  //save settings
        $messages[] = $_POST; //remember to sanitize
        file_put_contents($file,json_encode($messages));
        exit;
?>
