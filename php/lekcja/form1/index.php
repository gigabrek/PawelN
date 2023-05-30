<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="style.css" type="text/css" />
    <!-- <script type="text/javascript" src="jsc.js"></script> -->
</head>
<body>
    <div id="container">
        <div id="top">
            BANER
        </div>
        <div id="menu">
            <div><a href="?page=java">Java</a></div><br>
            <div><a href="?page=php">PHP</a></div><br>
            <div><a href="?page=MySQL">MySql</a></div><br>
        </div>
        <div id="content">
            <div id="text">
                <?php
                    // echo var_dump($_GET);
                    // echo $_GET['akcja'];
                    // if($_GET['akcja'] == "QRA");
                    // echo "Jesteś klocem";

                if (isset($_GET['page'] )) {
                    $page = filter_var($_GET['page'], FILTER_DEFAULT);
                }
                '<br>';
                echo "<p>Zacznijmy od tego, którą gałąź informatyki mam zamiar omawiać, ponieważ pojęcie 'informatyka' jest bardzo wieloznaczne. W sumie to informatykiem w dzisiejszym skomputeryzowanym świecie może nazwać się prawie każdy - wystarczy, że potrafi się przetwarzać informacje znajdujące się w naszych komputerach, czyli np. przeszukiwać zawartość internetu przy pomocy wyszukiwarki.</p>
                <p>Ja mam zamiar przekazać Ci tajniki w jaki sposób efektywnie uczyć się programować. Co to tak naprawdę oznacza słowo PROGRAMOWANIE? Programowanie oznacza pisanie kodu w jakimś języku, czyli czymś za pomocą czego możemy komunikować się z naszą można by rzec bez nas głupią (przynajmniej na razie) maszyną PC (Personal Computer). Czyli programowanie można by porównać do pisania tejże tutaj lekcji, przy pomocy której komunikuję się z Tobą w języku polskim. </p>
                <p>(...)</p>
                <p>Jak się uczyć informatyki</p>";
                ?>
            </div>
        </div>
    </div>
</body>
</html>