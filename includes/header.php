<header class="main-header">
    <nav>
        <div>
            <h1> WATI-STREAM</h1>
        </div>
        <ul>
            <li>
                <?php if (!isset($_SESSION['pseudo'])) { ?>
                    <a href="http://localhost/tp_film/views/connexion.php"> <i class="fas fa-user"></i> Connexion </a>
            </li>
            <li>
                <a href="http://localhost/tp_film/views/inscription.php"> <i class="fas fa-user-plus"> </i> Inscription </a>
            </li>
        <?php  } ?>
        <li>
            <a href="http://localhost/tp_film/views/catalogue.php"> <i class="fas fa-film"> </i> Catalogue</a>
        </li>
        <?php if (isset($_SESSION['pseudo'])) { ?>
            <li>
                <a href="http://localhost/tp_film/controller/deconnexion.php"><i class="fas fa-sign-out-alt"></i> Deconnexion</a>
            </li>
        <?php  } ?>
        </ul>
    </nav>
</header>