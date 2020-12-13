<?php session_start();?> 
<?php require_once('connection.php'); ?>
<?php require_once('log.php');?>
<!DOCTYPE html>
	<html>
	<head charset=windows-1251>
<meta>


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


<div class="container mlogin">
<div id="login">

<form action="" id="loginform" method="post"name="loginform">
<p><label for="user_login"><br>
<input class="input" id="username" placeholder="Username..." name="username"size="20"
type="text" value=""></label></p>
<p><label for="user_pass"><br>
 <input class="input" id="password" placeholder="Password..." name="password"size="20"
  type="password" value=""></label></p> 
	<p class="submit"><input class="button" name="login"type= "submit" value="Log In"><br></p>
	<p class="regtext">Not registered yet?<a href= "register.php">Registration</a>!</p>
   </form>
 </div>
  </div>

</body>
</html>