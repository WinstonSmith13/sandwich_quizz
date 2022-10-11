<?php


foreach ($data as $fiche) {
    ?>

    <div id="container_fiche">
        <div id="affichage_score"> Taux de réussite: 0% </div>

        <div id="container_questions" class="hide">
            <div class="question">
                <div class="affichage_question"> <?= $fiche->question; ?> ?</div>
                <div class="answers">
                    <?php foreach ($fiche->answers as $answer) { ?>

                        <div class="answer">
                            <?= $answer['answer'] ?>
                        </div>

                    <?php } ?>

                </div>
                <div class="question_feedback"> </div>
            </div>
        </div>
    </div>

    <?php
} ?>