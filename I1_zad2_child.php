<?php

include("I1_zad2_parent.php");

class Vozila
{
    private $vozila = array();

    function JednoVozilo()
    {
        while(true)
        {
            $marka = readline("Naziv marke automobila: ");
            $model = readline("Ime modela: ");
            $god_proizvodnje = readline("Godina proizvodnje: ");
            $km = readline("Broj prijeđenih kilometara: ");

            $razlika = 2022-$god_proizvodnje;

            $vozilo = new Vozilo();
            
            $vozilo->setMarka($marka);
            $vozilo->setModel($model); 
            $vozilo->setGodProizvodnje($god_proizvodnje); 
            $vozilo->setKm($km); 
            $vozilo->setProsjek($km,$razlika);

            $this->vozila[] = $vozilo;

            $pitanje = readline("Želite li unijeti još automobila?(da/ne): ");
            if($pitanje == "ne" || $pitanje == "n")
            {
                break;
            }

        }
        foreach($this->vozila as $key => $vozilo)
        {
            echo "--------------------------------------- " . "\n";
            echo "Marka: " . $vozilo->getMarka() . "\n";
            echo "Model: " . $vozilo->getModel() . "\n";
            echo "Godina proizvodnje: " . $vozilo->getGodProizvodnje() . "\n";
            echo "Prijeđeni kilometri: " . $vozilo->getKm() . "\n";
            echo "Prosjek prijeđenih kilometara u godini je: " . $vozilo->getProsjek(). "\n";
        }
    }
}


?>