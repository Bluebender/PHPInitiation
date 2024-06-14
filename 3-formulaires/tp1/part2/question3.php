<?php
//Créer un formulaire de saisie d’adresse e-mail contenant un champ caché destiné à récupérer le type du navigateur de l’utilisateur.
// Le code PHP affiche l’adresse mail et le nom du navigateur dans la même page après vérification de l’existence des données.

require_once './index.php';

if(isset($_POST["enregistrer"])){
    echo $_POST["navigateur"];
}