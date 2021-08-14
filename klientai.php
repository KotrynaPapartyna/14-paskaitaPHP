<?php

require_once("connection.php"); 

$sql = "SELECT * FROM `klientai`";
$rezultatas=$prisijungimas->query($sql);



while ($klientai=mysqli_fetch_array($rezultatas)) {
    echo "<br>";
    echo $klientai["ID"];
    echo " ";
    echo $klientai["Vardas"];
    echo " ";
    echo $klientai["Pavarde"];
    echo " ";
    echo $klientai["Teises_ID"];

    echo "<a href='klientai.php?klientoid="
    .$klientai["ID"]."'>".$klientai["Vardas"]."</a>"; 

    echo "<br>";
}

if (isset($_GET["klientoid"])) {
    echo "<form>"; 
    echo "Redaguojame irasa".$_GET["klientoid"]; 
    echo "</form>"; 
}


?>