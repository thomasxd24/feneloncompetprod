<?php
session_start(); // Include Login Script
if ((isset($_SESSION['username']) != '')) {
    header('Location: /');
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Identification | FenelonCOM</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="/plugins/iCheck/square/blue.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition login-page"
      style="background-image: url('../background.jpg');background-repeat: no-repeat;background-attachment: fixed;background-position: center;">
<div class="login-box">
    <div class="login-logo">
        <a style="color: white;" ><b>Fenelon</b>Competence</a>
    </div>
    <!-- <div class="alert alert-danger fade in alert-dismissible">
        <a href="#\" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Message Important</strong>
        <br>
        Les serveurs rencontrent actuellement un souci de connexion. La base de donnée est actuellement hors ligne. Nous sommes désolés pour la gêne occasionnée. Merci pour votre patience.
        </div> -->
    <div class="alert alert-warning fade in alert-dismissible">
        <a href="#\" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        Votre Identifiant corresponde au Identifiant sur Scolinfo (Votre nom en majuscule)
        <br><br>
        Si Ceci est votre premiere connexion, votre mot de passe s'agit de mot de passe sur Scolinfo. Vous pouvez ensuite changez votre mot de passe dés votre connexion.
        </div>
    <?php
    if (isset($_GET['error']))
    {
        echo '<div class="alert alert-danger fade in alert-dismissible">';
            echo "<a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>";
            echo "<strong>Identifiant ou mot de passe incorrect</strong>";
        echo "</div>    <!-- /.login-logo -->";
    }


        ?>
    <div class="login-box-body">
        <p class="login-box-msg">Identifiez-vous</p>

        <form action="../login.php" method="post">
            <div class="form-group has-feedback has-feedback-left">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                <input type="text" name="username" placeholder="Identifiant" id="username" autocorrect="off"
                       autocapitalize="none" class="form-control" required/>

            </div>
            <div class="form-group has-feedback has-feedback-left">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                <input type="password" name="password" placeholder="Mot de passe" id="password" class="form-control"
                       required/>

            </div>
            <div class="row">
                <div class="col-xs-7">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox"> Rester connecté
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-xs-5">
                    <button type="submit" class="btn btn-primary btn-block btn-flat" name="submit">Me connecter</button>
                </div>
                <!-- /.col -->
            </div>

        </form>
    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="/bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="/plugins/iCheck/icheck.min.js"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>
</body>
</html>
