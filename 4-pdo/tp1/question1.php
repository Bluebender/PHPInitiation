<?php
// Créer un script permettant d’afficher le contenu de la table modeles dans un tableau HTML. Les résultats doivent être triés par marque.

require_once 'connexion.php';

$query = 'SELECT * FROM modeles;';
$prep = $pdo->prepare($query);
$prep->execute();
$arrAll = $prep->fetchAll(PDO::FETCH_NAMED);
var_dump($arrAll);

    $html = '
<table>
    <thead>
        <th>Id</th>
        <th>Marque</th>
        <th>Modele</th>
        <th>Carburant</th>
    </thead>
    <tbody>
    ';
foreach ($arrAll as $one){
$html .= '
        <tr>
            <td>'.$one['id_modele'].'</td>
            <td>'.$one['marque'].'</td>
            <td>'.$one['modele'].'</td>
            <td>'.$one['carburant'].'</td>
        </tr>
';

}
$html .= '
    </tbody>
</table>
';

echo $html;
