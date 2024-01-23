<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--boostrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Titel lijst</title>
</head>
<body>

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
  <li><a href="dashboard.php">dashboard</a></li>
  <li style="float:right"><a class="active" href="#about">About</a></li>
</ul>
    
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card mt-4">
                <div class="card-header">
                    <h4>vind hier alle klachten</h4>               
        </div>
        <div class="card-body">
            <div class="row">
            <div class="col-md-7">
                <form action="" method="GET">
            <div class="input-group mb-3">
            <input type="text" name="search" value="<?php if(isset($GET['search'])) {echo $_GET['search']; } ?>" class="form-control" placeholder="Search data">
            <button type="submit" class="btn btn-primary">Search</button>
            </div>
            </form>
            </div>
    </div>
</div>
</div>

<div class="col-md-12">
    <div class="card mt-4">
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Naam</th>
                        <th>Email</th>
                        <th>beschrijving</th>
                        <th>lengtegraad</th>
                        <th>breedtegraad</th>
                        <th>titel</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $conn = mysqli_connect("localhost", "root", "", "gemeenterotterdam");

                    if(isset($_GET['search']))
                    {
                        $filtervalues = $_GET['search'];
                        $query = "SELECT * FROM klachten WHERE CONCAT(naam,email,beschrijving,lengtegraad,breedtegraad,titel) LIKE '%$filtervalues%'";
                        $query_run = mysqli_query($conn, $query);

                        if(mysqli_num_rows($query_run) > 0)
                        {
                            foreach($query_run as $items)
                            {
                                ?>

                        <tr>
                        <td><?= $items['id']; ?></td>
                        <td><?= $items['naam']; ?></td>
                        <td><?= $items['email']; ?></td>
                        <td><?= $items['beschrijving']; ?></td>
                        <td><?= $items['lengtegraad']; ?></td>
                        <td><?= $items['breedtegraad']; ?></td>
                        <td><?= $items['titel']; ?></td>
                        </tr>

                                <?php

                            }

                        }
                        else
                        {
                            ?>

                    <tr>
                        <td colspan="4">No Record Found</td>
                    </tr>



                            <?php
                        }
                    }


                    ?>

                </tbody>
            </table>

    </div>
</div>

</div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@s.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
<div class="footer">
    <p>footer</p>
</div>
</p>
</body>
</html>




