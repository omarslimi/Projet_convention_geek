<?php
$formErrors = [];
$regex = [
    'phoneNumber' => '/^[0]{1}[1-79]{1}([ ]{1}[0-9]{2}){4}$/',
    'lastName' => '/^[a-zA-Z- \'À-ÖØ-öø-ÿ]+$/',
    'firstName' => '/^[a-zA-Z- \'À-ÖØ-öø-ÿ]+$/'
];

if(count($_POST) > 0){
    if(!empty($_POST['user_lastName'])){
        if(preg_match($regex['lastName'],$_POST['user_lastName'])){
            $user_lastName = strip_tags($_POST['user_lastName']);
        } else{
            $formErrors['user_lastName'] = 'Vérifier le nom de famille';
        }
    } else {
        $formErrors['user_lastName'] = 'Veuillez entrer votre nom de famille';
    }

    if(!empty($_POST['user_firstName'])){
        if(preg_match($regex['firstName'],$_POST['user_firstName'])){
            $user_firstName = strip_tags($_POST['user_firstName']);
        } else {
            $formErrors['user_firstName'] = 'Vérifier le prénom';
        }
    } else {
        $formErrors['user_firstName'] = 'Veuillez entrer votre prénom';
    }

    if(!empty($_POST['user_mail'])){
        if(filter_var($_POST['user_mail'], FILTER_VALIDATE_EMAIL)){
            $user_mail = strip_tags($_POST['user_mail']);
        } else {
            $formErrors['user_mail'] = 'Veuillez entrer une Adresse mail valide';
        }
    } else {
        $formErrors['user_mail'] = 'Veuillez entrer votre Adresse mail';
    }

    if(!empty($_POST['user_phone'])){
        if(preg_match($regex['phoneNumber'],$_POST['user_phone'])){
            $user_phone = strip_tags($_POST['user_phone']);
        } else {
            $formErrors['user_phone'] = 'Veuillez entrer un numéro de téléphone valide';
        }
    } else {
        $formErrors['user_phone'] = 'Veuillez entrer un numéro de téléphone';
    }

    if(!empty($_POST['user_duration'])){
        if($_POST['user_duration'] == '1 Jour' || $_POST['user_duration'] == '2 Jours'){
            $user_duration = $_POST['user_duration'];
        } else {
            $formErrors['user_duration'] = 'le choix est invalide veuillez choisir dans la liste';
        }
    } else {
        $formErrors['user_duration'] = 'Choissisez une proposition.';
    }
} 

?>