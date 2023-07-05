<?php
// Une session permet de conserver des informations à travers le site. Ces informations sont stockées dans un fichier temporaire sur le serveur. Ce fichier est relié à un internaute grâce à un identifiant unique : le session_id. Ce fichier peut contenir des informations sensibles : il ne faut donc pas le laisser à la portée de tout le monde. C'est pour cela qu'il est stocké dans un dossier temporaire du serveur, inaccessible aux internautes.

// Pour accéder à la session, il faut commencer par la démarrer avec la fonction session_start().
session_start();

if (isset($_POST['name']) && isset($_POST['pswd']) && isset($_POST['color']) && isset($_POST['date']) && isset($_POST['email']) && isset($_POST['message']) && isset($_POST['week'])  && isset($_POST['agree'])) {
    if (!empty($_POST['name']) && !empty($_POST['pswd']) && !empty($_POST['color']) && !empty($_POST['date']) && !empty($_POST['email']) && !empty($_POST['message']) && !empty($_POST['week'])  && !empty($_POST['agree'])) {
        foreach ($_POST as $key => $value) {
            $_POST[$key] = strip_tags($value);
        }

        // La fonction header location permet de rediriger vers une autre page
        // Il est recommandé de rajouoter la fonction exit() juste après pour être sur que le script soit bien stopper
        $_SESSION['message'] = 'Le formulaire à bien été envoyé';
        header('Location: ./index.php');
        exit();
    } else {
        header('Location: ./formulaire.php');
        exit();
    }
} else {
    header('Location: ./formulaire.php');
    exit();
}
