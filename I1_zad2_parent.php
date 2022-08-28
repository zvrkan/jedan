<?php

/*Napišite  program  za  evidenciju  vozila.  Svako vozilo  definirano  je 
markom, modelom,  godinom  proizvodnje  i  prijeđenim  kilometrima.  Korisnik  kroz  komandnu  liniju  može  unijeti 
neograničen  broj vozila. Nakon unosa  treba ispisati  sva unesena vozila i izračunati i ispisati  za svako vozilo koliko 
godišnje  prosječno pređe kilometara.  
Nije dopušten izravan pristup atributima klase!  Potrebno  je  kreirati  posebnu  klasu  koja definira  jedno  vozilo  i 
drugu  klasu koja upravlja  sa svim objektima unesenih  vozila. 
*/

class Vozilo
{
    private $marka;
    private $model;
    private $god_proizvodnje;
    private $km;
    private $prosjek;

    function setMarka($p1)
    {
        $this->marka = $p1;
    }
    function getMarka()
    {
        return $this->marka;
    }

    function setModel($p2)
    {
        $this->model = $p2;
    }
    function getModel()
    {
        return $this->model;
    }

    function setGodProizvodnje($p3)
    {
        $this->god_proizvodnje = $p3;
    }
    function getGodProizvodnje()
    {
        return $this->god_proizvodnje;
    }

    function setKm($p4)
    {
        $this->km = $p4;
    }
    function getKm()
    {
        return $this->km;
    }

    function setProsjek($p5,$p6)
    {
        $this->prosjek = $p5/$p6;
    }
    function getProsjek()
    {
         return $this->prosjek;
    }
}


?>