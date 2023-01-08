<?php $i = 0;
?>




    <div class="container d-flex justify-content-center">

        <ul class="list-group mt-5 text-white">
            <li class="list-group-item d-flex justify-content-between align-content-center">
                <div class="d-flex flex-column">

                    <div class="text-center">
                        <h6 class="m-3 text-warning fw-bold fs-1">Top Score</h6>
                        <?php
                        foreach ($data as $scoreBest) { ?>
<div class="d-flex justify-content-between text-dark">
                        <div class="fw-bold  fs-5"">
                            <?= $scoreBest['pseudo'] ?>
                            </div>
    <div class="fs-5">
                            <?=
                            sprintf("%d%%", ($scoreBest['scoreFinal']/6) * 100)
                            ?>

                        </div>
</div>
                            <hr class="text-dark">
                            <?php
                        } ?>
                    </div>
                </div>

            </li>

        </ul>
    </div>

<section id="container_questions<?= $i; ?>" class="d-none">
</section>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>

