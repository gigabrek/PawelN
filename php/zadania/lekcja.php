<?php

//Identyfikacja człowieka
$tablica["imie"] = "Jan";
$tablica["nazwisko"] = "Kowalski";

//Informacje na temat człowieka
print_r($tablica);

echo 'jego budżet to 200zł';

echo "<br>";

//Co robimy

echo 'Chciałby zrobić naleśniki z ';

//$choice = 'naleśniki z jabłkami';

$choice = 'naleśniki z serem';

switch ($choice) {
        case 'naleśniki z jabłkami':
            echo 'jabłkami. Żeby je zrobić  musi udać się do sklepu aby kupić:';
            break;
        case 'naleśniki z serem':
            echo 'serem. Żeby je zrobić musi udać się do sklepu aby kupić: mąkę, jajka, wode, mleko, sól, masło, cukier ';
            break;
        }
        
// Cena przedmiotów

echo "<br>";


$numbers['mąka'] = 6;
$numbers['jajka'] = 2;
$numbers['woda'] = 2.5;
$numbers['mleko'] = 4;
$numbers['sól'] = 8;
$numbers['masło'] = 5.5;
$numbers['cukier'] = 9;

print_r($numbers);

echo "<br>";

//Obliczanie ceny wszystkich przedmiotów
echo 'Cena wszystkich produktów w zł: ' . $numbers['mąka'] + $numbers['jajka'] + $numbers['woda'] + $numbers['mleko'] + $numbers['sól'] + $numbers['masło'] + $numbers['cukier'];

echo "<br>";
echo 'Budżet Pana Jana wynosi 200zł.';


//Sprawdzanie, czy Pana Jana stać na zakupy
$budzet = 20;

if ($budzet >0 && $budzet >=200) {
        echo 'Więc Pana Jana stać na zakupy';
    }
if ($budzet >0 && $budzet <37) {
        echo 'Więc Pana Jana nie stać na zakupy';
    }

    echo "<br>";
    echo "<br>";
//Przepis na naleśniki
echo 'Pan Jan w końcu może zrobić naleśniki. Oto przepis krok po kroku:';

echo "<br>";
echo '-Mąkę wsypać do miski,

-dodać jajka, mleko, wodę, sól oraz cukier wanilinowy.


-Zmiksować na gładkie ciasto.

-Dodać roztopione masło i ponownie zmiksować.Naleśniki smażyć na dobrze rozgrzanej patelni z cienkim dnem np. naleśnikowej.

-Przewrócić na drugą stronę gdy spód naleśnika będzie już ładnie zrumieniony i ścięty.';

echo "<br>";
echo "<br>";

//Dodawanie jabłek
echo 'Gdy to zostanie zrobione należy sporządzić jabłka:';

echo '-obrać je
-pokroić na ćwiartki

-wykroić gniazda nasienne

-pokroić na plasterki lub kawałeczki

-Włożyć do większego garnka

-dodać masło, cynamon, cukier wanilinowy

-Wymieszać

-smażyć co chwilę mieszając przez ok. 15 minut, lub do czasu aż jabłka się rozpadną.

-doprawić cukrem.';

echo "<br>";
echo "<br>";

//Sprawdzanie czasu, ile trzeba smażyć jabłka

$time = '15min';

if ($time == '15min'){
    echo 'Idealnie usmażone jabłka';
}
if ($time =='20min'){
    echo 'Jabłka spalone';
}
if ($time == '10min'){
    echo 'Jabłka niedosmażone';
}


echo "<br>";

echo "<br>";

//Podawanie naleśników

echo 'Podawanie: ';

echo 'Naleśniki przekładać jabłkami (w razie potrzeby można je delikatnie podgrzać na patelni). Podawać np. z cukrem pudrem, syropem klonowym, bitą śmietaną, polewą.';

echo "<br>";
echo "<br>";

echo 'Smacznego';

echo "<br>";

//Sprawdzamy czy naleśniki smakowały
echo 'Czy naleśniki wyszły dobre? ';

$Jest_Smaczne = true;

//lub

//$is_active = false;

echo "<br>";
echo ($Jest_Smaczne) ? 'tak': 'nie';

?>