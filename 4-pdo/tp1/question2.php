<?php
//Créer un formulaire permettant l’insertion de nouvelles données dans la table modeles.

require_once 'connexion.php';

if(isset($_POST["enregistrer"])){

$query = 'INSERT INTO modeles (id_modele, marque, modele, carburant) VALUES (:id_modele, :marque, :model, :carburant)';
$prep = $pdo->prepare($query);
$prep->bindValue(':id_modele', $_POST["id"]);
$prep->bindValue(':marque', $_POST["marque"]);
$prep->bindValue(':model', $_POST["model"]);
$prep->bindValue(':carburant', $_POST["carburant"]);

$prep->execute();

echo "Nombre de ligne insérées :".$prep->rowCount();

}



?>

<!doctype html>
<html lang="fr" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="alert.js" defer></script>
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <fieldset>
        <legend>Modèle</legend>
        <fieldset>
            <label for="id">Id du modèle : </label>
            <input type="text" name="id" id="id"/>
        </fieldset>

        <fieldset>
            <label for="marque">Marque : </label>
            <input type="text" name="marque" id="marque"/>
        </fieldset>

        <fieldset>
            <label for="model">Modèle : </label>
            <input type="text" name="model" id="model"/>
        </fieldset>

        <fieldset>
            <label for="carburant">Carburant : </label>
            <input type="text" name="carburant" id="carburant"/>
        </fieldset>

        <fieldset>
            <input type="submit" value="Enregistrer" name="enregistrer"/>
        </fieldset>
    </fieldset>

</form>
</body>
</html>