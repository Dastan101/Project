<?php 
	
	session_start();
	$conn = mysqli_connect("localhost","root","","youtube");

		// Check connection
		if (mysqli_connect_error()){
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}

		if (isset($_POST["registerButton"])) {
			$login = $_POST["login"];
			$password1 = $_POST["password1"];
			$password2 = $_POST["password2"];

			if ($password1 != $password2) {
				echo "not right";
			}

			else if (strlen($login)<6) {
				echo "Your login must contain more chars";
			}
			
			else{
				$sql = "INSERT INTO Users(userLogin,userPassword1)
				VALUES ('" . $login . "', '" . $password1."')";

				if ($conn->query($sql) === TRUE) {
			    	echo "New users obtained successfully";
				} 

				else{
			    	echo ("Error: " . $sql . "<br>" . mysql_error());
				}

				$conn->close();	
			}
	
		}	

		else if (isset($_POST["loginButton"])){
			$login = $_POST["login"];
			$password = $_POST["password"];
			if (strlen($login)==0 || strlen($password)==0){
				echo "Fill all inputs";
			}

			else{
				$sql = "SELECT * FROM Users WHERE userLogin ='".$login."'  AND userPassword = '".$password."'";
				$result = $conn->query($sql);
				if(isset($result->num_rows)){
					if ($result->num_rows > 0) {
						echo "login";
						$_SESSION["login"]== TRUE;
					}
					else{
						echo "wrong";
					}
				}
			}
		}else{
?>

<center>
	<h1>Registration</h1>
	<form method="post">
		<input name="login" type="text" placeholder="Login">
		<input name="password1" type="password" placeholder="Password">
		<input name="password2" type="password" placeholder="Repeat password">
		<input name="registerButton" type="submit" value="Registration">
	</form>
	<hr>
	<h1>Login</h1>
	<form method="post">
		<input name="login" type="text" placeholder="Login">
		<input name="password" type="password" placeholder="Password">
		<input name="loginButton" type="submit" value="login">
	</form>
</center>


<?php 
}
?>