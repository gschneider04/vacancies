<?php

require __DIR__.'/vendor/autoload.php';

// CHAMANDO A CLASSE  

use \App\Entity\Vacancy;

// VALIDATION POST INFORMATIONS:

if(isset($_POST['title'],$_POST['description'],$_POST['status'])){
    // die('register');

    
    $obVacancy = new Vacancy;
    $obVacancy->TITLE = $_POST['title'];
    $obVacancy->DESCRIPTION = $_POST['description'];
    $obVacancy->STATUS = $_POST['status'];

    echo "<pre>"; print_r($obVacancy); echo "</pre>"; exit;

}


// echo "<pre>"; print_r($_POST); echo "</pre>"; exit;

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/forms.php';
include __DIR__.'/includes/footer.php';
