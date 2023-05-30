<?php

//$shopping_bag[0] = 52;
//$shopping_bag[1] = 12;
//$shopping_bag[2] = 3;

//$shopping_bag['pizza'] = 52;
//$shopping_bag['woda'] = 12;
//$shopping_bag['sos'] = 3;

//--------------------------------------------------
//operatory ARYTMETYCZNE

//$a = 1;
//$a = $a +1;
//$a++; //Inkrementacja
//$a += 10;

//$a = $a - 1; //Dekrementacja
//$a--;
//$a -= 10;

//Dzielenie
//$a/=2

//Mnożenie
//$a*=2;

//Tak moge
//$a++; //Postinkrementacja; gdyby byłó z przodu to jest pre
//$a--; //Postdekrementacja; gdyby było z przodu to jest pre

//Tak nie moge
//$a**;
//$a//;

//echo $a;

//--------------------------------------------------
//Instrukcja warunkowa

//$a = 2;
//$b = 0;

//$a = 8;
//$b = 4;

//$result = $a / $b;
//if - jeżeli
//else - w przeciwnym razie
//() - warunek
//if($b != 0) - jeżeli b jest różne od zera (!= -jest różne)
//else 
    //echo 'Nie wolno dzielić przez 0'; -w przeciwnym wypadku zrób to

//if ($b != 0) {
//    $result = $a / $b;
//    echo 'Wynik dzielenia ' . $result;
//} else {
//    echo 'Nie wolno dzielić przez 0';
//}

//------------------------------------------------
//Instrukcja warunkowa if, else if

//$a = 2;
//$a = 63;
//$a = 120;

//Instrukcja warunkowa if złożona z dwóch warunków
//if ($a >0 && $a <30) {
//    echo 'Zmienna a mieści się w przedziale od 1 do 29';
//} else if ($a >= 50 && $a <=100) {
//    echo 'Zmienna a mieści się w przedziale od 50 do 100';
//} else{
//    echo 'Zmienna nie mieści się w żadnym z powyższych przypadków';
//}

//if ($a >0 && $a <30) -jeżeli zmienna a jest większa od 0 i mniejsza od 30

//else if ($a >= 50 && $a <=100) -inaczej, jeżeli zmienna a jest większa lub równa 50 oraz mniejsza lub równa 100

//if ($a >0 && $a <30) to to samo co if($a >0 || $a <30)

//-----------------------------------------------------
//Instrukcje warunkowe a wartości logiczne TRUE i FALSE

//$is_active = true;
//
//if($is_active == true) {
//    echo 'Opcja aktywna';
//} else {
//    echo 'Opcja nieaktywna';
//}

//Skrócony warunek jeżeli mam w nawiasach () true
//$is_active = true;
//
//if($is_active) {
//    echo 'Opcja aktywna';
//} else {
//    echo 'Opcja nieaktywna';
//}

//---------------------------------------------------------
//Skrócony zapis instrukcji warunkowych

//Znak zapytania '?' pełni rolę if'a
//To co jest po lewej stronie dwukropka - to true
//To co jest po prawej stronie dwukropka - to false

//$is_active = true;
//lub
//$is_active = false;

//echo ($is_active) ? 'Opcja aktywna': 'Opcja nieaktywna';

//---------------------------------------------------------
//Instrukcja warunkowa switch

//case - badamy konkretne przypadkki

//$choice = 1;
//$choice = 2;
//$choice = 3;

//switch ($choice) {
//    case 1:
//        echo 'Wybrałeś opcje 1';
//        break;
//    case 2:
//        echo 'Wybrałeś opcje 2';
//        break;
//    case 3:
//        echo 'Wybrałeś opcje 3';
//        break;
//}

//Co jeśli wartość zmiennej jest poza zakresem?
//$choice = 'Siemano';

//switch ($choice) {
//    case 1:
//        echo 'Wybrałeś opcje 1';
//        break;
//    case 2:
//        echo 'Wybrałeś opcje 2';
//        break;
//    case 3:
//        echo 'Wybrałeś opcje 3';
//        break;
//    default:
//        echo 'Nie ma takiego rozwiązania';
//        break;
//}

//Kolejny przykład z użyciem stringa a nie number

