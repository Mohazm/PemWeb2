<?php 
class Lingkaran{
    /**
     * Access Modifire
     * 1. Public: Atribut/Method dapat di akses walaupun di luar class
     * 2. Private: Atribut/Method hanya dapat di akses didalam class
     * 3. Protected: Mirip seperti private, tetapi dapat juga diakses class
     */

    //Atribut / Properti
    private $jari;
    const PHI = 3.14;

    //Method: Function yang ada dalam class
    //Contruct adalah menginisiasi 
    public function __construct($r)
    {
        //isi atribut jari saat pembuatan object
       $this->jari = $r; 
    }

    public function getLuas(){
        return 0.5 * self::PHI * $this->jari * $this->jari;
    }

    public function getKeliling(){
        return 2 * self::PHI * $this->jari;
    }
}

?>
