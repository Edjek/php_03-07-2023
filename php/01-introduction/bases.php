<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // ---------------------
    echo '<h2>Les balises PHP</h2>';
    // ---------------------
    ?>

    <?php
    // Pour ouvrir un bloc PHP, on utilise la balise <?php
    // Pour fermer un bloc PHP, on utilise la balise suivante :
    ?>

    <p>Je suis du HTML</p>

    <?php
    // ---------------------
    echo '<h2>Les commentaires</h2>';
    // ---------------------
    // Commentaire sur une ligne
    # Commentaire sur une ligne
    /* 
        Commentaire sur 
        plusieurs lignes 
    */
    ?>

    <?php
    // ---------------------
    echo '<h2>Affichage</h2>';
    // ---------------------

    // Pour afficher du texte, on utilise la fonction echo
    echo "<h1>Hello, World !</h1>";
    // echo est une instruction qui permet d'afficher du texte dans le navigateur. 
    // Notez que l'on peut utiliser les guillemets doubles ou simples pour entourer le texte à afficher.
    ?>

    <?php
    // ---------------------
    echo '<h2>Variables : déclaration / affectation / types</h2>';
    // ---------------------
    // Déclaration d'une variable avec le signe $
    $a = 127; // Affectation de la valeur 127 dans la variable nommée "a"
    echo gettype($a); // gettype() est une fonction prédéfinie qui permet de voir le type d'une variable. Ici, il s'agit d'un entier (integer ou int)
    echo '<br>';
    $b = 1.5;
    echo gettype($b); // Ici, il s'agit d'un nombre à virgule (double ou float)
    echo '<br>';
    $c = "une chaine";
    echo gettype($c); // Ici, il s'agit d'une chaîne de caractères (string)
    echo '<br>';
    $d = '127';
    echo gettype($d); // Ici, il s'agit d'une chaîne de caractères (string)
    echo '<br>';
    $e = true;
    echo gettype($e); // Ici, il s'agit d'un booléen (boolean ou bool)
    echo '<br>';
    $f = false;
    echo gettype($f); // Ici, il s'agit d'un booléen (boolean ou bool)
    echo '<br>';

    // ---------------------
    echo '<h2>Concaténation</h2>';
    // ---------------------
    $x = "Bonjour ";
    $y = "tout le monde";
    echo $x . $y . "<br>"; // Le point de concaténation peut être traduit par "suivi de"
    echo "$x $y <br>"; // Entre guillemets, les variables sont évaluées : c'est leur contenu qui est affiché
    echo '$x $y <br>'; // Entre quotes, les variables ne sont pas évaluées : c'est leur nom littéral qui est affiché

    // ---------------------
    echo '<h2>Concaténation lors de l\'affectation</h2>';
    // ---------------------
    $prenom1 = "Bruno";
    $prenom1 = "Claire"; // La variable $prenom1 contient la chaîne "Claire" et non plus "Bruno"
    echo $prenom1 . '<br>'; // Affiche Claire


    $prenom2 = "Nicolas";
    $prenom2 .= " Marie"; // L'opérateur .= permet d'ajouter une chaîne à la suite d'une autre dans une variable
    echo $prenom2 . '<br>'; // Affiche "Nicolas Marie"  

    // ---------------------
    echo '<h2>Guillemets et quotes</h2>';
    // ---------------------
    $message = "aujourd'hui";
    $message = 'aujourd\'hui'; // On échappe les apostrophes dans les quotes simples avec l'anti-slash
    $txt = "Bonjour";
    echo "$txt tout le monde <br>"; // Dans les guillemets, la variable est évaluée : c'est son contenu qui est affiché
    echo '$txt tout le monde <br>'; // Dans les quotes, la variable n'est pas évaluée : c'est son nom littéral qui est affiché

    // ---------------------
    echo '<h2>Constantes et constantes magiques</h2>';
    // ---------------------
    // Une constante permet de conserver une valeur sauf que celle-ci ne peut pas être modifiée durant l'exécution du ou des scripts. 
    // Utile pour conserver les paramètres de connexion à la BDD par exemple.
    define("CAPITALE", "Paris"); // Par convention, une constante se déclare toujours en majuscules
    echo CAPITALE . '<br>'; // Affiche Paris
    // define("CAPITALE", "Rome"); // Erreur : on ne peut pas modifier une constante une fois qu'elle est déclarée
    echo __FILE__ . '<br>'; // Affiche le chemin complet vers le fichier courant
    echo __LINE__ . '<br>'; // Affiche le numéro de la ligne courante
    echo __DIR__ . '<br>'; // Affiche le dossier dans lequel est le fichier courant

    // ---------------------
    echo '<h2>Exercice</h2>';
    // ---------------------
    // Afficher Bleu-Blanc-Rouge (avec les tirets) en mettant le texte de chaque couleur dans des variables.

    $bleu = "Bleu";
    $blanc = "Blanc";
    $rouge = "Rouge";
    echo $bleu . "-" . $blanc . "-" . $rouge . "<br>";
    echo "$bleu-$blanc-$rouge <br>";
    echo '$bleu-$blanc-$rouge <br>';

    // ---------------------
    echo '<h2>Opérateurs arithmétiques</h2>';
    // ---------------------
    $a = 10;
    $b = 2;
    echo $a + $b . '<br>'; // Affiche 12
    echo $a - $b . '<br>'; // Affiche 8
    echo $a * $b . '<br>'; // Affiche 20
    echo $a / $b . '<br>'; // Affiche 5
    echo $a % $b . '<br>'; // Affiche 0 (modulo = reste de la division entière)
    // Opération / affectation
    $a += $b; // $a = $a + $b
    echo $a . '<br>'; // Affiche 12
    $a -= $b; // $a = $a - $b
    echo $a . '<br>'; // Affiche 10
    $a *= $b; // $a = $a * $b
    echo $a . '<br>'; // Affiche 20
    $a /= $b; // $a = $a / $b
    echo $a . '<br>'; // Affiche 10
    $a %= $b; // $a = $a % $b
    echo $a . '<br>'; // Affiche 0

    // ---------------------
    echo '<h2>Structures conditionnelles (if / else)</h2>';
    // ---------------------
    $a = 10;
    $b = 5;
    $c = 2;
    // if ... else
    if ($a > $b) {
        echo '$a est supérieur à $b <br>';
    } else {
        echo '$a est inférieur à $b <br>';
    }

    // L'opérateur AND écrit && permet de vérifier que 2 conditions soient réalisées en même temps.
    if ($a > $b && $b > $c) {
        echo 'OK pour les 2 conditions <br>';
    }

    // L'opérateur OR écrit || permet de vérifier qu'au moins l'une des 2 conditions soit réalisée.
    if ($a == 9 || $b > $c) {
        echo 'OK pour au moins une des 2 conditions <br>';
    }

    // if ... elseif ... else
    if ($a == 8) {
        echo 'réponse 1 : $a est égal à 8 <br>';
    } elseif ($a != 10) {
        echo 'réponse 2 : $a est différent de 10 <br>';
    } else {
        echo 'réponse 3 : les 2 conditions précédentes sont fausses <br>';
    }

    // ---------------------
    echo '<h2>Conditions ternaires</h2>';
    // ---------------------
    $a = 10;
    echo ($a == 10) ? '$a est égal à 10 <br>' : '$a est différent de 10 <br>';

    // ---------------------
    echo '<h2>isset() et empty()</h2>';
    // ---------------------
    // Définitions :
    // empty() : teste si c'est vide (0, '', NULL, false ou non défini)
    // isset() : teste si c'est défini et a une valeur non NULL

    $var1 = 0;
    $var2 = "";
    if (empty($var1)) echo "0, vide, NULL, false ou non défini <br>";
    if (isset($var2)) echo "var2 existe et est non NULL <br>";

    // ---------------------
    echo '<h2>Condition switch</h2>';
    // ---------------------
    $couleur = 'jaune';

    switch ($couleur) {
        case 'bleu':
            echo 'Vous aimez le bleu <br>';
            break;
        case 'rouge':
            echo 'Vous aimez le rouge <br>';
            break;
        case 'vert':
            echo 'Vous aimez le vert <br>';
            break;
        default:
            echo 'Vous n\'aimez ni le bleu, ni le rouge, ni le vert <br>';
            break;
    }

    // Exercice : refaire le switch précédent avec des conditions if ... pour obtenir exactement le même résultat.

    if ($couleur == 'bleu') {
        echo 'Vous aimez le bleu <br>';
    } elseif ($couleur == 'rouge') {
        echo 'Vous aimez le rouge <br>';
    } elseif ($couleur == 'vert') {
        echo 'Vous aimez le vert <br>';
    } else {
        echo 'Vous n\'aimez ni le bleu, ni le rouge, ni le vert <br>';
    }

    // Exercice : faire un switch qui test la valeur de $animal
    // chien => Afficher "Wouf"
    // chat => Afficher "Miaou"
    // oiseau => Afficher "Cui cui"
    // default => "Je ne connais pas cet animal"

    // ---------------------
    echo '<h2>Fonctions prédéfinies</h2>';
    // ---------------------
    // Une fonction prédéfinie permet de réaliser un traitement spécifique prédéterminé dans le langage PHP.

    echo '<h3>Traitement des chaînes</h3>';
    $email1 = 'admin@gmail.com';
    echo strpos($email1, '@') . '<br>'; // Affiche la position 5 de l'@ dans la chaîne (compte à partir de 0)
    $email2 = 'bonjour';
    echo strpos($email2, '@') . '<br>'; // Affiche rien car la fonction renvoie false quand elle ne trouve pas la chaîne recherchée

    // strlen :
    $phrase = 'mettez une phrase ici à cet endroit';
    echo strlen($phrase) . '<br>'; // Affiche 34 (compte les caractères)
    echo mb_strlen($phrase) . '<br>'; // Affiche 34 (compte les caractères mais gère les accents)

    // substr :
    echo substr($phrase, 0, 6) . '<br>'; // Affiche mettez (démarre à la position 0 et compte 6 caractères)
    echo substr($phrase, 7) . '<br>'; // Affiche une phrase ici à cet endroit (démarre à la position 7 et compte jusqu'à la fin)
    echo substr($phrase, -9) . '<br>'; // Affiche cet endroit (démarre à 9 caractères de la fin et compte jusqu'à la fin)

    // strtolower, strtoupper, trim :
    $message = '     Hello World !     ';
    echo strtolower($message) . '<br>'; // Affiche tout en minuscules
    echo strtoupper($message) . '<br>'; // Affiche tout en majuscules
    echo trim($message) . '<br>'; // Affiche sans les espaces au début et à la fin

    // ---------------------
    echo '<h3>Traitement des dates</h3>';
    // ---------------------
    // time() :
    echo time() . '<br>'; // Affiche le timestamp actuel (nombre de secondes écoulées depuis le 01/01/1970 à 00:00:00)

    // mktime() :
    $timestamp = mktime(15, 30, 0, 12, 25, 2018);
    echo $timestamp . '<br>'; // Affiche le timestamp correspondant à la date indiquée
    echo date('Y-m-d H:i:s', $timestamp) . '<br>'; // Affiche la date correspondant au timestamp indiqué

    // Exercice : afficher la date d'aujourd'hui avec la fonction date() en la mettant dans le format suivant : "mardi 2 juillet 2019, il est 14h25 et 30 secondes".

    echo date('l j F Y, \i\l \e\s\t H\hi \e\t s \s\e\c\o\n\d\e\s') . '<br>';

    // strtotime() :
    $dateJour = strtotime('2 July 2019');
    echo $dateJour . '<br>'; // Affiche le timestamp correspondant à la date indiquée
    echo date('Y-m-d H:i:s', $dateJour) . '<br>'; // Affiche la date correspondant au timestamp indiqué

    // ---------------------
    echo '<h3>Tableaux de données ARRAY</h3>';
    // ---------------------
    // Un tableau de données ARRAY est déclaré comme une variable améliorée dans laquelle on stocke une multitude de valeurs. Ces valeurs peuvent être de n'importe quel type et possèdent un indice par défaut dont la numérotation commence à 0.

    // Déclarer un tableau ARRAY :
    $liste = array('Grégoire', 'Nathalie', 'Emilie', 'François', 'Georges');
    // echo $liste; // Erreur de type "Array to string conversion" car on ne peut pas afficher directement un tableau ARRAY avec un echo

    echo '<pre>';
    var_dump($liste); // Affiche le contenu du tableau avec le type des valeurs
    echo '</pre>';

    echo '<pre>';
    print_r($liste); // Affiche le contenu du tableau
    echo '</pre>';

    // Autre façon de déclarer un tableau ARRAY :
    $tab = ['France', 'Italie', 'Espagne', 'Portugal'];
    echo '<pre>';
    print_r($tab);
    echo '</pre>';

    // Afficher "Italie" :
    echo $tab[1] . '<br>'; // Affiche la valeur qui se trouve à l'indice 1 du tableau ARRAY $tab

    // Ajouter une valeur à la fin du tableau ARRAY :
    $tab[] = 'Suisse'; // Les [] vides permettent d'ajouter une valeur à la fin du tableau
    echo '<pre>';
    print_r($tab);
    echo '</pre>';

    // Tableau ARRAY associatif :
    $couleur = array(
        'j' => 'jaune',
        'b' => 'bleu',
        'v' => 'vert'
    );

    echo '<pre>';
    print_r($couleur);
    echo '</pre>';

    // Afficher "vert" :
    echo $couleur['v'] . '<br>';

    // Ajouter une valeur à la fin du tableau ARRAY associatif :
    $couleur['r'] = 'rouge';
    echo '<pre>';
    print_r($couleur);
    echo '</pre>';

    // Tableau ARRAY multidimensionnel :

    $tab_multi = array(
        0 => array(
            'prenom' => 'Grégoire',
            'nom' => 'Du Bouëxic',
            'telephone' => '06 06 06 06 06'
        ),
        1 => array(
            'prenom' => 'Nathalie',
            'nom' => 'Du Bouëxic',
            'telephone' => '06 06 06 06 06'
        ),
        2 => array(
            'prenom' => 'Emilie',
            'nom' => 'Du Bouëxic',
            'telephone' => '06 06 06 06 06'
        )
    );

    echo '<pre>';
    print_r($tab_multi);
    echo '</pre>';

    // Afficher "Nathalie" :
    echo $tab_multi[1]['prenom'] . '<br>';

    // ---------------------
    echo '<h3>Boucle foreach pour les tableaux ARRAY</h3>';
    // ---------------------
    // foreach est un moyen simple de passer en revue un tableau ARRAY. Elle fonctionne uniquement sur les tableaux et les objets. Cette boucle est particulièrement adaptée aux tableaux ARRAY.

    echo '<pre>';
    foreach ($tab_multi as $indice => $valeur) { // La variable $indice contient l'indice du tableau ARRAY et la variable $valeur contient la valeur correspondante à l'indice
        echo $indice . ' : ' . $valeur['prenom'] . '<br>';
    }
    echo '</pre>';

    // Exercice : afficher la liste des pays dans une liste HTML (ul et li) à partir du tableau ARRAY $tab.

    echo '<ul>';
    foreach ($tab as $indice => $valeur) {
        echo '<li>' . $valeur . '</li>';
    }
    echo '</ul>';

    // ---------------------
    echo '<h2>Fonctions utilisateur</h2>';
    // ---------------------
    // Les fonctions qui ne sont pas prédéfinies en PHP sont déclarées puis exécutées par l'utilisateur.

    // Déclaration d'une fonction :
    function separation()
    { // On déclare une fonction avec le mot-clé function suivi du nom de la fonction puis d'une paire de ()
        echo '<hr>';
    }

    // Exécution d'une fonction :
    separation(); // Pour exécuter une fonction, on l'appelle par son nom suivi d'une paire de ()

    // Fonction avec paramètre et return :
    function bonjour($qui)
    { // $qui apparaît ici comme une variable de réception qui réceptionne la valeur passée en argument
        return 'Bonjour ' . $qui . '<br>'; // return renvoie la chaîne de caractères "Bonjour" avec la valeur de la variable $qui
    }

    echo bonjour('Grégoire'); // Si la fonction attend un argument, il faut obligatoirement lui envoyer

    $prenom = 'Nathalie';
    echo bonjour($prenom); // On peut envoyer une variable à une fonction

    // Exercice : écrire une fonction factureEssence() qui calcule le coût total de votre facture en fonction du nombre de litres d'essence que vous indiquez lors de l'appel de la fonction. Cette fonction retourne la phrase "Votre facture est de X euros pour Y litres d'essence." où X et Y sont des variables.

    function factureEssence($litres)
    {
        $prix = $litres * 1.5;
        return 'Votre facture est de ' . $prix . ' euros pour ' . $litres . ' litres d\'essence.<br>';
    }

    echo factureEssence(50);

    // ---------------------
    echo '<h2>Structures itératives : les boucles</h2>';
    // ---------------------
    // Les boucles sont destinées à répéter des lignes de code de façon automatique.

    // Boucle while :
    $i = 0; // On initialise une variable qui sert de compteur
    while ($i < 3) { // Tant que $i est inférieur à 3, on exécute les accolades qui suivent
        echo $i . '<br>';
        $i++; // On incrémente $i de 1 à chaque tour de boucle pour que la condition d'entrée devienne fausse à un moment donné et arrête la boucle
    }

    // Exercice : à l'aide d'une boucle while, afficher un sélecteur avec les années depuis 1920 jusqu'à 2020.

    $annee = 1920;
    echo '<select>';
    while ($annee <= 2020) {
        echo '<option>' . $annee . '</option>';
        $annee++;
    }
    echo '</select>';

    // Boucle do while :
    // La boucle do while a la particularité de s'exécuter au moins une fois, puis tant que la condition de fin est vraie.

    $j = 0;
    do {
        echo 'Je fais un tour de boucle';
        $j++;
    } while ($j > 10); // La condition renvoie false, pourtant la boucle a bien tourné une fois

    // Boucle for :
    // La boucle for est une autre syntaxe de la boucle while

    for ($i = 0; $i < 3; $i++) { // On trouve dans les () de for : la valeur de départ; la condition d'entrée dans la boucle; la variation de $i
        echo $i . '<br>';
    }

    // Exercice : afficher un sélecteur avec les années depuis 1920 jusqu'à 2020 à l'aide d'une boucle for.

    echo '<select>';
    for ($annee = 1921; $annee <= 2020; $annee++) {
        echo '<option>' . $annee . '</option>';
    }
    echo '</select>';

    // ---------------------
    echo '<h2>Inclusions de fichiers</h2>';
    // ---------------------
    // En PHP, il est possible d'inclure des fichiers dans d'autres fichiers avec l'instruction require, include ou encore require_once (on utilise plutôt require_once en pratique).

    echo '<p>Voici le code de la page inclus.php : </p>';
    echo '<pre>';
    echo htmlspecialchars(file_get_contents('include.php')); // file_get_contents() lit un fichier et renvoie son contenu sous forme de chaîne de caractères
    echo '</pre>';

    // require 'inclus.php'; // Le fichier est obligatoire pour le fonctionnement du site. Si le fichier n'est pas trouvé, require génère une erreur fatale et stoppe l'exécution du code.
    // include 'inclus.php'; // Le fichier est facultatif pour le fonctionnement du site. Si le fichier n'est pas trouvé, include génère une erreur de type warning et poursuit l'exécution du code.
    require_once 'include.php'; // Le _once permet de vérifier si le fichier a déjà été inclus. Si c'est le cas, il ne le ré-inclut pas.
    include_once 'include.php'; // Le _once permet de vérifier si le fichier a déjà été inclus. Si c'est le cas, il ne le ré-inclut pas.

    // ---------------------
    echo '<h2>Les superglobales</h2>';
    // ---------------------
    // Les superglobales sont des variables de type ARRAY qui sont disponibles dans tous les contextes du script, y compris dans l'espace local des fonctions.

    // $_SERVER :
    echo '<pre>';
    print_r($_SERVER); // $_SERVER contient des informations liées au serveur
    echo '</pre>';

    echo '<p>Adresse IP du serveur : ' . $_SERVER['SERVER_ADDR'] . '</p>';
    echo '<p>Nom du fichier exécuté : ' . $_SERVER['SCRIPT_FILENAME'] . '</p>';
    echo '<p>Chemin du fichier exécuté : ' . $_SERVER['SCRIPT_NAME'] . '</p>';

    // $_GET :
    echo '<pre>';
    print_r($_GET); // $_GET contient des informations envoyées en paramètre dans l'URL
    echo '</pre>';

    if (isset($_GET['article'])) { // Si l'indice "article" est défini dans $_GET, c'est que cet indice est passé dans l'URL
        echo '<h1>' . $_GET['article'] . '</h1>';
    }

    // Exercice : afficher le titre de la page, le h1, en fonction de l'indice "article" passé dans l'URL. Si l'indice n'est pas défini, afficher "Accueil".

    if (isset($_GET['article'])) {
        echo '<h1>' . $_GET['article'] . '</h1>';
    } else {
        echo '<h1>Accueil</h1>';
    }

    // $_POST :
    echo '<pre>';
    print_r($_POST); // $_POST contient des informations envoyées en paramètre dans le corps de la requête HTTP
    echo '</pre>';

    if (!empty($_POST)) { // Si $_POST n'est pas vide, c'est que le formulaire a été envoyé
        echo '<p>Prénom : ' . $_POST['prenom'] . '</p>';
        echo '<p>Description : ' . $_POST['description'] . '</p>';
    }

    // Exercice : afficher les données du formulaire dans des <p>, en mettant un message d'erreur si le champ est vide.

    if (!empty($_POST)) {
        if (empty($_POST['prenom'])) {
            echo '<p style="color: red;">Veuillez renseigner un prénom</p>';
        } else {
            echo '<p>Prénom : ' . $_POST['prenom'] . '</p>';
        }
        if (empty($_POST['description'])) {
            echo '<p style="color: red;">Veuillez renseigner une description</p>';
        } else {
            echo '<p>Description : ' . $_POST['description'] . '</p>';
        }
    }

    // ---------------------
    echo '<h2>Les sessions</h2>';
    // ---------------------
    // Une session permet de conserver des informations d'une page à l'autre du site. Ces informations sont stockées dans un fichier temporaire sur le serveur. Ce fichier est relié à un internaute grâce à un identifiant unique : le session_id. Ce fichier peut contenir des informations sensibles : il ne faut donc pas le laisser à la portée de tout le monde. C'est pour cela qu'il est stocké dans un dossier temporaire du serveur, inaccessible aux internautes.

    // Pour accéder à la session, il faut commencer par la démarrer avec la fonction session_start().
    session_start(); // Permet de créer un fichier de session ou d'ouvrir un fichier de session existant

    // $_SESSION :
    echo '<pre>';
    print_r($_SESSION); // $_SESSION est une superglobale de type ARRAY. Chaque information de session est accessible via un indice dans ce tableau ARRAY.
    echo '</pre>';

    // On peut ajouter des informations à la session :
    $_SESSION['pseudo'] = 'Tintin';

    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';

    // On peut supprimer une information de la session :
    unset($_SESSION['pseudo']);

    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';

    // On peut vérifier si une information existe dans la session :
    if (isset($_SESSION['pseudo'])) {
        echo '<p>Le pseudo est bien défini dans la session.</p>';
    } else {
        echo '<p>Le pseudo n\'est pas défini dans la session.</p>';
    }

    // On peut vérifier si la session est vide :
    if (empty($_SESSION)) {
        echo '<p>La session est vide.</p>';
    } else {
        echo '<p>La session n\'est pas vide.</p>';
    }

    // On peut supprimer la session :
    // session_destroy(); // Supprime le fichier de session du serveur. On peut vider le fichier de session sans le supprimer avec session_unset().
    // session_unset(); // Vide le fichier de session sans le supprimer du serveur.

    // Exercice : créer un formulaire avec un champ "pseudo" et un champ "mot de passe". Si le pseudo et le mot de passe sont corrects, on affiche un message de bienvenue. Sinon, on affiche un message d'erreur.

    if (!empty($_POST)) {
        if ($_POST['pseudo'] == 'Tintin' && $_POST['mdp'] == 'milou') {
            $_SESSION['pseudo'] = $_POST['pseudo'];
            echo '<p>Bienvenue ' . $_POST['pseudo'] . ' !</p>';
        } else {
            $_SESSION['message'] = 'Erreur d\'authentification';
        }
    }

    // ---------------------
    echo '<h2>Les cookies</h2>';
    // ---------------------
    // Un cookie est un petit fichier de quelques ko, stocké sur le poste de l'internaute, et qui contient des informations. Les cookies sont automatiquement renvoyés au serveur web par le navigateur lorsque l'internaute navigue dans les pages concernées par le ou les cookies. PHP permet de récupérer très facilement les données contenues dans un cookie : elles sont stockées dans la superglobale $_COOKIE.

    // Pour créer un cookie, on utilise la fonction setcookie(), en lui passant 3 arguments :
    // 1. le nom du cookie
    // 2. la valeur du cookie
    // 3. la date d'expiration (timestamp)

    setcookie('pseudo', 'Tintin', time() + 3600); // La date d'expiration est exprimée en timestamp : time() retourne le timestamp actuel, et on ajoute 3600 secondes pour obtenir une date d'expiration d'une heure dans le futur.

    // Pour supprimer un cookie, on lui affecte une date d'expiration passée :
    setcookie('pseudo', 'Tintin', time() - 3600);

    // $_COOKIE :
    echo '<pre>';
    print_r($_COOKIE); // $_COOKIE est une superglobale de type ARRAY. Chaque cookie est accessible via un indice dans ce tableau ARRAY.
    echo '</pre>';

    // Exercice : créer un formulaire avec un champ "pseudo" et un champ "mot de passe". 
    // Si le pseudo et le mot de passe sont corrects, on crée un cookie avec le pseudo. 
    // Si le cookie existe, on affiche un message de bienvenue. Sinon, on affiche un message d'erreur.

    if (!empty($_POST)) {
        if ($_POST['pseudo'] == 'Tintin' && $_POST['mdp'] == 'milou') {
            setcookie('pseudo', $_POST['pseudo'], time() + 3600);
        }
    }

    if (isset($_COOKIE['pseudo'])) {
        echo '<p>Bienvenue ' . $_COOKIE['pseudo'] . ' !</p>';
    } else {
        echo '<p>Erreur d\'authentification</p>';
    }

    // ---------------------
    echo 'Introduction aux objets';
    // ---------------------
    // Un objet est un autre type de données. 
    // Il représente un objet réel (par exemple : un produit, un personnage, un panier d'achat, etc.). 
    // Un objet est déclaré à partir d'un plan de construction : la classe. La classe est un plan général de l'objet. 
    // L'objet est instancié à partir de la classe. Chaque objet est différent, mais ils ont tous la même structure (les mêmes propriétés et les mêmes méthodes).

    // Exemple : nous avons une classe "hero" qui représente un personnage de jeu vidéo.

    class Hero
    {
        public $pseudo = 'Tintin'; // Propriété "pseudo"
        public $vie = 100; // Propriété "vie"
        public $atk = 50; // Propriété "atk"

        public function regenerer() // Méthode "regenerer"
        {
            $this->vie = 100;
        }

        public function attaque($cible) // Méthode "attaque"
        {
            $cible->vie -= $this->atk;
        }
    }

    // Instanciation de la classe :
    $hero1 = new Hero(); // $hero1 est un objet de la classe "Hero". C'est une instance de la classe "Hero".

    echo '<pre>';
    print_r($hero1);
    echo '</pre>';

    // On peut accéder aux propriétés et aux méthodes de l'objet avec l'opérateur -> :
    echo '<p>Pseudo : ' . $hero1->pseudo . '</p>'; // Affiche "Tintin"
    echo '<p>Vie : ' . $hero1->vie . '</p>'; // Affiche "100"
    echo '<p>Atk : ' . $hero1->atk . '</p>'; // Affiche "50"

    $hero1->regenerer(); // On appelle la méthode "regenerer" de l'objet $hero1
    echo '<p>Vie : ' . $hero1->vie . '</p>'; // Affiche "100"

    $hero2 = new Hero(); // $hero2 est un objet de la classe "Hero". C'est une instance de la classe "Hero".

    echo '<pre>';
    print_r($hero2);
    echo '</pre>';

    $hero1->attaque($hero2); // On appelle la méthode "attaque" de l'objet $hero1, en lui passant l'objet $hero2 en argument
    echo '<p>Vie de hero2 : ' . $hero2->vie . '</p>'; // Affiche "50"

    ?>


</body>

</html>