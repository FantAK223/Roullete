<?php session_start();?> 
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Lucky Number</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="home.css">
<script src='http://code.jquery.com/jquery-2.1.1.min.js'></script>

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

<?

if(isset($_SESSION["session_username"])):
    $username = $_SESSION["session_username"];
    ?>
    <div id="welcome">
    <h2> <a> <span class="welcome">Welcome</a> <a><?php echo $_SESSION['session_username'];?></a> </span></h2>
      <p class="exit"><a href="logout.php">Exit</a></p>
    </div>

<?php endif; ?>
</div>


</div>
</div>
</header>

<!-- SOONER OR LATER LUCK WILL CATCH UP WITH YOU -->



<div class="block"> 
<a class="SOONER"> SOONER OR LATER LUCK WILL CATCH UP WITH YOU</a>
</div>







	<!-- Код бара с горизонтальной рулеткой -->
<div class="wraper">
        <div class="arrowup"></div>
        <div class="arrowdown"></div>
        <div class="window">
        <ul class="list">
            
        </ul>
            <ul class="list">
            	<li id = "red"><img src="image.roullet/1.png" alt="1" id = "red"></li>
            	<li id = "green"><img src="image.roullet/0.png" alt="0" id = "green"></li>
            	<li id = "black"><img src="image.roullet/14.png" alt="14" id = "black"></li>
            	<li id = "red"><img src="image.roullet/2.png" alt="2" id = "red"></li>
            	<li id = "black"><img src="image.roullet/13.png" alt="13" id = "black"></li>
            	<li id = "red"><img src="image.roullet/3.png" alt="3" id = "red"></li>
            	<li id = "black"><img src="image.roullet/12.png" alt="12" id = "black"></li>
            	<li id = "red"><img src="image.roullet/4.png" alt="4" id = "red"></li>
                <li id = "black"><img src="image.roullet/11.png" alt="11" id = "black"></li>
                <li id = "red"><img src="image.roullet/5.png" alt="5" id = "red"></li>
                <li id = "black"><img src="image.roullet/10.png" alt="10" id = "black"></li>
                <li id = "red"><img src="image.roullet/6.png" alt="6" id = "red"></li>
                <li id = "black"><img src="image.roullet/9.png" alt="9" id = "black"></li>
                <li id = "red"><img src="image.roullet/7.png" alt="7" id = "red"></li>
                <li id = "black"><img src="image.roullet/8.png" alt="8" id = "black"></li>
            </ul>
        </div>
    </div>

    <!-- <p style="text-align: center">
        <button class="button">хуёпка</button>
        <div class="win">
            <ul>
                 <script src="script.js"></script>
            </ul>
        </div> -->


<!-- основная страница -->

<div class="block2">
<div class="container"> <div class="cnt">
<div id="countdown">
 <h1 class="timer"> Старт через <span name="rocket" id="rocket"></span> секунд</h1>

</div>
</div>
</div>
</div>
<?php
    require_once('connection.php');
    $query = "SELECT balance FROM usertbl WHERE username = '$username' ";
    $result = mysqli_query($con, $query) or die(mysqli_error($con));
    $balance = mysqli_fetch_row($result);
    $_SESSION['balance'] = $balance[0];
?>
<div class="block__bet">
<!-- <div class="block__button" >
	<a href="#"  >clear</a>
</div> -->
<div class="cnt_bet">
<form id = "formBet" name="search">
    <div class="top_bar">

        <input  id="clear"  type="button" class="button_style" value="clear" >
        <input  id="1" type="button" class="button_style" value="+1"  >
        <input  id="10" type="button" class="button_style" value="+10" >
        <input  id="100" type="button" class="button_style" value="+100" >
        <input  id="1000" type="button" class="button_style" value="+1000" >
        <input  id="1/2" type="button" class="button_style" value="1/2" >
        <input  id="*2" type="button" class="button_style" value="x2" >
        </div>

<div class="bottom_bar">
        <div class="printBlock__style" id="printBlock">
             <a class="balance"> <div class="balance_block">Balance:   </div>  <input type="text" class="style__window" id = "balancee" disabled value = "<?php echo  $_SESSION['balance'] ?>"></a> 
              <a class="balance"> <div class="amount_block">bet amount</div><input Id="amount" name="key" class="style__window" type="text" value="0" placeholder="Bet amount..."> </a>
            <div class="bet_color"> 
               <div class="cnt_Black"> <input type="submit" name="rocket" class = "betBlack" id="betBlack" value = "bet black">  </div>
               <div class="cnt_Green"> <input type="submit" name="rocket" class = "betGreen" id="betGreen" value = "bet green"> </div>
               <div class="cnt_Red"> <input type="submit" name="rocket" class = "betRed" id="betRed" value = "bet red"> </div>
                
                </div>
                </div>
            </form>
            </div>     
            
            </div>
            </div>
<script src="script.js"></script>
<script  src="bet_amount123.js"> </script>
</body>
</html> 