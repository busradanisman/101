<?php
include "func.php";
// ekle("deneme ", "aciklama");
//sil(3);
$data = listele();
foreach ($data as $row) {
    echo $row['baslik']."<br />\n";
}
guncelleme(2, "koddan değisirdim basligi", "aciklama");
