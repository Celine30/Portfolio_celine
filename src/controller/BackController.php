<?php

namespace Project\Controller;

use Twig\Environment;
use Project\Model;



class BackController
{

        public function contact()
    {

        $message='* message envoyé *';

     /*EN LOCAL

        $to      = 'celine@izycom-communication.fr';
        $corpsMail = htmlspecialchars($_POST['message']);
        $headers = array(
            'From' => 'contactGBAF.fr',
            'Reply-To' => htmlspecialchars($_POST['mail']),
            'X-Mailer' => 'PHP/' . phpversion()
        );

       mail($to, $corpsMail, $headers);

*/


    /*SUR LE SERVEUR  */


        $name       = @trim(stripslashes($_POST['nom']));
        $fromBis    = @trim(stripslashes($_POST['mail']));
        $from       = 'contact@gbaf.fr';
        $subject    = @trim(stripslashes($_POST['demande']));
        $corps      = @trim(stripslashes($_POST['contact']));
        $to         = 'celi.caurier@gmail.com';


        $headers  = "";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
        $headers .= "From: ContactGBAF <{$from}>\r\n";
        $headers .= "Reply-To: <{$fromBis}>\r\n";
        $headers .= "Subject: {$subject}\r\n";
        $headers .= "X-Mailer: PHP/".phpversion()."\r\n";

        mail($to, $subject, $corps, $headers);





  //      return $this->twig->render('contact.twig', array(
  //          'message'=> $message
//        ));


    }

}