<?php 
    require 'vendor/autoload.php';

    class SendEmail{

        public static function SendMail($to,$subject,$content){
            $key = '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';

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