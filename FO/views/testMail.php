<?php
$to       = 'mcharekhidya@gmail.com';
$subject  = 'New Product is in the house!!';
$msg="Hi! Good news! New Artcle , we hope you like them visit www.obladi.com for more informations. Yours Obladi Team";
$headers  = 'From: hidaya.mcharek@esprit.tn' . "\r\n" .
            'MIME-Version: 1.0' . "\r\n" .
            'Content-type: text/html; charset=utf-8';
if(mail($to, $subject, $msg, $headers))
    echo "Email sent";
else
    echo "Email sending failed";
?>
