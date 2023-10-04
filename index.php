<?php

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message =$_POST['message'];
    $to = "jovineakinyi99@gmail.com";

    $headers = "from : " .$name. "/r/n";
    $txt = "You have received an email from ".$name ."/r/nEmail:".$email."/r/n
    Message = ".$message;

    

}
if($email!= NULL){
    mail($to, $subject, $headers, $message);
}
header('location:contact.php');   



?>


                                                            