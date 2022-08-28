<?php

include("I1_parent.php");

class ManagerUcenici
{
    private $ucenici = array();

    function Ucenici()
    {
        $ucenik1 = new Ucenik();
        $ucenik1->setIme("Ivo");
        $ucenik1->setPrezime("Ivić");
        $ucenik1->setProsjek("4,75");
        $this->ucenici[] = $ucenik1;

        $ucenik2 = new Ucenik();
        $ucenik2->setIme("Ana");
        $ucenik2->setPrezime("Ivić");
        $ucenik2->setProsjek("3,91");
        $this->ucenici[] = $ucenik2;

        $ucenik3 = new Ucenik();
        $ucenik3->setIme("Pero");
        $ucenik3->setPrezime("Perić");
        $ucenik3->setProsjek("4,97");
        $this->ucenici[] = $ucenik3;

        $ucenik4 = new Ucenik();
        $ucenik4->setIme("Marko");
        $ucenik4->setPrezime("Marić");
        $ucenik4->setProsjek("4,49");
        $this->ucenici[] = $ucenik4;

        $ucenik5 = new Ucenik();
        $ucenik5->setIme("Jure");
        $ucenik5->setPrezime("Jurić");
        $ucenik5->setProsjek("2,87");
        $this->ucenici[] = $ucenik5;

        echo "Učenici s prosjekom većim od 4.5 su:\n";

        foreach($this->ucenici as $key => $val)
        {
            if($ucenik1->getProsjek() >= "4,50")
            {
                echo $ucenik1->getIme() . " " . $ucenik1->getPrezime() . "\n";
            }
            elseif($ucenik2->getProsjek() >= "4,50")
            {
                echo $ucenik2->getIme() . " " . $ucenik2->getPrezime() . "\n";
            }
            elseif($ucenik3->getProsjek() >= "4,50")
            {
                echo $ucenik3->getIme() . " " . $ucenik3->getPrezime() . "\n";
            }
            elseif($ucenik4->getProsjek() >= "4,50")
            {
                echo $ucenik4->getIme() . " " . $ucenik4->getPrezime() . "\n";
            }
            elseif($ucenik5->getProsjek() >= "4,50")
            {
                echo $ucenik5->getIme() . " " . $ucenik5->getPrezime() . "\n";
            }
        }
    }
}

?>