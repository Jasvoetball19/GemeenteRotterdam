<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--boostrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Titel lijst</title>
</head>
<body>


    <!--navbar-->
<ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="klacht.php">Klacht</a></li>
  <li><a href="klachtenFormulier.php">KlachtenFormulier</a></li>
  <li><a href="klachtenKaart.php">KlachtenKaart</a></li>
  <li><a href="dashboard.php">dashboard</a></li>
  <li><a href="gps.html">livekaart</a></li>
  <li><a href="index.html">liveCoord</a></li>
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




