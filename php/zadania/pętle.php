
<?php

//Zadanie Domowe Pętle

echo "Oto symulator pokazujący statystyki samochodów";

echo '<br>';

echo "Aby rozpocząć wpisz w kodzie odpowiednie parametry samochodu";

echo '<br>';
echo '<br>';

$auto1 = true;
$działa = true;
$Punktacja = 0;
$statystyki = true;

$Szybkość_Maksymalna1 = 455;
$Rozpędzenie_Do_100_1 = 4;

$Szybkość_Maksymalna2 = 388;
$Rozpędzenie_Do_100_2 = 5;

$Szybkość_Maksymalna3 = 320;
$Rozpędzenie_Do_100_3 = 2;

$Szybkość_Maksymalna4 = 524;
$Rozpędzenie_Do_100_4 = 2;

if($statystyki) {
    $samochody = [
        'Bugatti' =>[
            'Moc silnika' => '5',
            'Paliwo' => 'pb95',
            'Szybkość maksymalna' => $Szybkość_Maksymalna1,
            'Rozpędzenie' => $Rozpędzenie_Do_100_1
        ],
        'Ferarri' =>[
            'Moc silnika' => '7',
            'Paliwo' => 'pb98',
            'Szybkość maksymalna' => $Szybkość_Maksymalna2,
            'Rozpędzenie' => $Rozpędzenie_Do_100_2
        ],
        'Lamborghini' =>[
            'Moc silnika' => '4',
            'Paliwo' => 'pb96',
            'Szybkość maksymalna' => $Szybkość_Maksymalna3,
            'Rozpędzenie' => $Rozpędzenie_Do_100_3
        ],
        'Koenigsegg' =>[
            'Moc silnika' => '8',
            'Paliwo' => 'pb92',
            'Szybkość maksymalna' => $Szybkość_Maksymalna4,
            'Rozpędzenie' => $Rozpędzenie_Do_100_4
        ]
        ];
    while($działa == true){
     if(is_int($Szybkość_Maksymalna1) == false || is_int($Rozpędzenie_Do_100_1) == false) {
         echo "Najpierw wpisz wlaściwości pojazdu Bugatti". "<br>"."<br>";
         $działa = false;
     }
     if(is_int($Szybkość_Maksymalna2) == false || is_int($Rozpędzenie_Do_100_2) == false) {
        echo "Najpierw wpisz wlaściwości pojazdu Ferarri"."<br>"."<br>";
        $działa = false;
    }
    if(is_int($Szybkość_Maksymalna3) == false || is_int($Rozpędzenie_Do_100_3) == false) {
        echo "Najpierw wpisz wlaściwości pojazdu Lamborgini"."<br>"."<br>";
        $działa = false;
    }
    if(is_int($Szybkość_Maksymalna4) == false || is_int($Rozpędzenie_Do_100_4) == false) {
        echo "Najpierw wpisz wlaściwości pojazdu Koenigsegg"."<br>"."<br>";
        $działa = false;
    }
    break;
    };
    
    for ($działa = 150; $działa > 10; $działa++) {
        echo "Poziom auta 1 (Bugatti)= $działa";
        break;
    }
    echo'<br>';
    for ($działa = 211; $działa > 10; $działa++) {
        echo "Poziom auta 2(Ferarri)= $działa";
        break;
    }
    echo'<br>';
    for ($działa = 124; $działa > 10; $działa++) {
        echo "Poziom auta 3 (Lamborgini)= $działa";
        break;
    }
    echo'<br>';
    for ($działa = 223; $działa > 10; $działa++) {
        echo "Poziom auta 4 (Koenigsegg)= $działa";
        break;
    }
    echo'<br>';
    
    echo'<br>';
    
    foreach ($samochody as $samochód => $część) {
        echo $samochód .'. Jego moc silnika to: '. $część['Moc silnika'].'<br>'; 
    }
    echo '<br>';
    foreach ($samochody as $samochód => $część) {
        echo $samochód .'. Jego paliwo: '. $część['Paliwo'].'<br>'; 
    }
    echo '<br>';
    foreach ($samochody as $samochód => $część) {
        echo $samochód .'. Jego rozpędzenie do setki to: '. $część['Rozpędzenie'].' s'.'<br>'; 
    }
    echo '<br>';
    foreach ($samochody as $samochód => $część) {
        echo $samochód .'. Jego szybkość maksymalna to: '. $część['Szybkość maksymalna'].' km/h'.'<br>'; 
    }
    
    echo'<br>';
    
    do {
        $Punktacja += $Szybkość_Maksymalna1 / 10;
        $Szybkość_Maksymalna1 -= 100;
    } while ($Szybkość_Maksymalna1 > 0);
    
    echo "Punktacja 1 auta: ".$Punktacja;
    echo'<br>';
    
    $Punktacja = 0;
    
    do {
        $Punktacja += $Szybkość_Maksymalna2 / 10;
        $Szybkość_Maksymalna2 -= 100;
    } while ($Szybkość_Maksymalna2 > 0);
    
    echo "Punktacja 2 auta: ".$Punktacja;
    echo '<br>';
    
    $Punktacja = 0;
    
    while ($Szybkość_Maksymalna3 > 0){
        $Punktacja += $Szybkość_Maksymalna3 / 10;
        $Szybkość_Maksymalna3 -= 100;
    };
    
    echo "Punktacja 3 auta: ".$Punktacja;
    echo'<br>';

    $Punktacja = 0;
    
    while ($Szybkość_Maksymalna4 > 0){
        $Punktacja += $Szybkość_Maksymalna4 / 10;
        $Szybkość_Maksymalna3 -= 100;
        break;
    };
    
    echo "Punktacja 4 auta: ".$Punktacja;
    if($Punktacja){
        
    }
};
?>