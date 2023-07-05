<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HTML - Exercice Formulaire</title>
</head>

<body>
    <div>
        <h1>Nouvel exercice</h1>
        <form>
            <div>
                <label for="pseudo">Pseudo</label>
                <input type="text" id="pseudo" required autofocus />
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" id="password" required />
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" id="email" />
            </div>
            <div>
                <label for="date">date</label>
                <input type="date" id="date" />
            </div>
            <div>
                <label for="engine">Véhicule</label>
                <select id="engine">
                    <option value="moto">moto</option>
                    <option value="voiture">voiture</option>
                </select>
            </div>
            <div>
                <span>Sexe : </span>
                <input type="radio" id="men" value="homme" name="sex" />
                <label for="men">homme</label>
                <input type="radio" id="women" value="femme" name="sex" />
                <label for="women">femme</label>
            </div>
            <div>
                <span>Sport pratiqué :</span>
                <input type="checkbox" id="karate" value="karate" />
                <label for="karate">karaté</label>
                <input type="checkbox" id="tennis" value="tennis" />
                <label for="tennis">tennis</label>
            </div>
            <div>
                <label for="download">Télécharger</label>
                <input type="file" id="download" />
            </div>
            <input type="submit" value="Envoyer" />
            <input type="reset" name="" id="" />
        </form>
    </div>
</body>

</html>