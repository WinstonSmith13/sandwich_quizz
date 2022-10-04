<?php


foreach ($data as $fiche){?>

    <ul class="list-group">
  <li class="list-group-item disabled"><?= $fiche->question;?> ?</li>
        <ol type="a" >
    <?php foreach ($fiche->answers as $answer){ ?>

        <li ><?= $answer['answer'] ?> </li>

            <?php } ?>
        </ol>

</ul>

<?php
}?>
