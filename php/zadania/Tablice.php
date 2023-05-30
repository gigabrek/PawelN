<?php

//==============//
//Zadanie Domowe//
//==============//

//====================//
//Tablice w Języku PHP//
//====================//

//=================//
//Tworzenie tablicy//
//=================//

$Czołgi = array("Leopard I", "Maus", "E100");


//=====================================//
//Dodawanie nowych elementów do tablicy//
//=====================================//

array_push($Czołgi, "T-34-85");
array_push($Czołgi, "BAT.-CHÂTILLON 25 T");


//===============================//
//Wyświetlanie zawartości tablicy//
//===============================//

echo "Zawartość garażu: <br>";
foreach ($Czołgi as $element) {
    echo "- " .$element . "<br>";
}


echo "<br>";


//===============================================//
//Sprawdzanie, czy element znajduje się w tablicy//
//===============================================//

if (in_array("Excelsior A33", $Czołgi)) {
    echo "Garaż zawiera Excelsior'a A33.". "<br>"  . "<br>" ;
} else {
    echo "Garaż nie zawiera Excelsior'a A33". "<br>". "<br>";
}


//==================//
//Sortowanie tablicy//
//==================//

sort($Czołgi);
echo "Czołgi posortowane w garażu alfabetycznie: " . "<br>";
foreach ($Czołgi as $element) {
    echo $element . "<br>";
}


echo "<br>";


//=================//
//Obracanie tablicy//
//=================//

$tablica_obrocona = array_reverse($Czołgi);
echo "Obrócony garaż: " . "<br>";
foreach ($tablica_obrocona as $element) {
    echo "- " . $element . "<br>";
}


echo "<br>";


//===================================================//
//Wyszukiwanie elementu w tablicy i zwracanie indeksu//
//===================================================//

$indeks = array_search("Leopard I", $Czołgi);
echo "Indeks elementu Leopard I to " . $indeks . ". <br>" . "<br>";


//=============================================//
//Usuwanie elementów z tablicy za pomocą indexu//
//=============================================//

unset($Czołgi[2]);
echo "Garaż po usunięciu czołgu o indexie 2 (usuwa z garażu Leoparda I, ponieważ jego index to 2): <br>";
foreach ($Czołgi as $element) {
    echo "- " .$element . "<br>";
}


echo "<br>";


//===================================//
//Liczenie ilości elementów w tablicy//
//===================================//

$ilosc_elementow = count($Czołgi);
echo "Garaż zawiera " . $ilosc_elementow . " czołgi, <br>";
echo "więc ";


//===================================//
//Sprawdzanie, czy tablica jest pusta//
//===================================//

if (empty($Czołgi)) {
    echo "jest pusty. <br>";
} else {
    echo " nie jest pusty. <br>". "<br>";
}


//========================================//
//Łączenie elementów tablicy w ciąg znaków//
//========================================//

$tablica_jako_napis = implode(", ", $Czołgi);
echo "Garaż połączony w ciąg znaków: " . $tablica_jako_napis . "<br>";


echo "<br>";


//==================================//
//Zmiana wartości elementu w tablicy//
//==================================//

$Czołgi[0] = "winogrona";
echo "Garaż po zmianie wartości pierwszego elementu: <br>";
foreach ($Czołgi as $element) {
    echo "- ".$element . "<br>";
}

?>