<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>home</title>
   
   
<!--navbar-->
<ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="klacht.php">Klacht</a></li>
  <li><a href="klachtenFormulier.php">KlachtenFormulier</a></li>
  <li><a href="klachtenKaart.php">KlachtenKaart</a></li>
  <li><a href="dashboard.php">dashboard</a></li>
  <li style="float:right"><a class="active" href="#about">About</a></li>
</ul>

<?php
/*include model.php here*/
include 'model.php';

$obj = new Model();

/*insert record*/
if(isset($_POST['submit'])){
    $obj->insertRecord($_POST);
}//if isset close

/*update record*/
if(isset($_POST['update'])){
    $obj->updateRecord($_POST);
}//if isset close

/*delete record*/
if(isset($_GET['deleteid'])){
    $delid = $_GET['deleteid'];
    $obj->deleteRecord($delid);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud operation</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
</head>
<body><br>
    <h2 class="text-center text-info">Crud ooperation OOP and PHP</h2><br>
    <div class="container">
        <!--melding success ingevoegd bijgewerkt en geupdated -->
        <?php
        if(isset($_GET['msg']) AND $_GET['msg'] == 'ins'){
            echo '<div class="alert alert-primary" role="alert">
            Record inserted successfully..!!
          </div>';
        }
        if(isset($_GET['msg']) AND $_GET['msg'] == 'ups'){
            echo '<div class="alert alert-primary" role="alert">
            Record updated successfully..!!
          </div>';
        }
        if(isset($_GET['msg']) AND $_GET['msg'] == 'del'){
            echo '<div class="alert alert-primary" role="alert">
            Record deleted successfully..!!
          </div>';
        }
        ?>


<?php 
/*vang record op voor update*/
if(isset($_GET['editid'])){
    $editid = $_GET['editid'];
    $myrecord = $obj->displayRecordById($editid);
    ?>
    <!--update form-->
    <form action="klachtenFormulier.php" method="post">
            <div class="form-group">
                <label>Naam</label>
                <input type="text" name="naam" value="<?php echo $myrecord['naam']; ?>" placeholder="vul je naam in" class="form-control">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" value="<?php echo $myrecord['email']; ?>" placeholder="vul je email in" class="form-control">
            </div>
            <div class="form-group">
                <label>Beschrijving</label>
                <input type="text" name="beschrijving" value="<?php echo $myrecord['beschrijving']; ?>" placeholder="vul je beschrijving in" class="form-control">
            </div>
            <div class="form-group">
                <label>Lengtegraad</label>
                <input type="text" name="lengtegraad" value="<?php echo $myrecord['lengtegraad']; ?>"  placeholder="vul je lengtegraad in" class="form-control">
            </div>
            <div class="form-group">
                <label>Breedtegraad</label>
                <input type="text" name="breedtegraad" value="<?php echo $myrecord['breedtegraad']; ?>" placeholder="vul je breedtegraad in" class="form-control">
            </div>
            <div class="form-group">
                <label>Titel</label>
                <input type="text" name="titel" value="<?php echo $myrecord['titel']; ?>" placeholder="Voer titel in" class="form-control">
            </div>
            <div class="form-group">
                <input type="hidden" name="hid" value="<?php echo $myrecord['id']; ?>">
                <input type="submit" name="update" value="update" class="btn-btn-info">
            </div>
        </form>

    <?php
    }else{
    ?>
        <form action="klachtenFormulier.php" method="post">
            <div class="form-group">
                <label>Naam</label>
                <input type="text" name="naam" placeholder="vul je naam in" class="form-control">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" placeholder="vul je email in" class="form-control">
            </div>
            <div class="form-group">
                <label>Beschrijving</label>
                <input type="text" name="beschrijving" placeholder="vul je beschrijving in" class="form-control">
            </div>
            <div class="form-group">
                <label>Lengtegraad</label>
                <input type="text" name="lengtegraad" placeholder="vul je lengtegraad in" class="form-control">
            </div>
            <div class="form-group">
                <label>Breedtegraad</label>
                <input type="text" name="breedtegraad" placeholder="vul je breedtegraad in" class="form-control">
            </div>
            <div class="form-group">
                <label>Titel</label>
                <input type="text" name="titel" placeholder="Voer titel in" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" name="submit" value="submit" class="btn-btn-info">
            </div>
        </form>
        <?php }//else close?>
        <br>
        <!--records laten zien-->
        <h4 class="text-center text-danger">Laat records zien</h4>
        <table class="table table-bordered">
            <tr class="bg-primary text-center">
                <th>S.No</th>
                <th>Naam</th>
                <th>Email</th>
                <th>Beschrijving</th>
                <th>Lengtegraad</th>
                <th>Breedtegraad</th>
                <th>Titel</th>
                <th>Action</th>
            </tr>
            <?php
            /*Weergeven Record */
            $data = $obj->displayRecord();
            $sno = 1;
            foreach ($data as $value){
            ?>
            <tr class="text-center">
                <td><?php echo $sno++; ?></td>
                <td><?php echo $value['naam']; ?></td>
                <td><?php echo $value['email']; ?></td>
                <td><?php echo $value['beschrijving']; ?></td>
                <td><?php echo $value['lengtegraad']; ?></td>
                <td><?php echo $value['breedtegraad']; ?></td>
                <td><?php echo $value['titel']; ?></td>
                <td>
                    <a href="klachtenFormulier.php?editid=<?php echo $value['id']; ?>" class="btn btn-info">Edit</a>
                    <a href="klachtenFormulier.php?deleteid=<?php echo $value['id']; ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <?php

            }// foreach close
            ?>
        </table>
    </div>
    <div class="footer">
            <p>footer</p>
        </div>
</body>
</html>
            

