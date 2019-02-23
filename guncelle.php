<?php
include "func.php";
$baslik =$_POST["baslik"];
$aciklama =$_POST["aciklama"];
$id = $_GET["id"];
guncelleme($id, $baslik, $aciklama);
header("Location: http://localhost/101/"); /* Redirect browser */

