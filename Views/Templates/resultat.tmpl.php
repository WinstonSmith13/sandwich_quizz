
<?php $i = 0;
?>

<div class="result_box">
    <div>
        <div class="icon">
            <a href="/"><?php
                $svg = file_get_contents('/Library/simplon/sites/sandwich_quizz/public/Images/SVG/food_sandwich_layers.svg');
                echo $svg;
                ?></a>
        </div>

        <div class="score_text">
            <span> Resultat: <p>100</p> % </span>
        </div>
        <div class="buttons">
            <a href="/">
                <button class="restart">Recommencer</button>
            </a>
        </div>
    </div>
</div>






<section id="container_questions<?= $i; ?>" class="d-none">
</section>