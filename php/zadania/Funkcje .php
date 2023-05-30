<?php 

//==============//
//Zadanie Domowe//
//==============//

//====================//
//Funkcje w Języku PHP//
//====================//


//=======//
//Zmienne//
//=======//

$ilośćPieniędzy = 0;

$produkty = array();

$historiaKomend = array();

$ilość_mąki = 45;

$ilość_cukru = 450;

$ilość_truskawek = 30;

$ilość_bułki_tartej = 10;

$wSklepie = false;


//=======//
//Funkcje//
//=======//

function dodajProdukt($nazwa, $cena, &$produkty) {
    $produkty[$nazwa] = $cena;
}

function obliczCene($produkty) {
    $suma = 0;
    foreach ($produkty as $nazwa => $cena) {
        $suma += $cena;
    }
    return $suma;
}

function dodajMonety($ilosc, &$ilośćPieniędzy) {
    $ilośćPieniędzy += $ilosc;
}

function idzDoSklepu($wSklepie) {
    $wSklepie = true;
}


//==============================//
// Dodajemy produkty do kolekcji//
//==============================//

dodajProdukt("Mąka", 3.50, $produkty);
dodajProdukt("Cukier", 2.00, $produkty);
dodajProdukt("Truskawki", 12, $produkty);
dodajProdukt("Bułka tarta", 6.40, $produkty);


//===========================//
//Dodajemy monety do portfela//
//===========================//

dodajMonety(0, $ilośćPieniędzy);


//===========================//
//Wyświetlamy ilość pieniędzy//
//===========================//

echo "Ilość pieniędzy: " . $ilośćPieniędzy ." zł". "<br>" . "<br>";


//==============================//
//Wyświetlamy kolekcję produktów//
//==============================//

echo "Kolekcja produktów: " . implode(", ", array_keys($produkty)) . "<br>" . "<br>";


//========================//
//Obliczamy cenę produktów//
//========================//

$cenaProduktow = obliczCene($produkty);


//===================================//
//Wyświetlamy oraz ilość mąki i cukru//
//===================================//

echo "Ilość mąki: " . $ilość_mąki . " gramów" . "<br>";
echo "Ilość cukru: " . $ilość_cukru . " gramów" . "<br>";
echo "Ilość truskawek: " . $ilość_truskawek . "<br>";
echo "Ilość bułki tartej: " . $ilość_bułki_tartej . " gramów" .  "<br>" . "<br>";


//==========================//
//Wyświetlamy cenę produktów//
//==========================//

echo "Cena produktów: " . $cenaProduktow ." zł" ."<br>";


//=================//
//Idziemy do sklepu//
//=================//

idzDoSklepu($wSklepie = true);


//=====================================//
//Obliczamy resztę, jeśli taka istnieje//
//=====================================//

$Reszta = $ilośćPieniędzy - $cenaProduktow;


//===================================================================================//
//Sprawdzamy, czy mamy wystarczającą ilość pieniędzy,aby kupić potrzebne nam produkty//
//===================================================================================//



if ($wSklepie){
    if ($ilośćPieniędzy >= $cenaProduktow) {
    echo "Możemy kupić wybrane produkty. Zostanie nam " . $Reszta . " zł reszty";
    } else if ($ilośćPieniędzy < $cenaProduktow){
    echo "Nie możemy kupić wybranych produktów, ponieważ nie mamy wystarczającej ilości pieniędzy.";
    }
}else if(!$wSklepie) {
    echo "Nie możesz wykonać zakupów, ponieważ nie jesteś w sklepie";
}

?>