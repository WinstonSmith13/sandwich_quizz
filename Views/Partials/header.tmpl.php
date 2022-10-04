
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="https://www.sandwich-quizz.org/">
                <!-- Affichage du logo -->
                <?php
                $svg = file_get_contents('/Library/simplon/sites/sandwich_quizz/public/Images/SVG/food_sandwich_layers-2.svg');
                echo $svg;
                ?>

        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Règles du jeu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">À propos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">HighScore</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


