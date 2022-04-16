<?php
    include_once "database.php";
    $db = new database();
  
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            

            $uren = $_POST['uren'];
            $id = $_GET['ID'];
            
                $sql = "UPDATE gewenste SET uren=:uren
                WHERE ID=:ID";

                    $placeholders = [
                        'ID' => $id,
                        'uren' => $uren,       
                    ];
                        $db->edit($sql,$placeholders, "index.php");
        }
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<div class="card text-center">
  <div class="card-header">
    <div class="card-body">

<form method="POST">
            <legend>Wijzig uren</legend>
        <input type="hidden" name="ID" value="<?php echo trim($_GET['ID']) ?>">
        Uren : <input type="text" name="uren"  value="<?php echo $_GET['uren']?>"> <br><br>
        <input type="submit" class="btn btn-primary" name="submit" value="Wijzig">
</form>
    </div>
    </div>
    </div>