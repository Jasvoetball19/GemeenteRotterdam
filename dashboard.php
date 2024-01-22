<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
     /* inhoud van de navbar */
     #text {
            list-style-type: none; 
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: lightblue;
        }
        /* zorgt ervoor dat tekst inhoud links staat */
      #text  li {
            float: left;
        }
        /* inhoud van de navbar  */
      #text  li a {
            display: block;
            color: black;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        /*  */
      #text  li a:hover:not(.active){
            background-color: #04AA6D;
        }
        /* */
      #text  .active {
            background-color: #04AA6D ;
        }
      #text  .column{
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
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 12px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myUL {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

#myUL li a {
  border: 1px solid #ddd;
  margin-top: -1px; /* Prevent double borders */
  background-color: #f6f6f6;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  color: black;
  display: block
}

#myUL li a:hover:not(.header) {
  background-color: #eee;
}
</style>
</head>
<body>


<ul id="text">
  <li><a href="index.php">Home</a></li>
  <li><a href="klacht.php">Klacht</a></li>
  <li><a href="klachtenFormulier.php">KlachtenFormulier</a></li>
  <li><a href="klachtenKaart.php">KlachtenKaart</a></li>
  <li><a href="dashboard.php">dashboard</a></li>
  <li style="float:right"><a class="active" href="#about">About</a></li>
</ul>

<h2>dashboard 5 meest recente klachten</h2>

<br>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">

<ul id="myUL">
  <li><a href="#">1 jel K. Dick 1968 2 3 klacht</a></li>
  <li><a href="#">2 knb 234@w stank 1 2 klacht</a></li>

  <li><a href="#">3 weeli 234er46 kapotte lantaarn 4 7 klacht</a></li>
  <li><a href="#">4 wendf weu438 boom op de weg 7 8 klacht</a></li>

  <li><a href="#">5 ser w45@1 tak afgebroken 1 6 klacht</a></li>
</ul>

<script>
function myFunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
</script>


<br>

<form action="/action_page.php">
  <input type="file" id="myFile" name="filename">
  <input type="submit">
</form>




</div>
    <div class="footer">
            <p>footer</p>
        </div>

</body>
</html>




