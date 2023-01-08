
<?php $i = 0;

?>
<div id="loginContainer" class="text-bg-light">


        <div class="col-6 mt-3 mb-3 mx-auto">
            <h1 class="">Veuillez vous connecter pour jouer</h1>
        </div>

    <?php if($data=='true'){?>

        <div id="alert-success" class="alert alert-success" role="alert">
           Vous êtes bien inscrit maintenant connectez-vous.

        </div>
    <?php }
    ?>
    <?php if($data=='false'){ $data = ''?>

        <div id="alert-danger" class="alert alert-danger" role="alert">
            Vous êtes déjà inscrit, connectez-vous.

        </div>
    <?php }
    ?>

    <div class="row ">
        <div class="col-6 mt-3 mb-3 mx-auto ">
            <div id="loginCard" class="card text-bg-light">
                <div class="card-body ">

                    <form action="/" method="POST" id="loginform" autocomplete="off">
                        <div class="form-group has-validation mb-3">
                            <label for="pseudo" class="form-label">Pseudo :</label>
                            <input type="text" class="form-control" name="pseudo" id="pseudo" required autofocus>
                            <div class="invalid-feedback">Veuillez saisir un pseudo !</div>
                            <input type="hidden" name="login" value="1">
                        </div>
                        <div class="form-group has-validation mb-3">
                            <label for="password" class="form-label">Mot de passe :</label>
                            <input type="password" class="form-control" name="password" id="password" required>
                            <div class="invalid-feedback">Veuillez saisir votre mot de passe !</div>

                        </div>
                        <div class="form-group">
                            <button id="login-btn" type="submit" class="btn btn-outline-primary float-end">Se connecter</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    Vous n'avez pas de compte : <a href="/?register">S'enregistrer</a>
                </div>

            </div>
        </div>
    </div>

</div>

<section id="container_questions<?= $i; ?>" class="d-none">

</section>





