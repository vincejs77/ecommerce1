<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	include 'includes/session.php';

	if(isset($_POST['reset'])){
		$email = $_POST['email'];

		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM users WHERE email=:email");
		$stmt->execute(['email'=>$email]);
		$row = $stmt->fetch();

		if($row['numrows'] > 0){
			//generate code
			$set='123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
			$code=substr(str_shuffle($set), 0, 15);
			try{
				$stmt = $conn->prepare("UPDATE users SET reset_code=:code WHERE id=:id");
				$stmt->execute(['code'=>$code, 'id'=>$row['id']]);
				
				$message = "
					<h2>Réinitialisation du mot de passe</h2>
					<p>Votre compte:</p>
					<p>Email: ".$email."</p>
					<p>Veuillez cliquer sur le lien ci-dessous pour réinitialiser votre mot de passe.</p>
					<a href='http://localhost/ecommerce3/ecommerce/password_reset.php?code=".$code."&user=".$row['id']."'>Reinitialiser mot de passe</a>
				";

				//Load phpmailer
	    		require 'vendor/autoload.php';

	    		$mail = new PHPMailer(true);                             
			    try {
			        //Server settings
			        $mail->isSMTP();                                     
			        $mail->Host = 'smtp.gmail.com';                      
			        $mail->SMTPAuth = true;                               
			        $mail->Username = 'dithyrambebin@gmail.com';     
			        $mail->Password = 'mysourcepass';                    
			        $mail->SMTPOptions = array(
			            'ssl' => array(
			            'verify_peer' => false,
			            'verify_peer_name' => false,
			            'allow_self_signed' => true
			            )
			        );                         
			        $mail->SMTPSecure = 'ssl';                           
			        $mail->Port = 465;                                   

			        $mail->setFrom('dithyrambebin@gmail.com');
			        
			        //Recipients
			        $mail->addAddress($email);              
			        $mail->addReplyTo('dithyrambebin@gmail.com');
			       
			        //Content
			        $mail->isHTML(true);                                  
			        $mail->Subject = 'Réinitialisation du mot de passe du site BinMarket';
			        $mail->Body    = $message;

			        $mail->send();

			        $_SESSION['success'] = 'Lien de réinitialisation du mot de passe envoyé';
			     
			    } 
			    catch (Exception $e) {
			        $_SESSION['error'] = " Le message n'a pas pu être envoyé. Erreur de messagerie ".$mail->ErrorInfo;
			    }
			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
		}
		else{
			$_SESSION['error'] = "Email non trouvé";
		}

		$pdo->close();

	}
	else{
		$_SESSION['error'] = "Entrez l'e-mail associé au compte";
	}

	header('location: password_forgot.php');

?>