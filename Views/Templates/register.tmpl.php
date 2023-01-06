<?php $i = 0;
?>
<div id="register" class="text-bg-light">


        <div class="col-6 mt-3 mb-3 mx-auto">
            <h1 class="">Veuillez vous enregistrer</h1>
        </div>

    <div class="row">
        <div class="col-6 mt-3 mb-3 mx-auto">
            <div class="card">
                <div class="card-body" id="registerZone">
                    <form action="/" method="POST" id="registerform">
                        <div class="form-group has-validation mb-3">
                            <label for="pseudo" class="form-label">Pseudo :</label>
                            <input type="text" class="form-control" name="pseudo" id="pseudo" required autofocus>
                            <div class="invalid-feedback">Veuillez saisir un pseudo !</div>
                            <input type="hidden" name="register" value="1">
                        </div>
                        <div class="form-group has-validation mb-3">
                            <label for="password" class="form-label">Mot de passe :</label>
                            <input type="password" class="form-control" name="password" id="password" required>
                            <div class="invalid-feedback">Veuillez saisir un mot de passe !</div>
                        </div>
                        <div class="form-group">
                            <button type="submit" id="register-btn" class="btn btn-outline-primary float-end">
                                S'enregistrer
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<section id="container_questions<?= $i; ?>" class="d-none">
</section>






