<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KlachtenFormulier</title>
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

<ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="klachtenFormulier.php">KlachtenFormulier</a></li>
  <li><a href="klachtenKaart.php">KlachtenKaart</a></li>
  <li><a href="overzicht.php">Overzicht</a></li>
  <li style="float:right"><a class="active" href="#about">About</a></li>
</ul>
    <h2>KlachtenFormulier</h2>
</head>
<body>

    

    <!--klachtenformulier aanmaken om klacht te sturen-->
    <form action="pagina.php" method="post">
        <!--naam invullen -->
        <label for="fnaam">Naam:</label></br>
        <input type="text" id="fnaam" name="fnaam" value=""><br>
        <!--email invullen-->
        <label for="femail">Email:</label></br>
        <input type="text" id="femail" name="femail" value=""><br>
        <!--omschrijving klacht-->
        <label for="omschrijving">Omschrijving:</label></br>
        <textarea rows="4" cols="50" name="comment" form="usrform">
            Enter text here...</textarea>
        <br>
        <label for="fbreedtegraad">Breedtegraad:</label></br>
        <input type="text" id="fbreedtegraad" name="fbreedtegraad" value=""><br>
        <label for="lengtegraad">Lengtetegraad:</label></br>
        <input type="text" id="lengtegraad" name="lengtegraad" value=""><br>
        <form action="">
        <label for="foto">Foto:</label></br>
        <textarea rows="10" cols="30" name="comment" form="usrform">
            Enter text here...</textarea>
        <br>
        <label for="title">Titel:</label></br>
        <input type="text" id="title" name="titel" value=""><br>
        <br>
        <label for="status">Status:</label></br>
        <input type="text" id="status" name="status" value=""><br>
        <br>
        <input type="submit">
        </form>
        <br></br>
        <img src="images/skyline-18.jpg" alt="Trulli" width="400" height="333">

        <div class="footer">
            <p>footer</p>
        </div>
</body>
</html>