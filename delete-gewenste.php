<?php
include "database.php";
    $db = new database();

if (isset($_GET['vak_code'])) {

    $vak_code = $_GET['vak_code'];
    $periode = $_GET['periode'];

        $sql = "DELETE FROM gewenste WHERE vak_code=:vak_code AND periode=:periode";
            $placeholder = [
                'vak_code'=> $vak_code,
                'periode'=> $periode
            ];
                $db->delete($sql, $placeholder, "index.php");
}
?>