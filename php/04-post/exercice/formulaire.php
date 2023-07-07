<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HTML - Formulaire</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <?php
    if (isset($_SESSION['message-error'])) {
    ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <?= $_SESSION['message-error'] ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php
        unset($_SESSION['message-error']);
    }
    ?>
    <div>
        <a href="./view/form-practice.html">exercice</a>
        <h1 class="text-center mb-3">Les formulaires</h1>
        <!-- Un formulaire se compose de la balise <form></form> qui va entourer tous les champs -->
        <form action="./traitement.php" method="POST" class="border w-50 m-auto p-2">
            <div class="mb-3">
                <!-- Un champ de formulaire se compose d'un <label> et de son <input> -->
                <!-- Pour lier les deux, l'attribut for="" et id="" doivent avoir la même valeur et être unique dans le formulaire -->
                <label for="name" class="form-label">nom</label>
                <input type="text" id="name" name="name"  class="form-control"/>
            </div>

            <div>
                <label for="pswd">mot de passe</label>
                <input type="password" id="pswd" name="pswd" />
            </div>

            <div>
                <label for="color">couleur</label>
                <input type="color" id="color" name="color" />
            </div>

            <div>
                <label for="date">date</label>
                <input type="date" id="date" name="date" />
            </div>

            <div>
                <label for="email">email</label>
                <input type="email" id="email" name="email" />
            </div>

            <div>
                <label for="description">message</label>
                <textarea id="description" name="message"></textarea>
            </div>

            <!-- Les inputs de type checkbox, radio, select, doivent avoir un attribut value="" afin d'avoir une valeur de retour à traiter -->
            <div>
                <label for="week">jour de la semaine</label>
                <select id="week" name="week">
                    <option value="lundi">lundi</option>
                    <option value="mardi">mardi</option>
                    <option value="mercredi">mercredi</option>
                </select>
            </div>

            <div>
                <span>Quels plats aimez-vous?</span>
                <label for="burger">burger</label>
                <input type="checkbox" id="burger" value="burger" name="food-burger" />
                <label for="pizza">pizza</label>
                <input type="checkbox" id="pizza" value="pizza" name="food-pizza" />
            </div>

            <div>
                <span>Etes-vous d'accord?</span>
                <!-- Les input de type radio doivent avoir un attribut de plus, name="" -->
                <!-- Ils doivent avoir la même valeur pour ne pouvoir valider qu'un seul des choix -->
                <label for="yes">oui</label>
                <input type="radio" value="oui" id="yes" name="agree" checked />
                <label for="no">non</label>
                <input type="radio" value="non" id="no" name="agree" />
            </div>

            <!-- IMPORTANT un form doit avoir un input type="submit" pour soumettre le formulaire -->
            <input type="submit" value="Envoyer" />
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>