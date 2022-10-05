
<!--<div id="affichage_score"> Taux de réussite: 0% </div>-->
<div id="container_fiche ">

    <div id="affichage_score"> Taux de réussite: 0% </div>

<?php


foreach ($data as $fiche) {$i = 0


?>
    <div id="container_questions" data-id="<?= $i?>" class="d-none">
        <div class="question">
                <div class="affichage_question"> <?= $fiche->question; ?> ?</div>
                    <div class="answers">
                        <?php foreach ($fiche->answers as $answer) {?>

                            <div class="answer" data-id="<?= $answer['id']?>">
                                <?= $answer['answer'] ?>
                            </div>

                        <?php  } ?>

                    </div>
                    <div class="question_feedback"> </div>
        </div>

    <?php
    $i++; } ?>


    </div>
</div>