<?php
include('../../login.php'); // Include Login Script
echo $_SESSION['firstLogin'];
// if ((isset($_SESSION['username']) != '') || ($_SESSION['firstLogin'] == "2")) {
//     header('Location: /');
// }
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
      style="background-image: url('../../background.jpg');background-repeat: no-repeat;background-attachment: fixed;background-position: center;">
<div class="login-box">
    <div class="login-logo">
        <a style="color: white;" ><b>Fenelon</b>Competence</a>
    </div>


    <div class="login-box-body">
        <p class="login-box-msg">Ceci est votre premiere connexion, vous pouvez changer votre mot de passe ou pas</p>


            <div class="row">
                <div class="col-xs-12">
                    <button type="button" class="btn btn-primary btn-block btn-flat" onclick="window.location.href='/connexion/firstConnexion/modifieMdp'">Changer mon mot de passe</button>
                </div>
                <br>
                <br>
                <!-- /.col -->
                <div class="col-xs-12">
                    <button type="button" class="btn btn-primary btn-block btn-flat" onclick="window.location.href='firstLogin.php'"> Ne pas changer mon mot de passe</button>
                </div>
                <!-- /.col -->
            </div>
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
