<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduction à PHP</title>
</head>

<body>
    <h1>Découverte de PHP</h1>
    <?php
    // Pour ouvrir un bloc PHP, on utilise la balise <?php
    // Pour fermer un bloc PHP on utilise la balise suivante : 
    ?>

    <p>Je suis du HTML</p>

    <?php
    // ----------------------------
    echo '<h2>Les commentaires</h2>';
    // ----------------------------
    // Je suis un commentaire en PHP
    # Je suis aussi un commentaire en PHP
    /* 
        Je suis un commentaire
        sur plusieurs lignes
    */

    // ----------------------------
    echo '<h2>Affichage</h2>';
    // ----------------------------
    echo 'Hello, world !';
    print "Hello, World !";
    //  echo est une instruction qui permet d'afficher du texte dans le navigateur
    //  print équivalent à echo

    // ----------------------------
    echo '<h2>Les variables</h2>';
    // ----------------------------
    // Déclaration d'une variable avec le signe $
    $unNom;
    // Affectation de la valeur 127 à la variable nommée unNOm
    $unNom = 127;
    echo $unNom;
    echo '<br>';
    echo gettype($unNom);
    echo '<br>';
    $unMessage = 'Salut, l\'equipe. Je suis un message dans une variable';
    echo gettype($unMessage);
    echo '<br>';
    $unNombreAVirgule = 23.6;
    echo gettype($unNombreAVirgule);
    echo '<br>';
    $unBooleen = true;
    echo gettype($unBooleen);

    // ----------------------------
    echo '<h2>La concaténation</h2>';
    // ----------------------------
    $a = 'Bonjour';
    $b = 'tout le monde';
    // Entre guillemets simple les variables ne sont pas évaluées : c'est leur nom littéral qui est affiché
    echo $a . ' ' . $b . ', je suis en cours de PHP';
    echo '<br>';
    // Entre guillemets doubles, les variables sont évaluées : c'est leur contenu qui est affiché
    echo "$a $b, je suis un message en PHP";

    echo '<br>';
    echo '$a $b, je suis un message en PHP';

    // ----------------------------
    echo '<h2>Les constantes et les constantes magiques</h2>';
    // ----------------------------

    // Une constante permet de sauvegarder une valeur sauf que celle ci ne peut pas être modifiée
    // Utile pour conserver les parametre de la base de donnée
    // Par convention, une constante  se déclare toujours en majuscule
    define("CAPITAL", "Paris");

    echo CAPITAL;
    echo '<br>';
    echo __FILE__ . '<br>'; // Affiche le chemin complet vers le fichier courant
    echo __LINE__ . '<br>'; // Affiche le numéro de la ligne courante
    echo __DIR__ . '<br>'; // Affiche le dossier dans lequel est le fichier courant

    // Déclare  3 variables bleu, blanc, rouge 
    // Afficher Bleu-Blanc-Rouge (avec les tirets) en mettant le texte de chaque couleur dans des variables.
    $blue = 'Bleu';
    $white = 'Blanc';
    $red = 'Rouge';

    echo $blue . '-' . $white . '-' . $red . '<br>';
    echo "$blue-$white-$red <br>";
    echo '$blue-$white-$red';

    // ----------------------------
    echo '<h2>Les operateurs arithmétiques</h2>';
    // ----------------------------
    $a = 10;
    $b = 2;
    echo $a + $b . '<br>';
    echo $a - $b . '<br>';
    echo $a * $b . '<br>';
    echo $a / $b . '<br>';
    echo $a % $b . '<br>'; // modulo = reste de la division entière
    $a++;
    echo $a . '<br>';
    $a = $a + 1;
    echo $a . '<br>';
    $a += 2;
    echo $a . '<br>';
    $a *= 2;
    echo $a . '<br>';
    $a %= 2;
    echo $a . '<br>';

    // ----------------------------
    echo '<h2>Les structures conditionnelles (if / elseif/ else</h2>';
    // ----------------------------
    $a = 23;
    $b = 5;
    $c = 2;

    if ($a < $b) {
        echo "$a est superieur à $b";
    } elseif ($a == $b) {
        echo "$a est égal à $b";
    } else {
        echo 'si aucune condition est rempli le else sera executé <br>';
    }

    // L'opérateur AND écrit && permet de vérifier que 2 conditions soient réalisées en même temps.
    if ($a > $b && $b > $c) {
        echo 'Ok pour les 2 conditions <br>';
    }

    // L'opérateur OR écrit || permet de vérifier qu'au moins l'une des 2 conditions soit réalisée.
    if (($a === 9 || $b > $c) && $a > $b) {
        echo 'Ok, pour au moins une des 2 conditions <br>';
    }

    $couleur = 'bleu';

    switch ($couleur) {
        case 'bleu':
            echo 'Vous aimez le bleu <br>';
            break;
        case 'rouge':
            echo 'vous le rouge <br>';
            break;
        case 'vert':
            echo 'vous aimez le vert <br>';
            break;
        default:
            echo ' vous n \'aimez ni le bleu, ni le rouge, ni le vert <br>';
    }

    $animal = 'chat';

    switch ($animal) {
        case 'chien':
            echo 'Wouf<br>';
            break;
        case 'chat':
            echo 'Miaou<br>';
            break;
        case 'oiseau':
            echo 'Cui cui<br>';
            break;
        default:
            echo 'Je ne connais pas cet animal !<br>';
    }



    // Exercice : refaire le switch précédent avec des conditions if ... pour obtenir exactement le même résultat.
    if ($couleur == 'bleu') {
        echo 'Vous aimez le bleu';
    } elseif ($couleur == 'rouge') {
        echo 'vous le rouge';
    } elseif ($couleur = 'vert') {
        echo 'vous aimez le vert';
    } else {
        echo ' vous n \'aimez ni le bleu, ni le rouge, ni le vert';
    }

    // ----------------------------
    echo '<h2>Les tableaux</h2>';
    // ----------------------------
    // Un tableau de données ARRAY est déclaré comme une variable améliorée dans laquelle on stocke une multitude de valeurs. Ces valeurs peuvent être de n'importe quel type et possèdent un indice par défaut dont la numérotation commence à 0.

    $liste = ['France', 'Italie', 'Espagne', 'Portugal'];
    echo $liste[3];
    print $liste[3] . '<br>';

    echo '<pre>';
    var_dump($liste); // Affiche le contenu du tableau avec le type des valeurs
    echo '</pre>';

    echo '<br>';

    echo '<pre>';
    print_r($liste); // Affiche le contenu du tableau
    echo '</pre>';

    // Autre façon de déclarer un tableau ARRAY :
    $liste2 = array('France', 'Italie', 'Espagne', 'Portugal');
    echo $liste2[0];

    $liste2[] = 'Algerie'; // Les [] vides permettent d'ajouter une valeur à la fin du tableau
    var_dump($liste2);

    // ----------------------------
    echo '<h3>Les tableaux associatifs</h3>';
    // ----------------------------
    $user = [
        'prenom' => 'rachid',
        'nom' => 'Edjekouane',
        'age' => 40,
        'telephone' => '06 56 87 45 36'
    ];
    // Bonjour je m'appelle rachid edjekouane, j'ai 40 ans et mon numéro de téléphone est le  : 06 56 87 45 36
    echo 'Bonjour, je m\'appelle ' . $user['prenom'] . ' ' . $user['nom'] . ', j\'ai ' . $user['age'] . 'ans et mon numéro de téléphone est le : ' . $user['telephone'];

    // ----------------------------
    echo '<h2>Les structures itératives : les boucles</h2>';
    // ----------------------------

    // Boucle while :
    $i = 0; //On initialise
    while ($i < 5) { // Tans que $i est inférieur à 5, on execute les accolades
        echo $i . '<br>';
        $i++; // On incremente $i de 1 à chaque tour pour que la condition d'entrée devienne fausse à un moment


    }
    echo '<select>';
    $i = 1920;
    while ($i <= 2020) {
        echo "<option>$i</option>";
        $i++;
    }
    echo '</select>';
    ?>

    <select name="" id="">
        <?php
        $i = 1920;
        while ($i <= 2020) {
        ?>
            <option value="<?php echo $i; ?>"><?= $i; ?></option>
        <?php
            $i++;
        }
        ?>
    </select>
    <?php
    // Boucle for() :
    for ($i = 0; $i < 4; $i++) {
        echo "<p>J'ai fait $i tours </p>";
    }

    // Exercice : à l'aide d'une boucle while, afficher un sélecteur avec les années depuis 1920 jusqu'à 2020.
    // Exercice : faire le même exercice avec la boucle for
    ?>
    <select name="" id="">
        <?php
        for ($i = 1920; $i <= 2020; $i++) {

            echo "<option value=\"$i\">$i</option>";
        }
        ?>
    </select>
    <select name="" id="">
        <?php
        for ($i = 1920; $i <= 2020; $i++) {
        ?>
            <option value="<?= $i; ?>"><?= $i; ?></option>
        <?php
        }
        ?>
    </select>
    <?php
    
    // Boucle foreach()
    ?>

</body>

</html>