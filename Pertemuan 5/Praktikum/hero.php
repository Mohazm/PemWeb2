<?php 

class Hero{
    //Atribut
    public $name = "Alucard";
    public $hp = 3200;
    public $damage = 230;

    public function __construct($name, $hp, $damage)
    {
        $this->name = $name;
        $this->hp = $hp;
        $this->damage = $damage;
    }

    public function getDetail(){
        echo "Name: $this->name <br>";
        echo "Health Poin: $this->hp <br>";
        echo "Damage: $this->damage <br>";
        echo "<br>=================<br>";
    }

    public function attack($target)
    {    
        $target->hp =$target->hp-$this->damage;
        echo "<br> Berhasil Menyerang $target->name";
        echo "<br> HP Lawan Saat ini adalah $target->hp";
    }
}

$hero1 = new HERO("Alucard", 3200, 230);
$hero1->getDetail();

$hero2 = new Hero("Saber", 4000, 2000);
$hero2->getDetail();


$hero1->attack($hero2);
$hero1->attack($hero2);
?>
