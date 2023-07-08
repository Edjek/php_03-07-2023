<?php
session_start();
require_once './src/config/bdd.php';

if ($_SESSION['admin'] != 1) {
    header('Location: ./index.php');
    exit();
}

$stmt = $pdo->prepare('SELECT * FROM manga');
$stmt->execute();
$mangas = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MANGA - Administration</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <header>
        <!-- inclure la nav -->
        <?php
        require_once './template/header.php';
        ?>
    </header>

    <main>
        <section class="container">
            <div class="border rounded m-5 p-3 ">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Titre</th>
                            <th>Modifier</th>
                            <th>Supprimer</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>id</th>
                            <th>Titre</th>
                            <th>Modifier</th>
                            <th>Supprimer</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        foreach ($mangas as $manga) {
                        ?>
                            <tr>
                                <td><?= $manga['id']  ?></td>
                                <td><?= $manga['title']  ?></td>
                                <!-- Faire passer en parametre l'id du manga pour le lien modifier et supprimer -->
                                <td><a href="./update-manga.php?id=<?= $manga['id']; ?>">modifier</a></td>
                                <td><a href="./delete-manga.php?id=<?= $manga['id']; ?>">supprimer</a></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>