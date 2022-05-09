<?php  
 
if(isset($_POST['submit'])) {
 $mailto = "manyajordi@gmail.com";  //My email address
 //getting customer data
 $primerNom = $_POST['primerNom']; //getting customer name
 $cognom = $_POST['cognom'];
 $correu = $_POST['correu']; //getting customer email
 $motiu = $_POST['motiu']; //getting customer Phome number
 $missatge = $_POST['missatge']; //getting subject line from client
 $subject2 = "Confirmation: Message was submitted successfully | HMA WebDesign"; // For customer confirmation
 
 //Email body I will receive
 $message = "Cleint Name: " . $primerNom . "\n"
 . "Phone Number: " . $correu . "\n\n"
 . "Client Message: " . "\n" . $_POST['missatge'];
 
 //Message for client confirmation
 $message2 = "Dear" . $primerNom . "\n"
 . "Thank you for contacting us. We will get back to you shortly!" . "\n\n"
 . "You submitted the following message: " . "\n" . $_POST['missatge'] . "\n\n"
 . "Regards," . "\n" . "- HMA WebDesign";
 
 //Email headers
 $headers = "From: " . $correu; // Client email, I will receive
 $headers2 = "From: " . $mailto; // This will receive client
 
 //PHP mailer function
 
  $result1 = mail($mailto, $motiu, $message, $headers); // This email sent to My address
  $result2 = mail($correu, $subject2, $message2, $headers2); //This confirmation email to client
 
  //Checking if Mails sent successfully
 
  if ($result1 && $result2) {
    $success = "Your Message was sent Successfully!";
  } else {
    $failed = "Sorry! Message was not sent, Try again Later.";
  }
 
}
 
?>