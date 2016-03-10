<?php include("./config/config.php");

if(isset($_SESSION['submit'])){
    $to = "greyaragami@outlook.com";
    $from = $_SESSION['email'];
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2);
    echo "Mail Sent. Thank you " . $first_name . ", for communicating with us.";
    }
?>

<head>

<link href="./css/style2.css" rel="stylesheet" type="text/css" />
</head>
<div class="w-form form-wrapper squeezed">
<!-- Form met gewoon een textarea, de andere informatie word automatisch ingevuld adhv. session variabelen -->
<form action="index.php" method="post">
<br><textarea rows="5" class="w-input form-field" name="message" placeholder="Write your message here and click on submit to send us your message." cols="30"></textarea><br>
<input type="submit" class="w-button button full-width" name="submit" value="Submit">
</form>
</div>