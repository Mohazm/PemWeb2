<?php 
//tangkap input form 

$customer = $_POST['customer'];
$produk = $_POST['produk'];
$jumlah = $_POST['jumlah'];


//Array harga produk
$harga =[
    'tv' => 4200000,
    'kulkas' => 3100000,
    'mesin cuci' => 3800000
];

// Hitung Total Harga
$total = $jumlah * $harga[$produk];

$total = number_format($total);

echo "Nama Customer : $customer";
echo "<br> Produk : $produk";
echo "<br> Jumlah Beli : $jumlah";
echo "<br> Total Belanja : Rp $total";
?>
