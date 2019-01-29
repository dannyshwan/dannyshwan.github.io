<?php

    if(isset($_POST['submit'])){

        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $header = "From ".$email." (Sent from dannyshwan.me)";

        mail("dannyshwan@gmail.com",$subject,$message,$header);
        header( 'Location: http://dannyshwan.me/index.html' ) ;
    }
?>