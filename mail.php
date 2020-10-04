<?php
$destinataire = 'pyro.trv@outlook.fr';
$objet = isset($_POST['subject']) ? $_POST['subject'] : '';
$message = isset($_POST['message']) ? $_POST['message'] : '';
$headers  = 'MIME-Version: 1.0' . "\n"; // Version MIME
$headers .= 'Content-type: text/html; charset=ISO-8859-1'."\n"; // l'en-tete Content-type pour le format HTML  
if (mail($destinataire, $objet, $message, $headers)) // Envoi du message
{
    ?>
 
		<script languag="javascript" >alert("Votre message a bien été envoyé ");</script>
		<meta http-equiv="refresh" content="0;URL=https://lilianb.000webhostapp.com/">
 
    <?php
}
else
{
    ?>
 
		<script languag="javascript" >alert("Votre message n'a pas pu être envoyé");</script>
		<meta http-equiv="refresh" content="0;URL=https://lilianb.000webhostapp.com/">
 
    <?php
}

?>