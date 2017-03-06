<?php session_start();?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link type="text/css" rel="stylesheet" href="rps.css"/>
<title>Rock, Paper, scissors</title>
</head>
<body>

<?php
define('Rock','Rock');
define('Scissors','Scissors');
define('Paper','Paper');


if(isset($_POST["user_choice"])&&isset($_SESSION['Score'])){
echo "<table>";
	$user_choice = $_POST["user_choice"];
	
	$Choosefrom= array(Rock, Paper, Scissors);
	$Choice= rand(0,2);
	$Computer=$Choosefrom[$Choice];
    $_SESSION['Score']=0;
	if($user_choice == $Computer){
	echo '<tr><td>'. 'Result : Draw +0'.'</td></tr>';
	$_SESSION['Score']= (int)$_SESSION['Score'];
	}
	else if($user_choice == 'Rock' && $Computer == 'Scissors'){
	echo '<tr><td>'.'Result : Win +1'.'</td></tr>';
	$_SESSION['Score']= (int)$_SESSION['Score'] +1;
	}
	else if($user_choice == 'Rock' && $Computer == 'Paper'){
	echo '<tr><td>'.'Result : Lose -1'.'</td></tr>';
	$_SESSION['Score']= (int)$_SESSION['Score'] -1;
	}
	else if($user_choice == 'Scissors' && $Computer == 'Rock'){
	echo '<tr><td>'.'Result : Lose -1'.'</td></tr>';
	$_SESSION['Score']= (int)$_SESSION['Score'] -1;
	}
	else if($user_choice == 'Scissors' && $Computer == 'Paper'){
	echo '<tr><td>'.'Result : Win +1'.'</td></tr>';
	$_SESSION['Score']= (int)$_SESSION['Score'] +1;
	}
	else if($user_choice == 'Paper' && $Computer == 'Rock'){
	echo '<tr><td>'.'Result : Win +1'.'</td></tr>';
	$_SESSION['Score']= (int)$_SESSION['Score'] +1;
	}
	else if($user_choice == 'Paper' && $Computer == 'Scissors'){
	echo '<tr><td>'.'Result : Lose -1'.'</td></tr>';
	$_SESSION['Score']= (int)$_SESSION['Score'] -1;
	}
	echo '<tr><td>'.'You\'re score is currently: '.$_SESSION['Score'].' '.'</td></tr>';
	echo '<tr><td>'.'<a href="http://codd.cs.gsu.edu/~sgopala1/rockps.php">Play Again ?</a>'.'</td></tr>';
}
else {
echo '<form id="formplay" action="http://codd.cs.gsu.edu/~sgopala1/rockps.php" method="post" />
<input class="img" type="image" src="rock.jpg" alt="Rock" name="user_choice" value="Rock" title="Rock" /> <br /><br />
<input class="img" type="image" src="paper.jpg" alt="Paper" name="user_choice" value="Paper" title="Paper" /> <br /><br />
<input class="img" type="image" src="scissors.jpg" alt="Scissors" name="user_choice" value="Scissors" title="Scissors" /> <br /><br />
</form> ';
}
?>
</body>
</html>