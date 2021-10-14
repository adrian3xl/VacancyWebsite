<?php 
    require 'vendor/autoload.php';

    class SendEmail{

        public static function SendMail($to,$subject,$content){
            $key = NuLL; //set key to null due to sendgrid notif

            $ema = new \SendGrid\Mail\Mail();
            
            $ema->setFrom("adrian.hakeem@gmail.com", "Adrian Bailey");
            $ema->setSubject($subject);
            $ema->addTo($to);
            $ema->addContent("text/plain", $content);
           

            $sendgrid = new \SendGrid($key);

            try{
                $response = $sendgrid->send($ema);
                return $response;
            }catch(Exception $e){
                echo 'Email exception Caught : '. $e->getMessage() ."\n";
                return false;
            }
        }
    }
?>