<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>{pageTitle}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed:wght@100;300;500&family=Roboto+Condensed&display=swap"
          rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="/Css/style.css">


</head>
<body class="text-bg-light">
<!-- Affichage du Header -->
<?php

use WINSTON\Utils\Php\Outils;

require_once(__DIR__ . '/../../Views/Partials/header.tmpl.php');
$uriSegments = Outils::getUriSegments();
?>

<div >
{pageContent}
</div>

<!-- Affichage du Footer -->
<?php
require_once(__DIR__ . '/../../Views/Partials/footer.tmpl.php');
?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
<script type="module" src="/Js/script_quizz.js"></script>
<script type="module" src="/Js/script_darkMode.js"></script>


</body>
</html>
