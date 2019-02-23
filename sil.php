<?php
include "func.php";
$id = $_GET["id"];
sil($id);
header("Location: http://localhost/101/"); /* Redirect browser */
//sil(3);
