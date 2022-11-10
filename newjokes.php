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
   <h1>Lista kawałów i żartów</h1>

   <?php 
    $dbcnx = @mysql_connect('localhost', 'root', 'root');
    if(!$dbcnx) { 
        exit('<p>Problem podczas połączenia z serwerem apache!</p>');
    }

    if(!@mysql_select_db('kawaly')) {
        exit('<p>Nie ma takiej bazy danych!</p>');
    }

    $authors = @mysql_query('SELECT * FROM kawal');

    while($autor = mysql_fetch_array($authors)){

    $id = $autor['id'];
    $tekst = $autor['tekstkawalu'];
    $data = $autor['datakawalu'];
    $idautora = $autor['idautora'];

    echo "<li>$id" . " " . "$tekst" . " " . "$data" . " " . "$idautora" . "</li>";
    }
   ?>

</br>
<div id="bialy">
   <a href="newjoke.php">Dodawanie nowego Kawału do tabeli z Kawałami - Kliknij!</a></br>
</div>
</div> 
</body>

</html>