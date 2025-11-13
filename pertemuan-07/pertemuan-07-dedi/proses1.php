<?php
session_start();
    $sesnama = $_GET["txtNama"];
    $sesemail = $_GET["txtEmail"];
    $sespesan = $_GET["txtPesan"];
    header("location: index.php");
?>