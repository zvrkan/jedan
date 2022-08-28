<?php

/*Napišite  program  koji  omogućava  čuvanje  podataka  o 
učenicima jednog  razreda  neke osnovne škole  iz  donje  tablice.  Definirajte  potrebnu  strukturu  klase  te stvorite  po 
jedan  objekt  za  svakog učenika  i pohranite  ga  u  listu.  Na kraju ispišite  ime i prezime učenika  koji  imaju  prosjek  
ocjena  veći od 4,5.  Nije dopušten izravan pristup atributima klase!  Podaci  o  učenicima  se  ne  unose  putem  
komandne linije već se moraju definirati unutar programskog koda. Potrebno  je definirati drugu  klasu koja upravlja 
sa svim podacima (manger  klasa).
*/

class Ucenik
{
    private $ime;
    private $prezime;
    private $prosjek;

    function setIme($p1)
    {
        $this->ime = $p1;
    }
    function getIme()
    {
        return $this->ime;
    }

    function setPrezime($p2)
    {
        $this->prezime = $p2;
    }
    function getPrezime()
    {
        return $this->prezime;
    }

    function setProsjek($p3)
    {
        $this->prosjek = $p3;
    }
    function getProsjek()
    {
        return $this->prosjek;
    }

}




?>