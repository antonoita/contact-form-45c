
if(isset($_POST ['submit'])){
$name= $_POST['name'];
$visitor_email= $_POST['email'];
$message= $_POST['message'];

$email_from= "kuileyshi3000k@gmail.com";
$email_subject= "NewFormSubmissions";

$email_body= "username: name. \n".
"userEmail: $visitor_email. \n".
"userMessage: $message. \n";

$to= "sales@kuileyshikenya.com";
$headers= "from: $email_from \r\n";
$headers= "reply_to: $visitor_email \r\n";
mail ($to, $email_subject, $email_body, $headers);
header ("location:html-for-contact-form45c.html");
}
