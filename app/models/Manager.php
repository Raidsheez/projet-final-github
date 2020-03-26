<?php

namespace Projet\Models;
class Manager{
    protected function dbConnect(){
        try{
            $bdd = new \PDO('mysql:host=localhost;dbname=mvc;charset=utf', 'root', '');
            return $bdd;
        } catch (Exception $e){

            die('Erreur :' . $e->getmessage());
        }
    }
}