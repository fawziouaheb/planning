<?php
require_once '../vendor/autoload.php';
use Model\Student;
use Model\Teacher;

 if($_SERVER['REQUEST_METHOD'] == 'POST'){
    try {
        //code...
        if(!empty($_POST['nom']) && !empty($_POST['prenom']) && isset($_POST['role']) && 
        !empty($_POST['email']) && 
        !empty($_POST['motDePasse'])){
            
           if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
            $class = ($_POST['role'] == 1 ) ? "Model\Student" : "Model\Teacher" ;
            $person = new $class($_POST['nom'],$_POST['prenom'],
            password_hash($_POST['motDePasse'],PASSWORD_BCRYPT),
            $_POST['email']);
            $person->insert();
           }
        }     
    } catch (\Throwable|TypeError $th) {
        echo $th->getMessage();
    }
 
    
}