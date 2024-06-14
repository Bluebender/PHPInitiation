<?php
//Créer un formulaire demandant la saisie d’un prix HT et d’un taux de TVA.
// Le script affiche le montant de la TVA et le prix TTC dans deux zones de texte créées dynamiquement.
// Le formulaire maintient les données saisies.


if (isset($_POST["enregistrer"])) {
    $price = $_POST["price"];
    $taux = $_POST["tva"];
    $result = $price - ($price * $taux / 100);
}

if (isset($_POST["acheter"])) {
    header("location: acheter.php");
}
if (isset($_POST["vendre"])) {
    header("location: vendre.php");
}
if (isset($_POST["louer"])) {
    header("location: louer.php");
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
        <legend>Email Client</legend>

        <fieldset>
            <label for="price">Prix : </label>
            <input type="number" name="price" id="price" value="<?= $price ?? '' ?>"/>
        </fieldset>

        <fieldset>
            <label for="tva">TVA : </label>
            <input type="number" name="tva" id="tva" value="<?= $taux ?? '' ?>"/>
        </fieldset>

        <fieldset>
            <input type="submit" name="enregistrer" value="Enregistrer"/>
        </fieldset>


        <fieldset>
            <input type="submit" name="acheter" value="acheter"/>
        </fieldset>
        <fieldset>
            <input type="submit" name="vendre" value="vendre"/>
        </fieldset>
        <fieldset>
            <input type="submit" name="louer" value="louer"/>
        </fieldset>


    </fieldset>

    <div>
        <p><?= !empty($result) ? "Le prix est de : $result" : '' ?><?= !empty($taux) ? " et le taux est de : $taux %" : '' ?></p>
    </div>

</form>
</body>
</html>

