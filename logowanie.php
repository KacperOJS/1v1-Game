<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/logowanie.css">
	<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
	<title>Logowanie</title>
</head>

<body>
	<div class="wrapper">
		<h2>Logowanie</h2>
		<form action="logowanie2.php" method="POST">
			<div class="input-box">
				<input type="text" name="username" placeholder="Nazwa Konta" required>
			</div>
			<div class="input-box">
				<input type="password" name="password" placeholder="Wpisz Hasło" required>
			</div>
			<div class="input-box button">
				<input type="submit" placeholder="Wyślij" value="Zaloguj sie" required>
			</div>
			<div class="text">
				<h3>Nie masz założonego konta? <a href="rejestracja.php">Zarejestruj sie</a></h3>
				<h3>Wroc do Strony glownej
                    <a href="index.php">
                        <i class="uil uil-home" id="domeczek"></i>
                    </a>    

                </h3>		
				</div>

		</form>


	</div>






</body>

</html>