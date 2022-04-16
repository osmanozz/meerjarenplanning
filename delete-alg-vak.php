<?php
include "database.php";
    $db = new database();

if (isset($_GET['vak_code'])) {

    $vak_code = $_GET['vak_code'];

        $sql = "DELETE FROM vakken WHERE vak_code=:vak_code";
            $placeholder = [
                'vak_code'=> $vak_code
            ];
                $db->delete($sql, $placeholder, "vakken.php");
}
?>