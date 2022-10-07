
<!--<div id="affichage_score"> Taux de réussite: 0% </div>-->
<div id="container_fiche ">

    <div id="affichage_score"> Taux de réussite: 0% </div>

<?php
$i = 0;
foreach ($data as $fiche) {


?>
    <form action="https://www.sandwich-quizz.org/" method="post">
    <div id="container_questions<?= $i;?>"  class="container_question d-none mt-5" >
        <div class="question ">
                <div class="affichage_question "> <?= $fiche->question; ?> ?</div>
                    <div class="answers">
                        <?php foreach ($fiche->answers as $answer) {?>

                            <div class="answer" >
                                <label for="<?= $answer['id']?>"><?= $answer['answer'] ?></label>
                                <input type="checkbox" id="<?= $answer['id']?>" name="answer">

                            </div>

                        <?php } ?>

                    </div>
                    <div class="question_feedback"> </div>
        </div>
    </div>
    </form>
    <?php

    $i++;} ?>



</div>