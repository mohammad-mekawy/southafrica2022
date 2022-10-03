<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// header("Access-Control-Allow-Origin: *");
// header("Access-Control-Allow-Methods: GET,POST");
// header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['hero'])){
    $name  = filter_var($_POST['name'],FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
    $phone = filter_var($_POST['phone'],FILTER_SANITIZE_NUMBER_INT);
    $message  = filter_var($_POST['message'],FILTER_SANITIZE_STRING);

    $formErrors = array();
	
    if(empty($name)){
        $formErrors[] = "Add You name please";
    }elseif(empty($phone)){
        $formErrors[] = "Add You phone please";
    }elseif(empty($email)){
        $formErrors[] = "Add You email please";
    }
    if(empty($formErrors)){
            $emails = array("i.owis@happenize.com","info@consultycs.com",  "gmarwadi@consultycs.com", "trishna@happenize.com", "desiree@happenize.com","production@happenize.com","javeed.ameen@consultycs.com");
			
			for($i=0;$i<count($emails);$i++){
				$mail = new PHPMailer;
				$mail->CharSet = 'UTF-8';
				$mail->SMTPDebug = 0;  
				$mail->isSMTP();                            // Set mailer to use SMTP
				$mail->Host = 'consultycs.com';             // Specify main and backup SMTP servers
				$mail->SMTPAuth = true;                     // Enable SMTP authentication
				$mail->Username = 'lp@consultycs.com';          // SMTP username
				$mail->Password = '(U*K]Ju=cill'; // SMTP password
				$mail->SMTPSecure = 'ssl';                            
				$mail->Port = 465;  
				$mail->isHTML(true);  // Set email format to HTML

				$mail->setFrom('lp@consultycs.com');
				$mail->addAddress($emails[$i]); 

				//$mail->isHTML(true);  // Set email format to HTML

               $bodyContent = '<h3 style="font-size:18px; margin-bottom:12px;">Name: '. $name .'</h3><br>';
               $bodyContent .= '<h3 style="font-size:18px; margin-bottom:12px;">Email: '. $email .'</h3><br>';
               $bodyContent .= '<h3 style="font-size:18px; margin-bottom:12px;">Phone: '. $phone .'</h3><br>';
               $bodyContent .= '<h3 style="font-size:18px; margin-bottom:12px;">Message: '. $message .'</h3><br>';

               $mail->Subject = 'Consultycs DMCC Dubai Lead';
               $mail->Body    = $bodyContent;
            //    $mail->send();
               if(!$mail->Send()) {
                    echo "Error while sending Email.";
                    var_dump($mail);
                } else {
                    // echo "Email sent successfully";
                    header("Location: thanks.html");
                    // exit;
                }
                
			}
    }
}
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['Appointment'])){
    $name  = filter_var($_POST['name'],FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
    $phone = filter_var($_POST['phone'],FILTER_SANITIZE_NUMBER_INT);
    $message  = filter_var($_POST['message'],FILTER_SANITIZE_STRING);

    $formErrors = array();
	
    if(empty($name)){
        $formErrors[] = "Add You name please";
    }elseif(empty($phone)){
        $formErrors[] = "Add You phone please";
    }elseif(empty($email)){
        $formErrors[] = "Add You email please";
    }
    if(empty($formErrors)){
            $emails = array("i.owis@happenize.com","info@consultycs.com",  "gmarwadi@consultycs.com", "trishna@happenize.com", "desiree@happenize.com","production@happenize.com","javeed.ameen@consultycs.com");
			
			for($i=0;$i<count($emails);$i++){
				$mail = new PHPMailer;
				$mail->CharSet = 'UTF-8';
				$mail->SMTPDebug = 0;  
				$mail->isSMTP();                            // Set mailer to use SMTP
				$mail->Host = 'consultycs.com';             // Specify main and backup SMTP servers
				$mail->SMTPAuth = true;                     // Enable SMTP authentication
				$mail->Username = 'lp@consultycs.com';          // SMTP username
				$mail->Password = '(U*K]Ju=cill'; // SMTP password
				$mail->SMTPSecure = 'ssl';                            
				$mail->Port = 465;  
				$mail->isHTML(true);  // Set email format to HTML

				$mail->setFrom('lp@consultycs.com');
				$mail->addAddress($emails[$i]); 

				//$mail->isHTML(true);  // Set email format to HTML

               $bodyContent = '<h3 style="font-size:18px; margin-bottom:12px;">Name: '. $name .'</h3><br>';
               $bodyContent .= '<h3 style="font-size:18px; margin-bottom:12px;">Email: '. $email .'</h3><br>';
               $bodyContent .= '<h3 style="font-size:18px; margin-bottom:12px;">Phone: '. $phone .'</h3><br>';
               $bodyContent .= '<h3 style="font-size:18px; margin-bottom:12px;">Message: '. $message .'</h3><br>';

               $mail->Subject = 'Consultycs DMCC Dubai Lead';
               $mail->Body    = $bodyContent;
            //    $mail->send();
               if(!$mail->Send()) {
                    echo "Error while sending Email.";
                    var_dump($mail);
                } else {
                    // echo "Email sent successfully";
                    header("Location: thanks-Appointment.html");
                    // exit;
                }
                
			}
    }
}
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['footer'])){
    $name  = filter_var($_POST['name'],FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
    $phone = filter_var($_POST['phone'],FILTER_SANITIZE_NUMBER_INT);

    $formErrors = array();
	
    if(empty($name)){
        $formErrors[] = "Add You name please";
    }elseif(empty($phone)){
        $formErrors[] = "Add You phone please";
    }elseif(empty($email)){
        $formErrors[] = "Add You email please";
    }
    if(empty($formErrors)){
            $emails = array("i.owis@happenize.com","info@consultycs.com",  "gmarwadi@consultycs.com", "trishna@happenize.com", "desiree@happenize.com","production@happenize.com","javeed.ameen@consultycs.com");
			
			for($i=0;$i<count($emails);$i++){
				$mail = new PHPMailer;
				$mail->CharSet = 'UTF-8';
				$mail->SMTPDebug = 0;  
				$mail->isSMTP();                            // Set mailer to use SMTP
				$mail->Host = 'consultycs.com';             // Specify main and backup SMTP servers
				$mail->SMTPAuth = true;                     // Enable SMTP authentication
				$mail->Username = 'lp@consultycs.com';          // SMTP username
				$mail->Password = '(U*K]Ju=cill'; // SMTP password
				$mail->SMTPSecure = 'ssl';                            
				$mail->Port = 465;  
				$mail->isHTML(true);  // Set email format to HTML

				$mail->setFrom('lp@consultycs.com');
				$mail->addAddress($emails[$i]); 

				//$mail->isHTML(true);  // Set email format to HTML

               $bodyContent = '<h3 style="font-size:18px; margin-bottom:12px;">Name: '. $name .'</h3><br>';
               $bodyContent .= '<h3 style="font-size:18px; margin-bottom:12px;">Email: '. $email .'</h3><br>';
               $bodyContent .= '<h3 style="font-size:18px; margin-bottom:12px;">Phone: '. $phone .'</h3><br>';

               $mail->Subject = 'Consultycs DMCC Dubai Lead';
               $mail->Body    = $bodyContent;
            //    $mail->send();
               if(!$mail->Send()) {
                    echo "Error while sending Email.";
                    var_dump($mail);
                } else {
                    // echo "Email sent successfully";
                    header("Location: thanks.html");
                    // exit;
                }
                
			}
    }
}

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['sendemail3'])){
    $phone = filter_var($_POST['phone'],FILTER_SANITIZE_NUMBER_INT);

    $formErrors = array();
	
    if(empty($phone)){
        $formErrors[] = "Add You phone please";
    }
    if(empty($formErrors)){
            $emails = array("i.owis@happenize.com","info@consultycs.com",  "gmarwadi@consultycs.com", "trishna@happenize.com", "desiree@happenize.com","production@happenize.com","javeed.ameen@consultycs.com");
			
			for($i=0;$i<count($emails);$i++){
				$mail = new PHPMailer;
				$mail->CharSet = 'UTF-8';
				$mail->SMTPDebug = 0;  
				$mail->isSMTP();                            // Set mailer to use SMTP
				$mail->Host = 'consultycs.com';             // Specify main and backup SMTP servers
				$mail->SMTPAuth = true;                     // Enable SMTP authentication
				$mail->Username = 'lp@consultycs.com';          // SMTP username
				$mail->Password = '(U*K]Ju=cill'; // SMTP password
				$mail->SMTPSecure = 'ssl';                            
				$mail->Port = 465;  
				$mail->isHTML(true);  // Set email format to HTML

				$mail->setFrom('lp@consultycs.com');
				$mail->addAddress($emails[$i]); 

				//$mail->isHTML(true);  // Set email format to HTML

               $bodyContent = '<h3 style="font-size:18px; margin-bottom:12px;">Phone: '. $phone .'</h3><br>';

               $mail->Subject = 'Consultycs DMCC Dubai Lead';
               $mail->Body    = $bodyContent;
            //    $mail->send();
               if(!$mail->Send()) {
                    echo "Error while sending Email.";
                    var_dump($mail);
                } else {
                    // echo "Email sent successfully";
                    header("Location: thanks.html");
                    // exit;
                }
                
			}
    }
}
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['sendemailCallNow'])){
    $phone = filter_var($_POST['phone'],FILTER_SANITIZE_NUMBER_INT);

    $formErrors = array();
	
    if(empty($phone)){
        $formErrors[] = "Add You phone please";
    }
    if(empty($formErrors)){
            $emails = array("i.owis@happenize.com","info@consultycs.com",  "gmarwadi@consultycs.com", "trishna@happenize.com", "desiree@happenize.com","production@happenize.com","javeed.ameen@consultycs.com");
			
			for($i=0;$i<count($emails);$i++){
				$mail = new PHPMailer;
				$mail->CharSet = 'UTF-8';
				$mail->SMTPDebug = 0;  
				$mail->isSMTP();                            // Set mailer to use SMTP
				$mail->Host = 'consultycs.com';             // Specify main and backup SMTP servers
				$mail->SMTPAuth = true;                     // Enable SMTP authentication
				$mail->Username = 'lp@consultycs.com';          // SMTP username
				$mail->Password = '(U*K]Ju=cill'; // SMTP password
				$mail->SMTPSecure = 'ssl';                            
				$mail->Port = 465;  
				$mail->isHTML(true);  // Set email format to HTML

				$mail->setFrom('lp@consultycs.com');
				$mail->addAddress($emails[$i]); 

				//$mail->isHTML(true);  // Set email format to HTML

               $bodyContent = '<h3 style="font-size:18px; margin-bottom:12px;">Phone: '. $phone .'</h3><br>';

               $mail->Subject = 'Consultycs DMCC Dubai Lead';
               $mail->Body    = $bodyContent;
            //    $mail->send();
               if(!$mail->Send()) {
                    echo "Error while sending Email.";
                    var_dump($mail);
                } else {
                    // echo "Email sent successfully";
                    header("Location: thanks-call.html");
                    // exit;
                }
                
			}
    }
}
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['sendemailCallLater'])){
    $date  = filter_var($_POST['date'],FILTER_SANITIZE_STRING);
    $time = filter_var($_POST['time'],FILTER_SANITIZE_STRING);
    $phone = filter_var($_POST['phone'],FILTER_SANITIZE_NUMBER_INT);

    $formErrors = array();
	
    if(empty($date)){
        $formErrors[] = "Choose date please";
    }elseif(empty($phone)){
        $formErrors[] = "Add You phone please";
    }elseif(empty($time)){
        $formErrors[] = "Choose time please";
    }
    if(empty($formErrors)){
            $emails = array("i.owis@happenize.com","info@consultycs.com",  "gmarwadi@consultycs.com", "trishna@happenize.com", "desiree@happenize.com","production@happenize.com","javeed.ameen@consultycs.com");
			
			for($i=0;$i<count($emails);$i++){
				$mail = new PHPMailer;
				$mail->CharSet = 'UTF-8';
				$mail->SMTPDebug = 0;  
				$mail->isSMTP();                            // Set mailer to use SMTP
				$mail->Host = 'consultycs.com';             // Specify main and backup SMTP servers
				$mail->SMTPAuth = true;                     // Enable SMTP authentication
				$mail->Username = 'lp@consultycs.com';          // SMTP username
				$mail->Password = '(U*K]Ju=cill'; // SMTP password
				$mail->SMTPSecure = 'ssl';                            
				$mail->Port = 465;  
				$mail->isHTML(true);  // Set email format to HTML

				$mail->setFrom('lp@consultycs.com');
				$mail->addAddress($emails[$i]); 

				//$mail->isHTML(true);  // Set email format to HTML

               $bodyContent = '<h3 style="font-size:18px; margin-bottom:12px;">Name: '. $date .'</h3><br>';
               $bodyContent .= '<h3 style="font-size:18px; margin-bottom:12px;">Email: '. $time .'</h3><br>';
               $bodyContent .= '<h3 style="font-size:18px; margin-bottom:12px;">Phone: '. $phone .'</h3><br>';

               $mail->Subject = 'Consultycs DMCC Dubai Lead';
               $mail->Body    = $bodyContent;
            //    $mail->send();
               if(!$mail->Send()) {
                    echo "Error while sending Email.";
                    var_dump($mail);
                } else {
                    // echo "Email sent successfully";
                    header("Location: thanks-call.html");
                    // exit;
                }
                
			}
    }
}
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['sendemailLeaveMessage'])){
    $email = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
    $phone = filter_var($_POST['phone'],FILTER_SANITIZE_NUMBER_INT);
    $message  = filter_var($_POST['message'],FILTER_SANITIZE_STRING);

    $formErrors = array();
	
    if(empty($phone)){
        $formErrors[] = "Add You phone please";
    }elseif(empty($email)){
        $formErrors[] = "Add You email please";
    }
    if(empty($formErrors)){
            $emails = array("i.owis@happenize.com","info@consultycs.com",  "gmarwadi@consultycs.com", "trishna@happenize.com", "desiree@happenize.com","production@happenize.com","javeed.ameen@consultycs.com");
			
			for($i=0;$i<count($emails);$i++){
				$mail = new PHPMailer;
				$mail->CharSet = 'UTF-8';
				$mail->SMTPDebug = 0;  
				$mail->isSMTP();                            // Set mailer to use SMTP
				$mail->Host = 'consultycs.com';             // Specify main and backup SMTP servers
				$mail->SMTPAuth = true;                     // Enable SMTP authentication
				$mail->Username = 'lp@consultycs.com';          // SMTP username
				$mail->Password = '(U*K]Ju=cill'; // SMTP password
				$mail->SMTPSecure = 'ssl';                            
				$mail->Port = 465;  
				$mail->isHTML(true);  // Set email format to HTML

				$mail->setFrom('lp@consultycs.com');
				$mail->addAddress($emails[$i]); 

				//$mail->isHTML(true);  // Set email format to HTML

               $bodyContent = '<h3 style="font-size:18px; margin-bottom:12px;">Phone: '. $phone .'</h3><br>';
               $bodyContent .= '<h3 style="font-size:18px; margin-bottom:12px;">Email: '. $email .'</h3><br>';
               $bodyContent .= '<h3 style="font-size:18px; margin-bottom:12px;">Message: '. $message .'</h3><br>';

               $mail->Subject = 'Consultycs DMCC Dubai Lead';
               $mail->Body    = $bodyContent;
            //    $mail->send();
               if(!$mail->Send()) {
                    echo "Error while sending Email.";
                    var_dump($mail);
                } else {
                    // echo "Email sent successfully";
                    header("Location: thanks-call.html");
                    // exit;
                }
                
			}
    }
}
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['sendemailQuickCall'])){
    $phone = filter_var($_POST['phone'],FILTER_SANITIZE_NUMBER_INT);

    $formErrors = array();
	
    if(empty($phone)){
        $formErrors[] = "Add You phone please";
    }
    if(empty($formErrors)){
            $emails = array("i.owis@happenize.com","info@consultycs.com",  "gmarwadi@consultycs.com", "trishna@happenize.com", "desiree@happenize.com","production@happenize.com","javeed.ameen@consultycs.com");
			
			for($i=0;$i<count($emails);$i++){
				$mail = new PHPMailer;
				$mail->CharSet = 'UTF-8';
				$mail->SMTPDebug = 0;  
				$mail->isSMTP();                            // Set mailer to use SMTP
				$mail->Host = 'consultycs.com';             // Specify main and backup SMTP servers
				$mail->SMTPAuth = true;                     // Enable SMTP authentication
				$mail->Username = 'lp@consultycs.com';          // SMTP username
				$mail->Password = '(U*K]Ju=cill'; // SMTP password
				$mail->SMTPSecure = 'ssl';                            
				$mail->Port = 465;  
				$mail->isHTML(true);  // Set email format to HTML

				$mail->setFrom('lp@consultycs.com');
				$mail->addAddress($emails[$i]); 

				//$mail->isHTML(true);  // Set email format to HTML

               $bodyContent = '<h3 style="font-size:18px; margin-bottom:12px;">Phone: '. $phone .'</h3><br>';

               $mail->Subject = 'Consultycs DMCC Dubai Lead';
               $mail->Body    = $bodyContent;
            //    $mail->send();
               if(!$mail->Send()) {
                    echo "Error while sending Email.";
                    var_dump($mail);
                } else {
                    // echo "Email sent successfully";
                    header("Location: thanks-GetAQuote.html");
                    // exit;
                }
                
			}
    }
}
?>