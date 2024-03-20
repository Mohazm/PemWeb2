<?php 
class Mahasiswa {
    var $nama;
    var $matkul;
    var $uts;
    var $uas;
    var $tugas;
    var $nilai_total;

    function __construct($nama, $matkul, $uts, $uas, $tugas) 
    {
        $this->nama = $nama;
        $this->matkul = $matkul;
        $this->uts = $uts;
        $this->uas = $uas;
        $this->tugas = $tugas;
        $this->nilai_total = (30/100 * $uts) + (35/100 * $uas) + (35/100 * $tugas);
    }

    function Predikat(){
        if (($this->nilai_total >= 85) && ($this->nilai_total <= 100)) {
            return 'A';
        } elseif (($this->nilai_total) >= 70 && ($this->nilai_total <= 84)) {
            return 'B';
        } elseif (($this->nilai_total >= 56) && ($this->nilai_total <= 69)){
            return 'C';
        } elseif (($this->nilai_total >= 36) && ($this->nilai_total <= 55)){
            return 'D';
        } elseif (($this->nilai_total >= 0) && ($this->nilai_total <= 35)) {
            return 'E';
        } else {
            return 'I';
        }
    }
}

// Mendapatkan nilai dari POST
$nama = $_POST['nama'];
$matkul = $_POST['matkul'];
$uts = $_POST['uts'];
$uas = $_POST['uas'];
$tugas = $_POST['tugas'];

// Membuat objek Mahasiswa
$mahasiswa = new Mahasiswa($nama, $matkul, $uts, $uas, $tugas);
$grade = $mahasiswa->Predikat();
?>

<fieldset >
    <?php 
    echo "Nama Lengkap : $nama";
    echo "<br>Mata Kuliah : $matkul";
    echo "<br>Nilai UTS : $uts";
    echo "<br>Nilai UAS : $uas";
    echo "<br>Nilai Tugas : $tugas";
    echo "<br>Grade : $grade";
    ?>
</fieldset>
