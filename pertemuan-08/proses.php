<?php
session_start();
$sesnim = $_POST["txtnim"];
$_SESSION["sesnim"] = $sesnim;
header("Location: index.html")
?>