//$choice = 'nowa_gra';
//$choice = 'wczytaj_gre';
//$choice = 'wyjdz_z_gry';
/*
switch ($choice) {
    case 'nowa_gra':
        echo 'Zaczynam gre';
        break;
    case 'wczytaj_gre':
        echo 'Wybierz_slot';
        break;
    case 'wyjdz_z_gry':
        echo 'Wychodzę_z_gry';
        break;
    default:
        echo 'Nie ma takiej obcji';
        break;
}

150 linii 2x 'case' 2x 'else if' użyć wszystkie elementy na których dzisiaj bazowaliśmy, nie używać pętli, wykazać się instrukcjami warunkowymi, wymyślić temat
*/

//======================================================

//Pętle
//Pętla - wielokrotna ITERACJA po: fragmencie kodu, TABLICY. To wykonanie interacji po kodzie, w którym jest spełniony warunek

//Pętla WHILE
//while - dopóki
//Dopóki zmienna a bedzie mniejsza od 10, to wypisuj zmienna a, po każdym wpisaniu przejdź do nowej linii

/*
$a = 0;

while($a < 10) {
    echo $a. '<br>';
    $a++;
}
*/

//łączenie warunków
/*
$a = 0;

while($a > 10|| $a < 5) {
    echo $a. '<br>';
    $a++;
*/

//FOR
//Silnie zawsze zaczynami liczyc od 1
//for - czyli DLA, w naszym przykładzie dla zmiennej $i - ITERATOR, czyli $i = 1
//Po średniku zapisuje WARUNEK, czyli DOPÓKI $i <= $liczba
//Po kolejnym sredniku to wtedy zwiększaj $i, czyli $i++, czyli o 1   

// $liczba = 4;
// $silnia = 1;

// for($i = 1; $i <= $liczba; $i++) {
//     $silnia *= $i;
// }

//for ($i = 0; $i < ; $i++) {
   //#code 
//}

//Silnia z liczby 4 to 1*2*3*4 co daje 24

/*
$liczba = 4;
$silnia = 1;

Co mam w poniższym nawiasie: ITERATOR, WARUNEK, INKREMENTACJA
for($i = 1; $i <= $liczba; $i++) {
    $silnia *= $silnia * $i; Po niżej to samo
    $silnia *= $i;
}

echo $silnia;
*/

//Silnia pętli WHILE
//W przypadku silni bardziej pasuje pętla FOR bo mam deklaracje wewnątrz a nie w pętli while na zewnątrz

/*
$liczba = 4;
$silnia = 1;

$i = 1;
while ($i <= $liczba) {
    $silnia *= $silnia * $i; Po niżej to samo
    $silnia *= $i;
    $i++;
}

echo $silnia;
*/

//Pętla DO WHILE
//Zmieniam while na do while
//DO - wykonaj blok kodu zanim spradzisz warunek
//Wykona sie zawsze przynajmniej raz

/*
$liczba = 4;
$silnia = 1;

$i = 1;

do {
    $silnia *= $silnia * $i; Po niżej to samo
    $silnia *= $i;
    $i++;
} while ($i <= $liczba);

echo $silnia;
*/

//Pętla FOREACH
//FOREACH - czyli dla każdego elementu z tablicy np $people as czyli JAKO $person, czyli osoba, czyli konkretny element z tablicy
//W rozbudowanych projektach
//Operuje na tablicach jedno i wielu wymiarowych
//Zadanie: chcę wyświetlić z tablicy imiona do kazdego dodajac : z Gliwic

//Iteracja po tablicy JEDNOWYMIAROWEJ

/*
$people = ['Paweł','Iza','Kasia','Ola','Marta','Tomek']

DEFINICJA
foreach (variable as $key => $value) {
   #code

Zmienna $people przy PIERWSZEJ ITERACJI ma wartość Paweł, przy kolejnej Iza


foreach($people as $person){
    echo $person. 'z Gliwic'.'<br>';
}
*/

//Iteracja po tablicy WIELOWYMIAROWEJ
//FOREACH - dla każdego samochodu z tablicy $cars jako samochód => $part; dla każdego elementu z tabklicy samochody $cars as czyli jako samochód tj. $car czyli jako klucz (kluczem jest samochód)
//$part - oznacza że będziemy wypisywać wartości z klucza (w naszym przypadku klucza engine)

