<?php
//===================================//
// TidyBB Project                   //
//-----------------------------------//
// Website: https://www.tidybb.co.uk  //
// Email: info@tidynode.co.uk           //
// Build Series: 1.1                 //
//===================================//

/*
 * Mail Library of TidyBB
 */
if (!defined('BASEPATH')) {
    die();
}

class Library_Mail
{

    private $smtp = array();
    private $email_type = 1;
    private $client, $mail;
    public $error;

    private $to, $from, $message, $subject;

    public function __construct()
    {
        global $LAYER;
        if ($LAYER->data['mail_type'] == "1") {
            //Server's Email Server
            $this->email_type = 1;
            if (BASEPATH == "Staff") {
                require_once(PATH_A . CLA . 'mail.php');
            } else {
                require_once('applications/' . CLA . 'mail.php');
            }
            $this->client = new SimpleMail();
        }
    }

    public function from($string)
    {
        $this->from = $string;
        return $this;
    }

    public function to($string)
    {
        $this->to = $string;
        return $this;
    }

    public function subject($string)
    {
        $this->subject = $string;
        return $this;
    }

    public function body($string)
    {
        global $LAYER;
        if ($this->email_type == "1") {
            $this->message = $string;
        } else {
            /*
             * Additions made to work with TidyBB
             * Added 1.3.
             */
            $template = file_get_contents('applications/commands/mail/default.php');
            $template = str_replace(
                array(
                    '%site_name%',
                    '%site_url%',
                    '%content%'
                ),
                array(
                    $LAYER->data['site_name'],
                    SITE_URL,
                    $string
                ),
                $template
            );
            $this->message = str_replace("\n.", "\n..", $template);
        }
        return $this;
    }

    public function send()
    {
        global $LAYER;
        if ($this->email_type == "1") {
            $from = ($this->from == $LAYER->data['site_email']) ? $LAYER->data['site_name'] : $this->from;
            $send = $this->client->setTo($this->to, $this->to)
                ->setFrom($this->from, $from)
                ->setSubject($this->subject)
                ->addGenericHeader('X-Mailer', 'PHP/' . phpversion())
                ->addGenericHeader('Content-Type', 'text/html; charset="utf-8"')
                ->setMessage($this->message)
                ->send();
            if ($send) {
                return true;
            } else {
                return false;
            }
        } else {
            $this->mail->From = $this->from;
            $this->mail->FromName = ($this->from == $LAYER->data['site_email']) ? $LAYER->data['site_name'] : $this->from;
            $this->mail->addAddress($this->to, $this->to);
            $this->mail->isHTML(true);
            $this->mail->Subject = $this->subject;
            $this->mail->Body = $this->message;
            if (!$this->mail->send()) {
                $this->error = $this->mail->ErrorInfo;
                return false;
            } else {
                return true;
            }
        }
    }

}

?>