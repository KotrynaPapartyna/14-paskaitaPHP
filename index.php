
<?php

// prisijungimas prie duomenu bazes
// atlikti uzklausas (insert, delete, update, select)
// uzdaryti prisijungima


// 1. Prisijungimui reikia atskiro php dokumento 
// atskiru failu sujungimas- connection kodas perkeliamas i index koda 
// visi kintamieji is connection yra pasiekiami ir index.php

require_once("connection.php");

// vykdoma uzklausa 
$sql = "SELECT * FROM `klientai` WHERE ID=12";
$rezultatas=$prisijungimas->query($sql);// vykdo uzklausa, = mygtuko 


// uzklausa grazina ne viena rezultata, todel reikia ciklo
while ($klientai=mysqli_fetch_array($rezultatas)) {
    echo "<br>";
    echo $klientai["ID"];
    echo " ";
    echo $klientai["Vardas"];
    echo " ";
    echo $klientai["Pavarde"];
    echo " ";
    echo $klientai["Teises_ID"];
    echo "<br>";
}

// duomenu pasiemimas 
$klientai=mysqli_fetch_array($rezultatas); // is uzklausos paima rezultata ir sudeda i masyva

// reikia uzdaryti- uzdaromas rysys su duomenu baze 
// mysqli_close($prisijungimas); 

// create- insert- pridesim nauja irasa
$sql="INSERT INTO `klientai`(`Vardas`, `Pavarde`, `Teises_ID`) 
VALUES ('phpVardas','phpPavade',50)";

if(mysqli_query($prisijungimas, $sql)) {
    echo "irasas pridetas"; 
} else {
    echo "kazkas negerai"; 
}

// update
$sql="UPDATE `klientai` SET `Vardas`='vardas8',`Pavarde`='pavarde8' WHERE `ID`=7";

if(mysqli_query($prisijungimas, $sql)) {
    echo "Irasas atnaujintas"; 
} else {
    echo "kazkas negerai"; 
}

// delete
$sql="DELETE FROM `klientai` WHERE `ID`=7";

if(mysqli_query($prisijungimas, $sql)) {
    echo "irasas istrintas"; 
} else {
    echo "kazkas negerai"; 
}


// uzdaromas 
mysqli_close($prisijungimas); 


?>