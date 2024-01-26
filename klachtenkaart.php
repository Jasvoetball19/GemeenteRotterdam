<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
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
  <Li><a href="klacht.php">Klacht</a></li>
  <li><a href="klachtenFormulier.php">KlachtenFormulier</a></li>
  <li><a href="klachtenKaart.php">KlachtenKaart</a></li>
  <li><a href="dashboard.php">dashboard</a></li>
  <li><a href="gps.html">livekaart</a></li>
  <li><a href="index.html">liveCoord</a></li>
  <li style="float:right"><a class="active" href="#about">About</a></li>
</ul>
    


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"/>
   
    <title>Maps Project</title>

    <style>
        #map{
            height: 400px;
            width: 700px;
            margin: 5rem auto;
        }
    </style>
</head>
<body>

    <div id="map"></div>
    
     <!-- Make sure you put this AFTER Leaflet's CSS -->
  <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
  <script src="main.js"></script>

</body>
</html>

<script>
var map = L.map('map').setView([51.921290, 4.471850], 13);

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

L.marker([51.921337, 4.469414]).addTo(map)
    .bindPopup('tak afgebroken')
    .openPopup();

L.marker([51.922450, 4.470427]).addTo(map)
    .bindPopup('it is a nice day')
    .openPopup();

L.marker([51.922860, 4.483926]).addTo(map)
    .bindPopup('it is a nice day')
    .openPopup();
</script>

<div class="footer">
            <p>footer</p>
        </div>
</html>