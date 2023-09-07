<?php
$to       = 'hammari123@gmail.com';
$subject  = 'New Product is in the house!!';
$msg="Hi! Good news! New orders has been delivered, we hope you like them visit www.obladi.com for more informations. Yours Obladi Team";
$headers  = 'From: Obladi.coffee@gmail.com' . "\r\n" .
            'MIME-Version: 1.0' . "\r\n" .
            'Content-type: text/html; charset=utf-8';
if(mail($to, $subject, $msg, $headers))
    echo "Email sent";
else
    echo "Email sending failed";
//mail("mohamed.khammeri@esprit.tn","New Product in the house!!",$msg);
?>
