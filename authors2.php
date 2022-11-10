<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8" />

<title>Strona z menu 2F</title>

<style>
        #strona { background-color: brown;
            background: -webkit-gradient(linear,left top,left bottom,color-stop(0,#afe5fa),color-stop(100%,brown));
            background: -webkit-linear-gradient(top,#afe5fa 0,brown 100%);
            background: linear-gradient(to bottom,#afe5fa 0,brown 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#afe5fa', endColorstr=rgb(165, 42, 42) GradientType=0);
        
        }
        #strona li { list-style-type: none; margin-left: 20px;}

        #strona table td { border: 1px solid grey;}
        .nazwa { border: 1px solid grey; witdh: 120px;}

        #bialy { background-color: white; padding: 10px;}

        #menu { width: 600px; background-color: white;}
        .menuitem { color: aliceblue; border: solid 1px #FF0000; padding-bottom: 4px; display: inline; width: 100px;
        margin: 3px; padding: 1px;
        }
        .menuitem a { list-style-type: none;}

        #left { padding: 20px; background-color: coral; margin: 10px; float: left;}
        #right {padding: 10px; background-color:chartreuse; margin: 5px; float: right;}
        #stopka {clear: both; padding: 5px;}
        </style>
</head>

<body>
<div id="strona">
    <div id="menu">
        <ul>
            <li class="menuitem"><a href="index.php">Strona główna</a></li>
            <li class="menuitem"><a href="authors.php">Autorzy</a></li>
            <li class="menuitem"><a href="jokes.php">Kawały</a></li>
            <li class="menuitem"><a href="categories.php">Kategorie żartów</a></li>
            <li class="menuitem"><a href="kontakt.php">Kontakt</a></li>
        </ul>
    </div>
   <h1>Administrowanie autorami</h1>
   <table><tbody>
   <?php 
    $dbcnx = @mysqli_connect('localhost', 'root', 'root', 'kawaly');
    if(!$dbcnx) { 
        exit('<p>Problem podczas połączenia z serwerem apache!</p>');
    }

  $sql = "SELECT * FROM autor";

	$result = mysqli_query($dbcnx, $sql);

/* numeric array */
while($row = mysqli_fetch_array($result)){
printf("%s (%s) %S\n",  $row[0], $row[1], $row[2]);

/* associative array */ 

printf("%s (%s) %s\n", $row["id"], $row["nazwa"], $row["email"]);
}

// Free result set
$result -> free_result();

$mysqli -> close();

   ?>
    </tbody></table>
</br>
<div id="bialy">
   <a href="newautor.php">Dodawanie nowego Autora - Kliknij!</a></br>
</div>
</div> 
</body>

</html>