<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wycieczki i urlopy</title>
</head>

<body>
    <style>
        body {
            font-family: Verdana, sans-serif;
            margin: 0 auto;
            background-color: #7CB9E8;
        }

        header,
        footer {
            background-color:#0066b2;
            font-size: 1vw;
            color: #002244;
            text-align: center;
            padding: 5px;
        }

        div#prawy,
        div#lewy {
            background-color: #318CE7;
            width: 25%;
            height: 500px;
            float: left;
            border-radius: 10px;
            text-align:center;        
        }
        img{
            justify-self:center;
        }
        #srodkowy {
            justify-content: center;
            background-color: #7CB9E8;
            width: 50%;
            height: 500px;
            float: left;
            display: grid;
            grid-template-columns: repeat(3, 101px);
            grid-template-rows: repeat(3, 2.5vw);
            row-gap: 1vw;
            grid-gap: 60px;
        }
        p{
            align-self:center;
        }

        #dane {
            background-color: #7CB9E8;
            color: #002244;
            clear: both;
            text-align:center;
        }

        #dane h3 {
            margin-top: 0;
        }

        h3 {
            text-align: center;
        }

        h3::first-letter {
            font-size: 150%;
        }

        img {
            height: 100px;
            padding: 7px;
        }

        img:hover {
            background-color: rgb(210, 180, 140);
        }
    </style>


    <header>
        <h1>BIURO PODRÓŻY</h1>
    </header>
    <div id="lewy">
        <h3>KONTAKT</h3>
        <a href="mailto:biuro@wycieczki.pl?subject=Napisz do nas!">Napisz do nas</a>
        <p>Telefon:555666777</p>
    </div>
    <div id="srodkowy">
        <br>
        <h3>GALERIA</h3><br>
        <?php
        $db = new mysqli('localhost', 'root', '', 'egzamin2');
        $db->set_charset('utf8');
        $sql =  "SELECT nazwaPliku, podpis FROM `zdjecia` ORDER BY podpis ASC";
        $result = $db->query($sql);
        while ($row = $result->fetch_assoc()) {
            $src = $row['nazwaPliku'];
            $alt = $row['podpis'];
            echo "<img src=\"$src\" alt=\"$alt\" style=''>";
        }
        ?>
    </div>
    <div id="prawy">
        <h3>PROMOCJE</h3>
        <table>
            <tr>
                <td>Jesień</td>
                <td>Grupa 4+</td>
                <td>Grupa 10+</td>
            </tr>
            <tr>
                <td>5%</td>
                <td>10%</td>
                <td>15%</td>
            </tr>
        </table>
    </div>
    <div id="dane">
        <h3>LISTA WYCIECZEK</h3>
        <?php
        $sql = "SELECT id,dataWyjazdu,cel,cena FROM `wycieczki` WHERE dostepna = 1";
        $result = $db->query($sql);
        while ($row = $result->fetch_assoc()) {
            $id = $row['id'];
            $dataWyjazdu = $row['dataWyjazdu'];
            $cel = $row['cel'];
            $cena = $row['cena'];
            echo "<p>$id. $dataWyjazdu, $cel, cena: $cena</p>";
        }
        $db->close();
        ?>
        <br>
    </div>
    <footer>
        <p>Stronę wykonał: Szymon Rzeszowski 1P</p>
    </footer>
</body>

</html>