/*
$cars = [
    'Skoda' =>[
        'engine' => '1.1',
        'fuel' => 'pb95',
        'color' => 'blue'
    ],
    'Ford' =>[
        'engine' => '1.4',
        'fuel' => 'diesel',
        'color' => 'red'
    ]
];

foreach ($cars as $car => $part) {
    echo $car .''. $part['engine'].'<br>'; 
}
*/

//PĘTLA W PĘTLI 
//=> oznacza, że chcemy wyświetlić klucz, czli $country i wartość klucza czyli => $names, a dokładniej chcę iterować po kluczu i wartościach

// $country_names = [
//     'France' =>[
//         'Sabine',
//         'Suzane',
//         'Janneth'
//     ],
//     'Poland' =>[
//         'Paweł',
//         'Maciej',
//         'Iza'
//     ],
//     'Germany' =>[
//         'Paweł',
//         'Maciej',
//         'Iza'
//     ]
//     ];

// foreach ($country_names as $country => $value) {
//     echo 'Names od '. $country. '<br>';
//     foreach ($names as $first_name) {
//         echo $first_name. '<br>';
//     }
// }

// //Zrobiłem foreach w środku pętli foreach

// //petle, zagniezdzenia, foreach, instrukcje warunkowe,
// ?>
// <?php
// echo (54 * 423); // Mniej popularne



// //komentarze liniowe ctrl /
// /*
// komentarze blokowe alt shift a
// */

// // $a = 2;
// // $b = 4.2;
// // $c = "Jesse";
// // $d = false;
// // $e = '<strong> Jakiś ciąg znakow </strong>';
// // $f = '<strong> Jakiś ciąg znakow </strong>';
// // $g = '<strong> Mam na imię $c </strong>';

// // echo $a . '<br>';
// // echo $d . '<br>';


// /* echp 'test' + 'test'; - nie dodajemy stringów, lecz je łączymy za pomocą kropki */
// $a = 2;
// $b = 3;
// $c = 4;


// echo $c .= $a . '<br>';
// echo $c = $c . $a . '<br>';

// // Tablice
// // $numbers = []; // utworzenie pustej tablicy

// // $numbers[0] = 125;
// // $numbers[1] = 260;
// // $numbers[2] = 520;
// // $numbers[3] = 1000;
// // $numbers[10] = 2000;
// // echo $numbers[0]
// // echo $numbers[3] blad, wartość spoza inddexu
// // echo $numbers[10];
// //              Teoria
// // $numbers[12, 19, 26, 32] // wartości
// // $numbers[0, 1, 2, 3] // klucze

// $numbers[] = 125;
// $numbers[] = 260;
// $numbers[] = 520;
// $numbers[] = 1000;
// $numbers[] = 2000;

// // echo $numbers[3];
// // echo $numbers[0];
// // var_dump($numbers);
// $implode_result = implode(", ", $numbers);
// // echo $implode_result;

// /* funckja explode() rozbija sringa na tablicę */
// $explode_result = explode(";", $implode_result);
// echo $explode_result[0];

// // Doawane na tablicach
// echo 'Wynik: ' . $numbers[0] + $numbers[1];

// // Tablice asolacyjne - ako klucze mogę wpisywać stringi
// // Zwhykła tablica
// $tablica[0] = 2;
// // Tablica asolacyjna
// $tablica_asolacyjna['Liczba'] = 12;

// // print ($tablica_asolacyjna[0]); // blad b klyczem nie jest liczba
// print ($tablica_asolacyjna['Liczba']);

// // Tablica wielowymiarowe
// $shopping_bag['0']['pizza'] = 52;
// $shopping_bag['1']['woda'] = 5;
// $shopping_bag['2']['sos'] = 3;

// print_r($shopping_bag);

// $bigtablica['0']['Woda']['baza danych'] = 50333;
// $bigtablica['1']['jedzenie']['encja'] = 5045;
// $bigtablica['2']['cola']['krotka'] =506;
// $bigtablica['3']['hotdog']['atrybut'] =50;

