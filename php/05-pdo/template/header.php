<nav class="navbar navbar-expand-sm bg-primary" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="./index.php">Manga</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                <?php
                if (isset($_SESSION['admin']) && $_SESSION['admin'] == 1) {
                ?>
                    <li class="nav-item">
                        <a class="nav-link" href="./admin.php">Admin</a>
                    </li>

                <?php
                }
                ?>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="./index.php">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./connexion.php">Connexion</a>
                </li>
            </ul>
        </div>
    </div>
</nav>