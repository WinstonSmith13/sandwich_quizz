<div class="box">
<div class="quizz_box">
    <div class="header_fiche">
        <div class="title">
            <span>1 / 6</span>
        </div>
        <div class="score">
            <div class="score_text">Score %</div>
            <div class="score_aff"> 0</div>
        </div>
    </div>


    <?php $i = 0;
    foreach ($data as $fiche) { ?>
        <form>
        <section id="container_questions<?= $i; ?>" class="d-none">

            <div class="que_text">
                <span> <?= $fiche->question; ?> ? </span>
            </div>
            <div class="option_list">
                <?php foreach ($fiche->answers as $answer) { ?>
                    <div class="option">
                        <button class="btn  btn-s btn-block answer" type="button" name="answer" id="<?= $answer['id']?>" data-question="<?= $answer['question_id']?>" ><?= $answer['answer'] ?></button>
                    </div>
                    <?php
                } ?>
            </div>
        </section>
        </form>
        <?php
        $i++;
    } ?>



</div>
</div>

























