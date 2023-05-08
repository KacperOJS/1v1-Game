



<style>
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
    }
</style>





<?php
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
    $sql="INSERT INTO rejestr(nazwa,email,haslo) VALUES('$nazwa','$email','$h')";
    if(mysqli_query($polaczenie_z_BazaDanych,$sql)){
        echo"<img src='./bateman.gif' height='100%' width='100%'/>";
        echo'<script>alert("Dziekujemy ze utworzyleś nowe konto")</script>';
        header('Refresh: 1; URL=logowanie.php');
    }
    mysqli_close($polaczenie_z_baza_danych);
}else{
    echo'<script>alert("Hasla nie sa takie same. Sprobuj Ponownie")</script>';
    header('Refresh: 0.1; URL=rejestracja.php');


}


?>
