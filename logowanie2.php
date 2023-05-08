<?php

$host="localhost";
$user="root";
$password="";
$db="samurajegra";

$polaczenie_z_BazaDanych= new mysqli($host,$user,$password,$db);

if(isset($_POST['username'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];

    $sql="select * from rejestr where nazwa='".$uname."'AND haslo='".$password."' limit 1";

    $result = mysqli_query($polaczenie_z_BazaDanych, $sql);

    session_start(); // start a session
if(mysqli_num_rows($result) == 1){
        $_SESSION['logged_in'] = true; // set the 'logged_in' session variable to true
        echo '<script>alert("Zalogowales sie do naszej gry walki samurajów")</script>';
        echo '<script>alert("Życzymy milej gry!!!")</script>';
        header('Location: index.html'); // redirect the user to index.html
        exit();
    }
    if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true){
        header('Location: login.php'); // redirect the user to the login page
        exit();
    }
    else {
        echo'<script>alert("Haslo jest nie poprawne lub nazwa uzytkownika sprobuj ponownie")</script>';
        header('Refresh: 0.1; URL=logowanie.php');
        exit();
    }
}
 /*
if($polaczenie_z_BazaDanych->connect_errno!=0)
{
    echo"Error".$polaczenie_z_BazaDanych->connect_errno;
}else{

 $sql ="SELECT * FROM rejestr WHERE Nickname='$nazwa' AND Haslo='$haslo'"

if($rezultat= @$polaczenie_z_BazaDanych->query($sql)){

}
echo'<div class="blad">
    <p>Haslo jest nie poprawne lub nazwa uzytkownika sprobuj ponownie</p>
</div>'

$polaczenie_z_BazaDanych->close();
}
*/
 /*
 $loginy = $polaczenie_tabela = $polaczenie_z_BazaDanych->query("Select Nickname,Haslo from rejestr");
 while($row = $loginy ->fetch_assoc()){
     if($row["Nickname"]){
        if($row["Haslo"]){
             echo"Zalogowaleś sie Pomyślnie";
         }else{
             echo"Błedne haslo";
         }
         break;
     }else{
         echo"Bledna Nazwa uzytkownika";
         break;
     }
 }

*/





?>