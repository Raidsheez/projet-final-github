<?php 

namespace Projet\Controllers;

class ControllerFront {
    function home(){
       $homeFront = new \Projet\Models\FrontManager();

        require 'app/views/front/home.php';
    }
    function contactFront(){
        
        require 'app/views/front/contact.php';
    }
    function about(){
        
        require 'app/views/front/about.php';
    }
    function blog(){
        
        require 'app/views/front/blog.php';
    }
    function classement(){
        
        require 'app/views/front/classement.php';
    }
    function planning(){
        
        require 'app/views/front/planning.php';
    }
    function team(){
        
        require 'app/views/front/team.php';
    }
}

