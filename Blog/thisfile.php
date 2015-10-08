<?php
    $file = 'messages.json';
    $messages = json_decode(file_get_contents($file),true);
    if(empty($messages)){
        $messages = array();
    }

    if(isset($_POST['username'])&&isset($_POST['mssg'])) {  //save settings
        $messages[] = $_POST; //remember to sanitize
        file_put_contents($file,json_encode($messages));
        exit;
    }elseif(isset($_POST['read'])&&$_POST['read']=='messages'){
        echo json_encode($messages);
        exit;
    }

?>