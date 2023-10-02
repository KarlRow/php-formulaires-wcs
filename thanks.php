<?php 

$name = $_POST['user_name'];
$surname = $_POST['user_surname'];
$phone = $_POST['user_phone'];
$subjectSelect = $_POST['subject'];
$mail = $_POST['user_mail'];
$message = $_POST['user_message'];

    if(isset(
        $_POST['user_name']) && 
        $_POST['user_surname']  && 
        $_POST['user_phone'] && 
        $_POST['subject'] && 
        $_POST['user_mail'] && 
        $_POST['user_message']) 
{
    echo "Bonjour Mr " . $surname . ' ' . $name . ' ' . " et merci de nous avoir contacté à propos de " . $subjectSelect . ". ";
    echo "Un de nos conseillers vous contactera soit à l’adresse " . $mail . " ou par téléphone au " . $phone . " dans les plus brefs délais pour traiter votre demande : ";
    echo $message;
}
?>