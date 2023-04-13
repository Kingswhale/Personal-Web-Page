<?php
 $name= $_REQUEST['name'];
 $email = $_REQUEST['email'];
 $message = $_REQUEST['message'];
$subject = "Message from Personal Website Contact form !";

$to ="segunoruame@itedgenews.com";  // change receiving email id when neccessary 
 
$content = "Name : ". $name. "\r\nContact email : ". $email. "\r\n \r\nMessage : \r\n \r\n".$message ;
 
if ( empty($name)|| empty($email)|| empty($message))
{
echo"<script type='text/javascript'>alert('Please fill all information correctly');
    window.history.go(-1);
    </script>";
}
else 
{ mail($to,$subject,$content);

    echo"<script type='text/javascript'>alert('Your message sent succesfully ');
    window.history.go(-1);
    </script>";
    die(header("Location: ./"));

}

?>