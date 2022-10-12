<div class="box">
    <div class="quizz_box">
        <div id="headerA" class="header_fiche">
            <div class="title">
                <span>1 / 6</span>
            </div>
            <div class="score">
                <div class="score_text">Score</div>
                <div class="score_aff"> 0 %</div>
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
                                <button class="btn  btn-s btn-block answer" type="button" name="answer"
                                        id="<?= $answer['id'] ?>"
                                        data-question="<?= $answer['question_id'] ?>"><?= $answer['answer'] ?></button>
                            </div>
                            <?php
                        } ?>
                    </div>
                </section>
            </form>
            <?php
            $i++;
        } ?>

        <!-- Resultat Affichage -->

    </div>
</div>
<div class="box">
<div id="result" class="d-none">
    <div class="result_box">

            <div class="icon">
                <a href="/"><?php
                    $svg = file_get_contents('/Library/simplon/sites/sandwich_quizz/public/Images/SVG/food_sandwich_layers.svg');
                    echo $svg;
                    ?></a>
            </div>

            <div class="score_text">
                    <span class="affFinal"></span>
                    <div class="buttons">
                        <a href="/">
                            <button class="restart">Recommencer</button>
                        </a>
                    </div>



            </div>



    </div>

</div>
</div>
