<?php
class ParcoursManager{

    private $db;
    public function __construct($db){
        $this->db = $db;
    }

    public function add($parcours){

        $req = $this->db->prepare('INSERT INTO parcours (vil_nom1, vil_nom2, par_km) VALUES (:nomVille1, :nomVille2, :par_km)');
        $req->bindValue(':nomVille1', $parcours->getVil1Nom());
        $req->bindValue(':nomVille2', $parcours->getVil2Nom());
        $req->bindValue(':par_km', $parcours->getVLong());
        $ret=$req->execute();
        echo "<pre>";
                print_r($req->debugDumpParams());
                echo "/<pre>";
        return $ret;
    }
}