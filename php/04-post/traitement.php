<?php
// La faille XSS, de son nom complet Cross-Site Scripting, est une faille qui permet d'injecter du code HTML et/ou Javascript dans des variables ou bases de données mal protégées.

if (isset($_POST['name']) && isset($_POST['pswd'])) {
    if (!empty($_POST['name']) || !empty($_POST['pswd'])) {
        // La fonction strip_tags() retourne le contenu en supprimant tout élément HTML
        $name = strip_tags($_POST['name']);

        // La fonction htmlspecialchars() retourne le contenu avec les caractères spéciaux neutralisés
        $name = htmlspecialchars($_POST['name']);
        var_dump($name);
    } else {
        echo 'Veuillez remplir tous les champs';
    }
} else {
    echo 'Erreur dans le formulaire';
}
