<?php
	include 'includes/session.php';

	if(isset($_POST['signup'])){
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		
		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM users WHERE email=:email");
		$stmt->execute(['email'=>$email]);
		$row = $stmt->fetch();

		if($row['numrows'] > 0){
			$_SESSION['error'] = 'Email déjà pris';
	    header('location: signup.php');
		}
		else{
			$password = password_hash($password, PASSWORD_DEFAULT);
			$now = date('Y-m-d');
		
			try{
				$stmt = $conn->prepare("INSERT INTO users (email, password, firstname, lastname, created_on) VALUES (:email, :password, :firstname, :lastname, :created_on)");
				$stmt->execute(['email'=>$email, 'password'=>$password, 'firstname'=>$firstname, 'lastname'=>$lastname, 'created_on'=>$now]);
				$_SESSION['success'] = 'Utilisateur ajouté avec succès, Veuillez vous connecter';
	    header('location: login.php');
			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
		}
		$pdo->close();


	    header('location: login.php');


	}
	else{
		$_SESSION['error'] = "Remplissez d'abord le formulaire d'utilisateur";
	    header('location: signup.php');
	}