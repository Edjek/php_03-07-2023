<?php
session_start();

if($_SESSION['admin'] != 1){
    header('Location: ./index.php');
    exit();
}

// Connexion à la base de donnée
// Récupération de tous les mangas
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MANGA - Administration</title>
    <!-- Bootstrap -->
</head>
<body>
    <header>
        <!-- inclure la nav -->
    </header>

    <main>
        <section>
            <table>
                <!-- Boucle pour créeer chaque ligne du tableau avec les valeurs de la base de donnéé -->
                <!-- Afficher id | nom du manga | lien modifier | lien pour supprimer -->
            </table>
        </section>
    </main>


</body>
</html>