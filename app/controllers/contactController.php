<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'app/phpmailer/Exception.php';
    require 'app/phpmailer/PHPMailer.php';
    require 'app/phpmailer/SMTP.php';

    class ContactController
    {
        public function viewAction()
        {
            require_once 'app/models/Contact.php';
            $contactModel = new Contact();

            if(!array_key_exists ( 'msg' , $_POST ))
            {
                $contact = $contactModel->getContact();
                require_once 'app/views/contact/index.php';
            }
            else
            {
                $mail = new PHPMailer;
                $mail->isSMTP();
                $mail->SMTPDebug = 0;
                $mail->Debugoutput = 'html';
                $mail->Host = 'smtp.mail.com';
                $mail->Port = 587;
                $mail->SMTPSecure = 'tls';
                $mail->SMTPAuth = true;
                $mail->Username = "jfblog@mail.com";
                $mail->Password = "testjfjf";
                $mail->setFrom('jfblog@mail.com', 'Jean Forteroche');
                $mail->addReplyTo('jfblog@mail.com', 'Jean Forteroche');

                $mail->addAddress('hendrix.bcz@gmail.com', 'Hendrix Bouchez');

                $mail->Subject = $_POST['subject'];

                $mail->Body = $_POST['msg'];

                $mail->IsHTML(true);

                if(!$mail->send())
                {
                    require_once 'app/views/contact/mailerror.php';
                } else
                {
                    require_once 'app/views/contact/mailsent.php';
                }

            }
            
        }
    }