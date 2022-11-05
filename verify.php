<?php
	include 'includes/session.php';
	$conn = $pdo->open();

	if(isset($_POST['login'])){
		
		$email = $_POST['email'];
		$password = $_POST['password'];

		try{

			$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM users WHERE email = :email");
			$stmt->execute(['email'=>$email]);
			$row = $stmt->fetch();
			if($row['numrows'] > 0){
				if($row['status']){
					if(password_verify($password, $row['password'])){
						if($row['type']){
							$_SESSION['admin'] = $row['id'];
						}
						else{
							$_SESSION['user'] = $row['id'];
						}
					}
					else{
						$_SESSION['error'] = 'Mot de passe incorect';
					}
				}
				else{
					$_SESSION['error'] = 'Compte non activé.';
				}
			}
			else{
				$_SESSION['error'] = 'Email non trouvé';
			}
		}
		catch(PDOException $e){
			echo "Ceci est un problème de connexion: " . $e->getMessage();
		}

	}
	else{
		$_SESSION['error'] = 'Veillez vous connecter d abord';
	}

	$pdo->close();

	header('location: login.php');

?>