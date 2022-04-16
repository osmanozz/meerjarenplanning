<?php
    require_once 'database.php';
    $db = new database();
    include 'table_generator.php';
    
    $act = $db->select('SELECT * FROM vakken');
        create_table($act, 'vak'); 

        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            $vak_naam = $_POST['vak_naam'];
        
            $sql = "INSERT INTO vakken VALUES (:vak_code, :vak_naam)";
                $placeholders = [
                'vak_code'=>NULL,
                'vak_naam'=> $vak_naam
                ];
                     $db->insert($sql, $placeholders);
                    header("Location:vakken.php");    
                    
        }


?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<div class="card text-center">
  <div class="card-header">
    <div class="card-body">

<form method="POST">
        <legend> Vak toevoegen </legend>
        Vak naam: <input type="text" name="vak_naam" required> <br><br>
        <input type="submit" class="btn btn-primary" name="submit" value="Voeg toe">
</form>
<br><br>
<a class="btn btn-secondary" href="index.php">Home</a>

    </div>
    </div>
    </div>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

