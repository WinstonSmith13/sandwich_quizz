<?php $i = 0;
?>
<div class="box">
    <div class="info_box">
        <div class="info_title">
            <span>Règles du SandwichQuizz</span>
        </div>
        <div class="info_list">
            <div class="info"><span>1. </span>Une seule bonne réponse par question</div>
            <div class="info"><span>2. </span> Pas de perte de points si vous choisissez la mauvaise réponse</div>
        </div>
        <div class="buttons">
            <a href="/?jeu">
                <button class="start">Commencer</button>
            </a>
        </div>
    </div>
</div>
<section id="container_questions<?= $i; ?>" class="d-none">
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>

