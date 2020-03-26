<?php 

namespace Projet\Models;

class FrontManager extends Manager{
    public function viewsfront(){

        $bdd = $this->dbConnect();
        $req = $bdd->prepare('Methode sql');
        $req->execute(array());
        return $req;
    }
}