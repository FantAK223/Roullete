<?php require_once('connection.php');?>
<?php session_start(); ?>


	 


	<?php if(isset($_POST["login"])){

	if(!empty($_POST['username']) && !empty($_POST['password'])) {
	$username = htmlspecialchars($_POST['username']);
	$password = htmlspecialchars($_POST['password']);
	$balance = ($_POST['balance']);
	$query = mysqli_query($con, "SELECT * FROM usertbl WHERE username= '".$username."' ");
	$numrows = mysqli_num_rows($query);
	if($numrows != 0)
 {
while($row=mysqli_fetch_assoc($query))
 {
	$dbusername=$row['username'];
  $dbpassword=$row['password'];
  $dbbalance=$row['balance'];
 }
  if($username == $dbusername && password_verify($password,$dbpassword))
 {
	// старое место расположения
	//  session_start();
	 $_SESSION['session_username']=$username;
	 $_SESSION['session_balance']=$balance;	 
 /* Перенаправление браузера */
 echo "<head>";  
    echo '<meta http-equiv="refresh" content="5;URL=index.php">';
  echo "</head>";
	}
	} else {
	//  $message = "Invalid username or password!";
	
	echo  "Invalid username or password!";
 }
	} else {
    $message = "All fields are required!";
	}
	}?>