<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<?php


$to = 'pranav@cybaze.com';
 $name=$_POST['name'];
 $email=$_POST['email'];
 $subject=$_POST['subject'];
 $message=$_POST['message'];


//$subject = 'racinteriors Contact us';

$headers = "From: " . strip_tags($email) . "\r\n";
$headers .= "Reply-To: ". strip_tags($to) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

$message .= '<p><strong>name:'.$name.'<br>email:'.$email.'<br>message:'.$message.'</strong> </p>';


$mail=mail($to, $subject, $message, $headers);
if($mail)
{
    ?>

    <script type="text/javascript">
        $(document).ready(function()
        {
            alert("mail has been send succesfully")
            window.location.href="http://racinteriors.com/contact-me/index.php";
        })

    </script>
<?php
}
else
{
    echo "mail not send" ;
}


?>
