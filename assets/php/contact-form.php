<?php 
if(isset($_POST['submit'])){
    $to = "anayeli.malvaez@gmail.com";
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['name'];
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    }
?>
