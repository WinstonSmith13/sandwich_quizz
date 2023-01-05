<!doctype html>
<html lang="fr">
<head>
    <title>Accueil - SandwichQuizz</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="/Css/style.css">
</head>
<body>
<?php $i = 0;
?>
<h6 class="mb-0">Top Score</h6>
<?php print_r($data);
foreach ($data as $scoreBest) { ?>


    <div class="container d-flex justify-content-center">

        <ul class="list-group mt-5 text-white">
            <li class="list-group-item d-flex justify-content-between align-content-center">
                <div class="d-flex flex-row">
                    <div class="ml-2">

                        <div class="about">
                            <?=
                            $scoreBest['scoreFinal']
                            ?>
                        </div>
                    </div>
                </div>

            </li>

        </ul>
    </div>
    <?php
} ?>
<section id="container_questions<?= $i; ?>" class="d-none">
</section>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
</body>
</html>
