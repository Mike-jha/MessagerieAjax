<h1>Messagerie</h1>
<div class="row">
    <div class="col-6">
        <form method="POST" action="">
            <div class="card">
                <div class="card-header">
                    <span class="lead">Se connecter</span>
                </div>

                <div class="card-body">
                    <div class="form-error badge badge-danger"><?= $errorLogin ?></div>
                    <div class="form-group">
                        <label class="form-label">
                            Nom d'utilisateur
                        </label>
                        <input type="text" name="username" class="form-control"/>
                    </div>

                    <div class="form-group">
                        <label class="form-label">
                            Mot de passe
                        </label>
                        <input type="password" name="password" class="form-control"/>
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary" name="login">Se connecter</button>
                </div>
            </div>
        </form>
    </div>

    <div class="col-6">
    <form method="POST" action=""  enctype="multipart/form-data" class="register-form">
            <div class="card">
                <div class="card-header">
                    <span class="lead">Créer un compte</span>
                </div>

                <div class="card-body">
                <div class="form-error badge badge-danger"><?= $errorRegistration ?></div>
                    <div class="form-group">
                        <label class="form-label">
                            Nom d'utilisateur
                        </label>
                        <input type="text" name="username" class="form-control"/>
                    </div>

                    <div class="form-group">
                        <label class="form-label">
                            Adresse email
                        </label>
                        <input type="email" name="email" class="form-control"/>
                    </div>

                    <div class="form-group">
                        <label class="form-label">
                            Mot de passe
                        </label>
                        <input type="password" name="password" class="form-control"/>
                    </div>

                    <div class="form-group">
                        <label class="form-label">
                            Avatar
                        </label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="avatar" name="avatar" lang="fr">
                            <label class="custom-file-label" for="avatar">Importer une image</label>
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary" name="register">S'enregistrer</button>
                </div>
            </div>
        </form>
    </div>
</div>