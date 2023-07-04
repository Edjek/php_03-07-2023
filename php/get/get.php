<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La methode Get</title>
</head>
<body>
    <h1>Je suis la page get</h1>
    <a href="./param.php?id=21&nom=rachid">lien</a>

    <!-- creer un lien vers une page produit.php -->
    <!-- vous passerez en parametre, model => bmw, color => jaune, annee => 2017  -->
    <!-- Sur la page produit.php -->
    <!-- Afficherez dans une div -->
        <!-- h2 qui affichera le modele : -->
        <!-- p qui affichera la couleur de la voiture : -->
        <!-- p qui affichera année de sortie : -->
        <a href="./produit.php?model=bmw&color=jaune&year=2018">bwm</a>
        <a href="./produit.php?model=mercedes&color=rouge&year=2018">mercedes</a>
        <a href="./produit.php?model=renault&color=blanche&year=2018">renault</a>
</body>
</html>