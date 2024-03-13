<?php
//Tangkap Registrasi
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$prodi = $_POST['prodi'];
$skills = $_POST['skill'];
$domisili = $_POST['domisili'];
$email = $_POST['email'];

$nilai_skill = [
    'HTML' => 10,
    'CSS' => 10,
    'Javascript' => 20,
    'RWD Bootstrap' => 20,
    'PHP' => 30,
    'Python' => 30,
    'Java' => 50
];

$total_skor = 0;
foreach ($skills as $value) {
    $total_skor += $nilai_skill[$value];
}

$kategori_skill = '';
if ($total_skor == 0) {
    $kategori_skill = 'Tidak Memadai';
} else if ($total_skor <= 40) {
    $kategori_skill = "Kurang ";
} else if ($total_skor <= 60) {
    $kategori_skill = "Cukup";
} else if ($total_skor <= 100) {
    $kategori_skill = "Baik";
} else if ($total_skor >= 150) {
    $kategori_skill = "Sangat Baik";
}

include_once('top.php');
include_once('menu.php');
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <fieldset>
                <?php
                echo "NIM: $nim";
                echo "<br> Nama : $nama";
                echo "<br> jenis kelamin : $jk";
                echo "<br> Program Studi : $prodi";
                echo "<br> Skill Programing :" . join(',', $skills);
                echo "<br> Domisili : $domisili";
                echo "<br> Email : $email";
                echo "<br> Total skor : $total_skor";
                echo "<br> Total scor : $kategori_skill";
                ?>
            </fieldset>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
</div>

<?php
include_once('bottom.php');
?>