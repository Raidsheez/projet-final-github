<?php 

// important pour la sécurité de vos fichers : les sessions
//Démarre une session
session_start();

// autoload.php genere avec composer
require_once __DIR__ . '/vendor/autoload.php';

try {
    $controllerFront = new \Projet\Controllers\ControllerFront(); //objet controler

    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'contact') {
            $controllerFront->contactFront();
        } elseif ($_GET['action'] == 'about') {
            $controllerFront->about();
        }

    }else{
        $controllerFront->home();
    }


} catch (Exception $e) {

}