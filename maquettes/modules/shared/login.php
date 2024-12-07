<?php include_once $_SERVER['DOCUMENT_ROOT'].'/config.php'; ?>
<!DOCTYPE html>
<html lang="fr">
<?php include_once  $config['views_path'] . 'head.php';?>
<body class="hold-transition login-page">
<div class="login-box">
        <div class="login-logo">
            <img src="/modules/shared/assets/images/logo.png" alt="" srcset="" width="90px">
            <h4>Gestion des Projet</h4>
        </div>
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Connectez-vous pour démarrer votre session</p>
                <form method="post" action="/modules/shared/login_handler.php" >
                    <div class="input-group mb-3">
                        <select name="role" class="form-control" id="role" autofocus>
                          <option value="formateur">Formateur</option>
                          <option value="apprenant">Apprenant</option>
                          <option value="responsable">Responsable de formation</option>
                        </select>
                        <div class="input-group-append">
                            <div class="input-group-text"><span class="fas fa-envelope"></span></div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" placeholder="Mot de passe" class="form-control" value="123456789">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-7">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">Se souvenir de moi</label>
                            </div>
                        </div>
                        <div class="col-5">
                            <button  type="submit" class="btn btn-info btn-block" name="login">connecter</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>