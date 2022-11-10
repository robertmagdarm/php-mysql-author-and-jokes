<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8" />

<title>BD Kawały</title>

<style>
        #strona { background-color: brown;
            background: -webkit-gradient(linear,left top,left bottom,color-stop(0,#afe5fa),color-stop(100%,brown));
            background: -webkit-linear-gradient(top,#afe5fa 0,brown 100%);
            background: linear-gradient(to bottom,#afe5fa 0,brown 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#afe5fa', endColorstr=rgb(165, 42, 42) GradientType=0);
        
        }
        #strona li { list-style-type: none; margin-left: 20px; margin: 10px; padding: 5px;}

        #bialy { background-color: white; padding: 10px;}

        #menu { width: 100%; background-color: white; padding:3px;}
        .menuitem { color: aliceblue; border: solid 1px #FF0000; padding-bottom: 4px; display: inline; width: 100px;
        margin: 3px; padding: 1px;
        }
        .menuitem a { list-style-type: none;}
        #Reklama { position: absolute; z-index:1; width="400"; height="200"; margin-left: 700px; }

        #left { padding: 20px; background-color: coral; margin: 10px; float: left;}
        #right {padding: 10px; background-color:chartreuse; margin: 5px; float: right;}
        #stopka {clear: both; padding: 5px; border-bottom: 1px solid #FF00f1;}
        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script>
                $(document).ready(function(){
                    $("#obraz1").click(function(){
                        $("Reklama").hide();
                                });
                    $("#obraz1").click(function(){
                        $("Reklama").show();
                                });
                    });
</script>
</head>
<body>
<div id="strona">
    <div id="Reklama">
    <img id="obraz1" src="glupi.jpg" width="360" height="190">
    </img><p>Witamy w kinie Wrocław!</p>
    </div>
<h1>System zarządzania treścią CMS</h1>
    <div id="menu">
   <ul>
   <li class="menuitem"><a href="jokes.php">Administrowanie kawałami</a></li>
   <li class="menuitem"><a href="authors.php">Administrowanie autorami</a></li>
   <li class="menuitem"><a href="cats.php">Administrowanie kategoriami kawałów"</a></li>
   
   </ul>
    </div>
    <img src="pazura.jpg" width="260" height="190" alt="cezary pazura"></img>
    <p>System zarządzania treścią CMS 2021r.</p>
</div>

<div id="stopka">
<p id="demo"></p>
<script>
var d = new Date();
document.getElementById("demo").innerHTML = d;
</script>
<p>Wykonał: RSM 2021 robertmagdarm@gmail.com</p></div>
</body>

</html>