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
            <input type="number" name="price" id="price"/>
        </fieldset>

        <fieldset>
            <label for="tva">TVA : </label>
            <input type="number" name="tva" id="tva"/>
        </fieldset>

        <fieldset>
            <input type="submit" name="enregistrer" value="Enregistrer"/>
        </fieldset>
    </fieldset>

    <div>
        <p>Le prix est de : <?= $price ?></p>
    </div>

</form>
</body>
</html>