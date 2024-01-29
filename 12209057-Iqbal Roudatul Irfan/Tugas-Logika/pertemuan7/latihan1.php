<?php
$totalBelanja = 90000;
$persentaseDiskon = 7;
$min = 100000;
$jumlahDiskon = ($totalBelanja * $persentaseDiskon) / 100;
$totalSetelahDiskon = $totalBelanja - $jumlahDiskon;

if($totalBelanja >= $min){
    echo "Total yang harus dibayar: " . number_format($totalSetelahDiskon, 2);
}else{
    echo "Total yang harus dibayar: " . number_format($totalBelanja);
}