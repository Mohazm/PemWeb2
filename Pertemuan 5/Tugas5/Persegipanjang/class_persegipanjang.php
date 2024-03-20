<?php 
class Persegipanjang{
    /**
     * Access Modifire
     * 1. Public: Atribut/Method dapat di akses walaupun di luar class
     * 2. Private: Atribut/Method hanya dapat di akses didalam class
     * 3. Protected: Mirip seperti private, tetapi dapat juga diakses class
     */

    //Atribut / Properti
    private $panjang;
    private $lebar;

    

    //Method: Function yang ada dalam class
    //Contruct adalah menginisiasi 
    public function __construct($p, $l)
    {
        $this->panjang = $p;
        $this->lebar = $l;
    }

    public function getLuas(){
        return  $this->panjang * $this->lebar;
    }

    public function getKeliling(){
        return (2 *  $this->panjang) + (2 * $this->lebar);
    }
}

?>
