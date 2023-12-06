<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <style>
        /* inhoud van de navbar */
        ul {
            list-style-type: none; 
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: lightblue;
        }
        /* zorgt ervoor dat tekst inhoud links staat */
        li {
            float: left;
        }
        /* inhoud van de navbar  */
        li a {
            display: block;
            color: black;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        /*  */
        li a:hover:not(.active){
            background-color: #04AA6D;
        }
        /* */
        .active {
            background-color: #04AA6D ;
        }
        .column{
            background-color: lightgray;
        }
        .footer{
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: lightblue;
            color: white;
            text-align: center;
        }
    </style>

<!--navbar-->
<ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="klachtenFormulier.php">KlachtenFormulier</a></li>
  <li><a href="klachtenKaart.php">KlachtenKaart</a></li>
  <li><a href="overzicht.php">Overzicht</a></li>
  <li style="float:right"><a class="active" href="#about">About</a></li>
</ul>

</head>
<body>
<div class="row">
    <div class="column">
    <h2>Klachten</h2>
    <p style="color:dodgerblue">Welkom op onze website. Wanneer je een klacht hebt over de omgeving in Rotterdam, kan je via deze website een klacht sturen. Dit kan via het klachtenFormulier. De beheerder kan daarna de plek van de klacht zien op de kaart.</p>
</div>

<!--navbar lijst-->
<a href="index.php">Home</a>
<br>
<a href="klachtenFormulier.php">KlachtenFormulier</a>
<br>
<a href="klachtenKaart.php">KlachtenKaart</a>
<br>
<a href="overzicht.php">Overzicht</a>
</ul>
<br></br>
<img src="images/rotterdam-1611943_1280.jpg" alt="Trulli" width="400" height="333">
<img src="images/rotterdam-102704_1280.jpg" alt="" style="float:left;width:400px;height:333px;">
<img src="images/skyline-18.jpg" alt="" style="float:left;width:400px;height:333px;">
<br>
<br>
<div class="footer">
    <p>footer</p>
</div>
</p>



</body>
</html>