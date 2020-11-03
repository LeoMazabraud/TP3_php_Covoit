<?php
class Parcours{

    private $vil_num1;
    private $vil_num2;
    private $par_km;

    public function __construct ($valeurs){
        if (!empty($valeurs))
            $this->affecte($valeurs);
    }

    public function affecte ($donnees){
        foreach ($donnees as $attribut => $valeur){
            switch ($attribut){
                case 'vil_nom1': $this->setVil1Nom($valeur); break;
                case 'vil_nom2': $this->setVil2Nom($valeur); break;
                case 'par_km': $this->setLong($valeur); break;
            }
        }
    }

    /*          Setters + Getters           */
    public function getVil1Nom(){
        return $this->vil_nom1;
    }

    public function getVil2Nom(){
        return $this->vil_nom2;
    }

    public function getLong(){
        return $this->long;
    }

    public function setVil1Nom($vil_nom1)
    {
        $this->vil_nom1 = $vil_nom1;
    }

    public function setVil2Nom($vil_nom2)
    {
        $this->vil_nom2 = $vil_nom2;
    }

    public function setLong($par_km)
    {
        $this->long = $par_km;
    }
}