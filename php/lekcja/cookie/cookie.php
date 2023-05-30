<?php

// nazwa / wartość / data - ilość sekund w dobie

function createCookie(string $name, string $value, int $expire, bool $httponly, bool $secure, int $SamSite) : string 
{
    if (isset($_COOKIE[$name])) {
        return 'Cookie already exists';
    }
    if(setcookie($name, $value, $expire, $httponly, $secure, $SamSite)){
        return 'Cookie created succesfully';
    }
    return 'Ca........... create cookie';
}

echo createCookie('ciastko', 'czekoladowe',time()+86400, false, true, );
echo createCookie('kanapka', 'zChlebem',time()+86400);
echo createCookie('Cyś', 'Kloc',time()+86400);
echo createCookie('elo', 'benc',time()+86400);
echo createCookie('benc', 'elo',time()+86400);
echo createCookie('bencencenc', 'elolololol',time()+86400);
