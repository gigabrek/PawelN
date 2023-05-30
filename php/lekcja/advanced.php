<?php

// Mamy zmienna sesyjna globalna - $_SESSION
// przechowuje ona dane dopóki:
// A. Mam otwartą przegladarke
// B. tak dlugo zanim nie wygasnie czas sesji na serwerze

// Do czego sluza SESJE?
// Do tworzenia licznika owiedzin na mojej strone

// Do rozpoczecia sesji uzywamy:
session_start();

// Mogę sprawdzac czy sesja jest otwarta:

/*
if(isset($_SESSION['visits'])){
    $_SESSION['visits']++;
}else{
    $_SESSION['visits'] = 1;
}

echo 'strone odczytano '. $_SESSION['visits']. 'razy';
*/


session_destroy(); // niszczenie funkcji

$_SESSION["app"][] = time(); //Tu mamy klucz glowny

var_dump($_SESSION); //Wyswietlam dane sesji za pomocą funkcji


if(isset($_SESSION['app']['isLogged'])){
    echo '<a href="logout.php">Wyloguj</a><br>';
}else{
    echo '<a href="login.php">Zaloguj</a><br>';
}


// <a href="login.php" >Zaloguj</a><br>
// <a href="logout.php" >Wyloguj</a><br> 

?>