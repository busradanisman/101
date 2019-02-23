<?php
$servername = "localhost";
$username = "root";
$password = "root";

try {
    $conn = new PDO("mysql:host=$servername;dbname=101", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   function ekle ($baslik, $aciklama) {
       global $conn;
       $sql = "INSERT INTO yazilar (baslik, aciklama)
    VALUES ('".$baslik ."', '".$aciklama ."')";
       // use exec() because no results are returned
       $conn->exec($sql);
        echo "New record created successfully";
   }

    function listele () {
        global $conn;
        $data = $conn->query("SELECT * FROM yazilar")->fetchAll();
/*
        foreach ($data as $row) {
            echo $row['baslik']."<br />\n";
        }
*/
        return $data;
    }

    function sil ($id) {
        global $conn;
        $sql = "DELETE FROM yazilar WHERE id=".$id;

        // use exec() because no results are returned
        $conn->exec($sql);
        echo "Record deleted successfully";
    }

    function guncelleme ($id, $baslik, $aciklama) {
        global $conn;
        $sql = "UPDATE yazilar SET baslik='".$baslik."', aciklama='".$aciklama."' WHERE id=".$id;

        // Prepare statement
        $stmt = $conn->prepare($sql);

        // execute the query
        $stmt->execute();
    }
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}


