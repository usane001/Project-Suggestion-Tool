<?php
	
	session_start();
	
	$errmsg_arr = array();
	
	$errflag = false;
	
	include('db.php');
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	

	$query = mysqli_query($conn,"SELECT * FROM users natural join employee where username='$user' and password='$pass' and io='1'");
	$count = mysqli_num_rows($query);
	while($row = mysqli_fetch_assoc($query)){
		if($count > 0) {
			session_regenerate_id();
			$name = $row['firstname'] . ' ' . $row['lastname'];

			$_SESSION['ID'] = $row['eid'];
			$_SESSION['UID'] = $row['uid'];
			$_SESSION['TYPE'] = $row['user_type'];
			$_SESSION['NAME'] = $name;
			echo "true";
		}
	
	}

	function register(){
		global $conn;
	  
		$name = $_POST["name"];
		$username = $_POST["username"];
		$password = $_POST["password"];
	  
		if(empty($name) || empty($username) || empty($password)){
		  echo "Please Fill Out The Form!";
		  exit;
		}
	  
		$user = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username'");
		if(mysqli_num_rows($user) > 0){
		  echo "Username Has Already Taken";
		  exit;
		}
	  
		$query = "INSERT INTO tb_user VALUES('', '$name', '$username', '$password')";
		mysqli_query($conn, $query);
		echo "Registration Successful";
	  }

		
?>