// print_r($bigtablica);

// funckce w php

// $text = "Php 8 nie jest ok";

// echo $text;
// echo '<br>';
// //funckcja wbudowana strtoupper()
// echo strtoupper($text);

// echo '<br>';

// // funkcja strlen()
// echo 'zmienna text zawiera '.strlen($text) . 'znakow';


// // funckja trim
// //A.
// echo 'Zmienna text zawiera '. trim(strlen($text)) . 'znakow';

// //funckje wykonuja sie w kolejnosci od srodka

// // II. definiowanie włąsnych funkcji

// function dodaj($a, $b) {//parametry
//     return $a + $b;
// }

// $a = 2;
// $b = 3;

// echo "$a + $b = " . add($a, $b) . '<br>'; //argumenty tj. wartosc

// // przyklad 3 to jest zle!
// function add($x, $y) { //parametry
//     $total = $x + $y;
//     return $total;
// }

// // echo "1 + 16 = " . add(1,16) . '<br>'; //argumenty tj wartosci

// // function zniszka()- funckja pokazjue cene po zniszcze procentowej
// // $price - cena bazowa
// // $żniszka - sniszka, procentowy rabat

// const CURRENCY = 'zł';

// function discountedPrice($price, $żniszka){
//     return $price - ($price * ($żniszka /100));
// }

// $base_price = 100;
// $presentage_discount = 50;

// $discounted_price = discountedPrice($base_price, $presentage_discount);

// echo discountedPrice($base_price, $presentage_discount);

// // dodaje funkcje wbudowaną number_format()
// echo $discounted_Price . CURRENCY;//dzieki temu moge wyswietlic wartosc i walute

// // przekazywanie przez referencje
// // przekazwyanie zmiennej jako parametrow funkcji

// $x = 20;

// function multiple(&$number) {
//     return $number *= 2;
//     $number *= 2;
// }

// echo 'Oryginalna wartosc x: ' .$x . '<br>'; //wartosc x przed wywolaniem funckji

// echo multipleNumber($x) . '<br>';

// funkcje anonimowe

// $x =[1,2,3,4];

// foreach ($x as $number){
//     echo $number . ' , ';
// }

// echo '<br>';
// $new_x = array_map(function($numbers){
//     return $numbers *= 4;
// }, $x);

// foreach($new_x as $new_number){
//     echo $new_number . ' , ';
// }

// $new_x = array_map(function($numbers){
//     return $numbers /= 3;
// }, $x);
// foreach($new_x as $new_number){
//         echo '<br>';
// }
    
// ===========================================================
// Typowanie argumentow


// $a = 2;
// $b = 5;

// function addTwoNumbers(float $a, float $b) {
//     return $a + $b; 
// }

// echo addTwoNumbers($a, $b);

// // przyklad b


// $a = "dwa";
// $b = 5;

// function addTwoNumbers(float $a, float $b) {
//     return $a + $b; 
// }

// echo addTwoNumbers($a, $b);

// // typowanie zwracanej wartości

// declare(strict_types=1);

// $a = "dwa";

// $b = 2;

// function addTwoNumbers(int $a, int $b) : int {
//     return $a + $b;
// }

// echp addTwoNumbers($a, $b) : int;


// funkcje wbudowane


// zmienna a teks z pustymi znakami
// zmienna funkcja wbudowana dlugosc zmiennej a
// 1 bedzie a aw 2 bedzie slowo sprawdzajace czy teks zawiera sie z zmiennej a
// str_contains() w if'ie
// str_contains($a, " ")

// $a = "   kitek";

// if(str_contains($a, 'tek')){
//     echo 'Zmienna a zawiera słowo tek';
// }else {
//     echo "nie zawiera słowa tek";
// }

// echo 'strlen' . strlen($d) . PHP_EOL;

// $e = "LeBaguette pracuje w kodzie php";
// echo "trim: " . trim($e) . PHP_EOL;
// echo "str_replace: " . str_replace("p", "9", $e) . PHP_EOL;
// echo "str_replace: " . str_replace("jest fajnie", "nie jesr fajnie", $e) . PHP_EOL;

$a =  20;
$b = 25;
echo sqrt($a);
// echo sqrt($b);

?>