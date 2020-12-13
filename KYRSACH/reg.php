<?php
	
	if(isset($_POST["register"])){
	
	if(!empty($_POST['full_name']) && !empty($_POST['email']) && !empty($_POST['username']) && !empty($_POST['password'])) {
  $full_name= htmlspecialchars($_POST['full_name']);
	$email=htmlspecialchars($_POST['email']);
 $username=htmlspecialchars($_POST['username']);
 $password=htmlspecialchars($_POST['password']);
 $hash = password_hash($password, PASSWORD_DEFAULT);
 $query=mysqli_query($con, "SELECT * FROM usertbl WHERE username='".$username."'");
  $numrows=mysqli_num_rows($query);
if($numrows==0)
   {
	$sql="INSERT INTO usertbl
  (full_name, email, username,password)
	VALUES('$full_name','$email', '$username', '$hash')";
  $result=mysqli_query($con, $sql);
 if($result){
	$message = "Учетная запись успешно создана";
	echo "<head>";  
    echo '<meta http-equiv="refresh" content="5;URL=login.php">';
  echo "</head>";
} else {
 $message = "Не удалось вставить информацию о данных!";
  }
	} else {
	$message = "Это имя пользователя уже существует! Пожалуйста, попробуйте другой!";
   }
	} else {
	$message = "Все поля обязательны для заполнения!";
	}
	}
	?>

<?php if (!empty($message)) 

{echo "<p class='error'>" . "MESSAGE: ". $message . "</p>";}

 ?>