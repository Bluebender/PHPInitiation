<?php
//Créer une page html contenant un formulaire comprenant un groupe de champs ayant pour titre "Adresse client".
// Le groupe doit permettre la saisie du nom, du prénom, de l’adresse, de la ville et du code postal.
// Les données sont ensuite traitées par un fichier PHP séparé récupérant les données et les affichant dans un tableau HTML.

//Améliorer le script précédent en vérifiant la présence des données et en affichant une boîte d’alerte JavaScript si l’une des données est manquante.

require_once './form.html';

if(isset($_POST['enregistrer'])){

    $errors = [];

    if(empty($_POST['fistName'])){
        $errors['fistName'] = "Veuillez entrer votre nom";
    }
    if(empty($_POST['prenom'])){
        $errors['prenom'] = "Veuillez entrer votre prenom";
    }
    if(empty($_POST['adress'])){
        $errors['adress'] = "Veuillez entrer votre adresse";
    }
    if(empty($_POST['postalCode'])){
        $errors['postalCode'] = "Veuillez entrer votre code postal";
    }
    if(empty($_POST['city'])){
        $errors['city'] = "Veuillez entrer votre ville";
    }

    if(!empty($errors)){
        foreach($errors as $error){
            echo $error."<br>";
        }
    }

    var_dump($_POST);
    $firstName = $_POST['fistName'];
    $lastName = $_POST['lastName'];
    $adress = $_POST['adress'];
    $postalCode = $_POST['postalCode'];
    $city = $_POST['city'];

    $html = "    <table>
                    <thead>
                    </thead>
                    <tbody>
                        <tr>
                            <th>Nom</th>
                            <td>$firstName</td>
                        </tr>
                        <tr>
                            <th>Prenom</th>
                            <td>$lastName</td>
                        </tr>
                        <tr>
                            <th>Adresse</th>
                            <td>$adress</td>
                        </tr>
                        <tr>
                            <th>Code postal</th>
                            <td>$postalCode</td>
                        </tr>
                        <tr>
                            <th>Ville</th>
                            <td>$city</td>
                        </tr>
                    </tbody>
                </table>    
    ";

    echo $html;

    die();
}

?>


