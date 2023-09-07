<?php 
require 'PHPMailer-master/PHPMailerAutoload.php';
$mail = new PHPMailer();
$mail->IsSmtp();
$mail->SMTPAuth = true;
$mail->Debugoutput='html';
$mail->Host = "smtp.gmail.com";
$mail->Port = 25;
$mail->isHTML(true);
$mail->Username = "nermine.belarbi@esprit.tn"; //hedha l mail ili bcih tab3eth bih inty 
$mail->Password = "171JFT2022"; //mdp l mail mte3ik 
$mail->setFrom("nermine.belarbi@esprit.tn"); //nafss l mail mte3ik t3awdou 
$mail->Subject = "Livraison Obladi Coffee"; //sujet mta3 l mail mte3ik
$mail->Body= "Votre Livraison a été bien prise en compte";
$mail->AltBody ="Le livreur a été bien informé de votre livraison et vous allez la recevoir le plus tot possible"; //ikteb ili t7eb
$mail->AddAddress ="najiba.amri@esprit.tn; // lmail mta3 l 3abed ili bich tab3athlou 
$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);

//var_dump($mail);
if (!$mail->send()) 
	{ 
		 $mail->ErrorInfo;
	} 
	else
	{


    
        <script>
        Javascript:alert('Mail sent !');
        </script>}
       	?>
    
     