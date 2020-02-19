<?php

namespace Project\Controller;

use Twig\Environment;
use Project\Model;



class BackController
{

     protected $twig = null;

    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }


        public function contact()
    {

        $to      = 'celi.caurier@gmail.com';
        $subject = htmlspecialchars($_POST['sujet']);
        $corpsMail = htmlspecialchars($_POST['message']);
        $headers = array(
            'From' => 'contactportfolio.fr',
            'Reply-To' => htmlspecialchars($_POST['mail']),
            'X-Mailer' => 'PHP/' . phpversion()
        );

       mail($to, $subject, $corpsMail, $headers);


            $message_ok = 'Message bien envoyé ! ';
            return $this->twig->render('contact.twig', array(
                'message' => $message_ok
            ));

        }


/*SUR LE SERVEUR


        $name       = @trim(stripslashes($_POST['nom']));
        $fromBis    = @trim(stripslashes($_POST['mail']));
        $from       = 'contact@gbaf.fr';
        $subject    = @trim(stripslashes($_POST['sujet']));
        $corps      = @trim(stripslashes($_POST['message']));
        $to         = 'celine@izycom-communication.fr';


        $headers  = "";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
        $headers .= "From: ContactGBAF <{$from}>\r\n";
        $headers .= "Reply-To: <{$fromBis}>\r\n";
        $headers .= "Subject: {$subject}\r\n";
        $headers .= "X-Mailer: PHP/".phpversion()."\r\n";

        //mail($to, $subject, $corps, $headers);

    echo($to);
    echo("<br>");
     echo($subject);
    echo("<br>");
  echo($corps);
    echo("<br>");
 echo($headers);

  echo($fromBis);

*/




}