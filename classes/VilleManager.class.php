<?php
class VilleManager{

    private $db;
    public function __construct($db){
        $this->db = $db;
    }

    public function add($ville){

        $req = $this->db->prepare('INSERT INTO ville (vil_nom) VALUES (:nomVille)');
        $req->bindValue(':nomVille', $ville->getVilNom());
        $ret=$req->execute();
        /*echo "<pre>";
        print_r($req->debugDumpParams());
        echo "/<pre>";*/
        return $ret;
    }
/* //compléter
    public function existe_ville($ville){

        $requete = $this->db->prepare('SELECT EXISTS (SELECT * FROM ville 
        WHERE vil_nom=(:vilnom))');
        $requete->bindValues(':vilnom', $ville->getVilNom());
        $data = $requete->execute();
        return $data;
    }*/


    public function getList(){
        $listeVille = array();

        $req = $this->db->query('SELECT vil_num, vil_nom FROM ville ORDER BY vil_num ASC');
        while($ville = $req->fetch(PDO::FETCH_OBJ)){
            $listeVille[] = new Ville($ville);
        }

        return $listeVille;
        $req->closeCursor();
    }
}