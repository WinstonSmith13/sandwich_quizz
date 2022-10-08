<div class="quizz_box">
    <div class="header_fiche">
        <div class="title">
            <span>1 sur 6 Questions</span>
        </div>
        <div class="score">
            <div class="score_text">Score %</div>
            <div class="score_aff"> 0</div>
        </div>
    </div>


    <?php $i = 0;
    foreach ($data as $fiche) { ?>

        <section id="container_questions<?= $i; ?>" class="d-none">

            <div class="que_text">
                <span> <?= $fiche->question; ?> ? </span>
            </div>
            <div class="option_list">
                <?php foreach ($fiche->answers as $answer) { ?>
                    <div class="option answer">
                        <span class=""><?= $answer['answer'] ?></span>

                    </div>
                    <?php
                } ?>
            </div>
        </section>

        <?php
        $i++;
    } ?>



</div>

























