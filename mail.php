<?php
    $errors = '';
    $myemail ='bhoomiborewellsblr@gmail.com';//<-----Put Your email address here.
    if(empty($_POST['username'])  || 
       empty($_POST['email']) || 
       empty($_POST['message'])||
       empty($_POST['mobile']))
    {
        $errors .= "\n Error: all fields are required";
    }
     
    $name = $_POST['name']; 
    $email_address = $_POST['email']; 
     $mobile = $_POST['mobile']; 
    $message = $_POST['message']; 
     
    if (!preg_match(
    "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
    $email_address))
    {
        $errors .= "\n Error: Invalid email address";
    }
    if( empty($errors))
     
    {
     
    $to = $myemail;
     
    $email_subject = "Enquiry from:$name";
     
    $email_body = "Enquiry  from the website ".
     
    " Here are the details:\n Name: $name \n ".
     
    "Email: $email_address\n Message \n $message";
     
    $headers = "From: $myemail\n";
     
    mail($to,$email_subject,$email_body,$mobile,$headers);
     
    //redirect to the 'thank you' page
     
    header('Location: contact-form-thank-you.php');
     
    }
?>