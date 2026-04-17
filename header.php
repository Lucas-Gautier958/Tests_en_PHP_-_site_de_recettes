<!-- header.php -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Site de recettes</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php" target="_blank">Contact</a>
                </li>
                <?php if (isset($_SESSION['LOGGED_USER'])) : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="recipes_create.php" target="_blank">Ajoutez une recette !</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Déconnexion</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>

<nav id="menu">
    <div class="element_menu">
        <h3>Les différents liens</h3>
        <ul>
            <li><a href="./includes/pratique.php" target="_blank">Lien pratique.php</a></li>
            <li><a href="./includes/tests.php" target="_blank">Lien tests.php</a></li>
            <li><a href="./includes/info.php" target="_blank">Lien info.php</a></li>
            <li><a href="./includes/page3.html" target="_blank">Lien page3.html</a></li>
            <li><a href="./includes/exemple.php" target="_blank">Lien exemple.php (exemple de cours)</a></li>
        </ul>
    </div>
</nav>
