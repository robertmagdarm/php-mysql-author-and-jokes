<!DOCTYPE html>
<html>
<head>
    <title>Usuwanie autorów</title>
    <meta charset="ISO-8859-1" />
</head>
<style>
    #baner { position: absolute; width: 800px; height: 300px;

    }
</style>
<body>
   <h1>Dodawanie nowego autora</h1>

<?php if (isset($_POST['nazwa'])); ?>

<form action="
<?php
echo $_SERVER['PHP_SELF'];
?>"
method="post">
<p>Wpisz nazwisko autora:</p>
<label>Nazwisko: <input type="text" name="nazwa" /></label></br>
<label>Email:    <input type="text" name="email" /></label></br>
<input type="submit" value="AKCEPTUJ" />

</form>

   <?php 
    $dbcnx = @mysql_connect('localhost', 'root', 'root');
    if(!$dbcnx) { 
        exit('<p>Problem podczas połączenia z serwerem apache!</p>');
    }

    if(!@mysql_select_db('kawaly')) {
        exit('<p>Nie ma takiej bazy danych!</p>');
    }

    $name = $_POST['nazwa'];
    $email = $_POST['email'];

    $sql = "INSERT INTO autor SET nazwa='$name', email='$email'";

    if(@mysql_query($sql)){ 
        echo '<p>Dodano nowego autora!</p>';
    }
    else '<p>Problem z dodawaniem autora</p>' . mysql_error() . '<p> Uwaga!</p>';

   ?>

   <p><a href="<?php echo $_SERVER['PHP_SELF']; ?>">Dodaj nowego autora</a></p>



   <p><a href="authors.php">Powrót do listy autorów</a></p>
</body>

</html>