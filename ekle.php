<?php
include "func.php";
$baslik =$_POST["baslik"];
$aciklama =$_POST["aciklama"];

ekle($baslik, $aciklama);
header("Location: http://localhost/101/"); /* Redirect browser */
// ekle("deneme ", "aciklama");
