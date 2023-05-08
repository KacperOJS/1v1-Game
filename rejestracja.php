<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/rejestracja.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <title>Rejestracja Samuraje</title>
</head>
<body>
    <div class="wrapper">
        <h2>Rejestracja</h2>
        <form action="rejestracja2.php" method="POST">
            <div class="input-box">
                <input type="text" name="nazwa" placeholder="Nazwa Konta" required >
            </div>
            <div class="input-box">
                <input type="text" name="email" placeholder="Wpisz swój email" required>
            </div>
            <div class="input-box">
                <input type="password" name="haslo1" placeholder="Wpisz Hasło" required>
            </div>
            <div class="input-box">
                <input type="password" name="haslo2" placeholder="Powtorz hasło" required>
            </div>
                <div class="policy">
                    <input type="checkbox" required>
                    <h3>Akceptuje wszystkie warunki</h3><br>
                </div>
            <div class="input-box button">
                <input type="submit" placeholder="Wyślij" value="Utworz konto" required>
            </div>
            <div class="text">
                <h3>Masz juz załozone konto? <a href="logowanie.php">Zaloguj sie</a></h3>
                <h3>Wroc do Strony glownej
                    <a href="index.php">
                        <i class="uil uil-home" id="domeczek"></i>
                    </a>    

                </h3>
                
            </div>





        </form>


    </div>

    <?php
    /*
        error_reporting(0);
        ini_set('display_errors', 0);
        $nazwa =$_POST['nazwa'];
        $email =$_POST['email'];
        $haslo1 =$_POST['haslo1'];
        $haslo2 =$_POST['haslo2'];

        $localhost="localhost";
        $username="root";
        $password="";
        $dbName='samurajegra';


        $polaczenie_z_BazaDanych= new mysqli($localhost,$username,$password,$dbName);


        if($haslo1==$haslo2){
            $h=$haslo1;
            $sql="INSERT INTO rejestr(Nickname,email,Haslo) VALUES('$nazwa','$email','$h')";
            if(mysqli_query($polaczenie_z_BazaDanych,$sql)){
                echo"Account created";

                //header('Refresh: 5; URL=rejestracja.php');
                //header("Location: localhost/projekt/rejestracja2.php");
                //exit;
            }
            mysqli_close($polaczenie_z_baza_danych);
        }else{
            echo'<script>alert("Hasla nie sa takie same. Sprobuj Ponownie")</script>';
            //header('Refresh: 5; URL=rejestracja.php');

        }
        mysqli_close($conn);
*/
        ?>


<script>

</script>

</body>
</html>