<?php

require_once 'Buku.php';
require_once 'BukuDigital.php';

$bukuPhysical = new Buku("Belajar OOP PHP", "Miqdam");
echo $bukuPhysical->infoBuku() . "\n";

$bukuDigital = new BukuDigital("Pemrograman Web dengan PHP", "Hambali", "2.5 MB");
echo $bukuDigital->infoBuku() . "\n";
