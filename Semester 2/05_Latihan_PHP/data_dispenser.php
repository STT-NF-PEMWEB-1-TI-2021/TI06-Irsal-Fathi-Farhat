<?php
require_once "class_dispenser.php";
$susu = new Minuman("Susu", 2000);
$susu->isiGalon(2500);
echo ("</br>");
$susu->cetakDispenser();
echo ("</br>");
$susu->cetak();
echo ("</br>");
$susu->isiGelas(250);
echo ("</br>");
$susu->isiUlangGelas(5);
echo ("</br>");
$susu->cetakDispenser();
