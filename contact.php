<?php
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$message = $_REQUEST['message'];
//check input fields
if(empty($name) || empty($email) || empty($message)){
    echo "Please fill all the fields";
}
else{
    mail("businessdev@techunting.net", "Tech Hunting message", $message, "From: $name < $email>");
    echo "<script type='text/javascript'>alert('your message sent successfully');
    window.history.back();
    </script>";
}

?>