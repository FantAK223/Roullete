<?php session_start();?> 
<?php require_once('connection.php'); ?>
<?php require_once('reg.php'); ?>
<!DOCTYPE html>
	<html>
	<head>
	<meta > 

 	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="home.css">
	<link rel="stylesheet" type="text/css" href="login.css">
<link href="css/style.css" media="screen" rel="stylesheet">

	</head>
	<body>

<!-- Шапка -->
<header class="header">
	<div class="header_inner">
<div class="blok-menu">

<div class="menu">
    
	<div class="menu_nadpis"><a class="menu__logo">VALORANT</a>
    <a class="menu__roullete">Roulette</a></div>
<div class="menu_nav">
<a class="menu__item" href="index.php">Home</a>
<a class="menu__item" href="help.php">Help</a>
<a class="menu__item2" href="login.php">Sign</a>
</div>


</div>


</div>
</div>
</header>




<div class="container mregister">
<div id="login">
<form action="register.php" id="registerform" method="post"name="registerform">
 <p><label for="user_login"><br>
 <input class="input" id="full_name" name="full_name"size="32" placeholder="Full name..."  type="text" value=""></label></p>
<p><label for="user_pass"><br>
<input class="input" id="email" name="email" size="32" placeholder="Email..." type="email" value=""></label></p>
<p><label for="user_pass"><br>
<input class="input" id="username" name="username"size="20" placeholder="Username..." type="text" value=""></label></p>
<p><label for="user_pass"><br>
<input class="input" id="password" name="password"size="32" placeholder="Password..." type="password" value=""></label></p>
<p class="submit"><input class="button_reg" id="register" name= "register" type="submit" value="Registration"></p>
	 
 </form>
</div>
</div>

</body>
</html>