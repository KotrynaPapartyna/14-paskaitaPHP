<?php

// reikia kintamuju 
// jie yra duodami, mes kurem. T.y. kur yra duomenys, prisijungimai ir pavadinimas

$duomenu_bazes_serveris="localhost"; 
$duomenu_bazes_slapyvardis="root"; 
$duomenu_bazes_slaptazodis="";
$duomenu_bazes_pavadinimas="klientu_valdymo_sistema";

// prisijungimo prie duomenu bazes funkcija
$prisijungimas=mysqli_connect($duomenu_bazes_serveris,$duomenu_bazes_slapyvardis,
$duomenu_bazes_slaptazodis,$duomenu_bazes_pavadinimas);

// false- kai prisijungimas nesekmingas
// jeigu sekmingas- negrazina nieko 

// die- sustabdo skripto veikima
if ($prisijungimas==false) {
    die("Nepavyko prisijungti prie duomenu bazes".mysqli_connect_error()); 
}   else {
    // echo "Prisijungta sekmingai"; 
}

?>