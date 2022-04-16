<?php
require_once 'database.php';
include 'table_generator.php';
    $db = new database();
    
if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $periode = $_GET['periode'];
    $vak_code = $_POST['vak_code'];

    $sql = "INSERT INTO gewenste VALUES (:ID, :vak_code, :uren, :periode)";
        $placeholders = [
        'ID'=>NULL,
        'vak_code'=> $vak_code,
        'uren'=> $_POST['uren'],
        'periode'=> $periode
        ];
             $db->insert($sql, $placeholders);
            header("Location:index.php");    
            
}

$db = new database();
$vakken = $db->select("SELECT vak_code FROM vakken");
$alle_vakken = $db->select("SELECT * from vakken");

create_table($alle_vakken, 'vak');

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<div class="card text-center">
  <div class="card-header">
    <div class="card-body">

<form method="POST">
        <legend>Vak toevoegen in de planning </legend>
        <label>Kies een vak code</label>
        <select name="vak_code">
            <?php foreach($vakken as $vak) { ?>
                <option name="vak_code"> <?php echo $vak['vak_code']; ?> </option>
            <?php } ?>
        </select>
        <input type="hidden" name="periode"><br><br>
        Uren: <input type="text" name="uren" required> <br><br>
        <input type="submit" class="btn btn-primary" name="submit" value="Toevoegen">
</form>
    </div>
    </div>
    </div>