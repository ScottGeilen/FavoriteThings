<html>
<head>
	<title>Information gathered</title>
</head>
<body>
	<?php


	$usersName = $_POST['username'];
	$cityAddress = $_POST['cityaddress'];
	$favAnimal = $_POST['favanimal'];
	$favSport = $_POST['favsport'];

	echo "Hi, " . $usersName . "! Your favorite animal is the " . $favAnimal . ", and your favorite sport is " . $favSport . ". </br></br>Imagine a world where " . $favAnimal . "s play " . $favSport . " in " . $cityAddress . "! :D";
	?>

</body>
</html>