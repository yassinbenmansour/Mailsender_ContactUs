<?php

$nom = $_POST['nom'];
$mail = $_POST['mail'];
$tel = $_POST['tel'];
$web = $_POST['web'];
$msg = $_POST['msg'];

  if(!empty($mail) && !empty($msg)){
    
      $to = "benyassine212@gmail.com"; //enter that email address where you want to receive all messages
      $subj = "From: $nom <$mail>";
      $body = "Name: $nom\nEmail: $mail\nPhone: $tel\nWebsite: $web\n\nMessage:\n$msg\n\nRegards,\n$nom";
      $sender = "From: $mail";

      mail($to, $subj, $body, $sender);
      echo "Your message has been sent";
      header('Location:./Tnx.php');
      
     
  }
  
?>