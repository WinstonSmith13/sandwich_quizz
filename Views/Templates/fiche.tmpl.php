<?php


foreach ($data as $fiche){?>
<div class="">
    <ul class="list-group">
  <li class="list-group-item disabled"><?= $fiche->question;?> ?</li>
        <ol type="a" >
    <?php foreach ($fiche->answers as $answer){ ?>

        <li ><?= $answer['answer'] ?> </li>

            <?php } ?>
        </ol>

</ul>
</div>

<?php
}?>
