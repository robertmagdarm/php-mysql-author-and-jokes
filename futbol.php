<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css" type="text/css" />
<title>Rozgrywki futbolowe</title>
</head>
<body>
    <div id="strona">
    <div id="baner">
        <h2>Światowe rozgrywki piłkarskie</h2>
        <img src="obraz1.jpg" width="930px" height="310px" alt=""></img>
    </div>
    <div id="mecze">
    <?php 
        //skrypt podstawowy wszystkie informacje o zawodnikach
        $link = mysqli_connect("127.0.0.1", "root", "root", "egzamin");

        if (!$link) {
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit;
        }

   
// Perform query
    $q = "SELECT zawodnik.id, zawodnik.nazwisko, zawodnik.imie, zawodnik.pozycja_id, pozycja.nazwa FROM zawodnik, pozycja WHERE zawodnik.pozycja_id = pozycja.id";
    $result = mysqli_query($link, $q) or die("Problemy z odczytem danych!");
       
	while($row = mysqli_fetch_array($result)){
        $id = $row['id'];
        $nazwisko = $row['nazwisko'];
        $imie = $row['imie'];
        $pozycja = $row['pozycja_id'];
        $nazwa = $row['nazwa'];

        echo "<li>$id" . " " . "$nazwisko" . " " . "$imie" . " " . "$pozycja" . " " ."$nazwa" . "</li>";

        }
        ?> 
<!-- Skrypy 1 rozgrywki -->
        <?php 
         $linkb = mysqli_connect("127.0.0.1", "root", "root", "egzamin");

         if (!$linkb) {
         echo "Error: Unable to connect to MySQL." . PHP_EOL;
         echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
         echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
         exit;
         }
 
    
 // Perform query
     $qs2 = "SELECT * FROM rozgrywka";
     $resultb = mysqli_query($linkb, $qs2) or die("Problemy z odczytem danych!");
        
     while($row = mysqli_fetch_array($resultb)){
         $idb = $row['id'];
         $zespol1 = $row['zespol1'];
         $zespol2 = $row['zespol2'];
         $wynik = $row['wynik'];
         $data = $row['data_rozgrywki'];
 
         echo "<div class='mecz'><section>" . " " . "<h3>" . $zespol1 . " - " . $zespol2 . "</h3></br>" . "<h4>" . $wynik . "</h4></br>" . " " . $data . "</section></div>";
 
         }
        
        ?>
       
    <div id="lewy">
<!--nowy-->
<?php if(!isset($_GET['id']));  ?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">

<label>Nr zawodnika: <input type="text" name="pozycja_id" /></label></br>
<input type="submit" value="Dalej" />
</form> 



   
    <p>Zawodnik posiada pozycję: 
        <?php 
    echo $_GET['pozycja_id']; 
    //teraz zmienna do uzycia jako element zapytania
    $nrpozycji = $_GET['pozycja_id']; //nr pozycji
    $qid = "SELECT zawodnik.id, zawodnik.nazwisko, zawodnik.imie, pozycja.nazwa FROM zawodnik, pozycja WHERE zawodnik.pozycja_id = pozycja.id AND pozycja.id = $nrpozycji";
    $resultb = mysqli_query($link, $qid) or die("Problemy z odczytem danych!");
       
	while($row = mysqli_fetch_array($resultb)){
        $id = $row['id'];
        $nazwisko = $row['nazwisko'];
        $imie = $row['imie'];
        //$pozycja = $row['pozycja_id'];
        $nazwa = $row['nazwa'];

        echo "</br><li>$id" . " " . "$nazwisko" . " " . "$imie" . " " . "$nazwa" . "</li>";

        }
    
    
    ?></p>

    

    </div> <!-- lewy -->
    <div id="prawy">
        <img src="zad1.png" width="366" height="402" alt="Autor" />
        <p>Autor: 00000000000</p>
    </div><!-- prawy -->
    </div><!-- glowny-->

    </div> <!-- strona -->
</body>
</html>