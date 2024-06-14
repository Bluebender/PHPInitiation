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
            <label for="email">Email : </label>
            <input type="text" name="email" id="email"/>
        </fieldset>

        <input type="hidden" name="navigateur" id="navigateur" value="<?= $_SERVER['HTTP_USER_AGENT'] ?>"/>

        <fieldset>
            <input type="submit" name="enregistrer" value="Enregistrer"/>
        </fieldset>
    </fieldset>

</form>
</body>
</html>