<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include($_SERVER['DOCUMENT_ROOT']."/connection.php");
include("../check.php");


function resultToArray($result) {
    $rows = array();
    while($row = $result->fetch_assoc()) {
        $rows[] = $row;
    }
    return $rows;
}
if (isset($_POST['name'])) {
    $sql="select profid from user order by profid desc limit 1";
    $result = mysqli_query($db,$sql);
    $profidar=mysqli_fetch_array($result);
    $profid=intval($profidar)+1;
    echo $profid;
    // $sql="INSERT INTO user (username, md5password, name, userType, profid,isAdmin,firstLogin) VALUES (, , ,2,(select ),2)";
    // $result = mysqli_query($db,$_GET['query']);
    // if(!$result)
    // {
        // echo mysqli_error($db);
    // }
    // else{
    //     $hi= resultToArray($result);
    //     var_dump($hi);
    //     $success="C'est tout bon!!";
    // }
   
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>FenelonCOM | Ajouter Devoir</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" type="text/css" href="/plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/plugins/datatables/extensions/Responsive/css/dataTables.responsive.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="/dist/css/skins/_all-skins.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

    <header class="main-header">
        <nav class="navbar navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <a href="/" class="navbar-brand"><b>Fenelon</b>COM</a>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="/">Tableau de bord</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Saisir<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="/saisir/devoir">Devoir</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Consulation<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="/recap/tous">Tous les devoir</a></li>
                                <li class="divider"></li>
                                <li><a href="/recap">Par eleve</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" id="navbar-search-input" placeholder="Rechercher (WIP)" disabled>
                        </div>
                    </form>
                </div>
                <!-- /.navbar-collapse -->
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="#"><?php echo $user_check ?></a>
                        </li>
                        <li>
                            <a href="/logout.php"><i class="fa fa-sign-out"></i></a>
                        </li>

                    </ul>
                </div>
                <!-- /.navbar-custom-menu -->
            </div>
            <!-- /.container-fluid -->
        </nav>
    </header>
    <!-- Full Width Column -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1 class="display-1"></h1>
        </section>

        <!-- Main content -->
        <section class="content">
        <form method="POST" action="addprof.php">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Ajouter un Utilisateur</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
               
                <dl class="dl-horizontal center-block" style="width:70%">
                    <br>
                    <dt>Nom</dt>
                    <dd><input type="" class="form-control" id="" placeholder="" name="nom"></dd>
                    <br>
                    <dt>Prenom</dt>
                    <dd><input type="" class="form-control" id="" placeholder="" name="prenom"></dd>
                    <br>
                    <dt>Identifiant</dt>
                    <dd><input type="" class="form-control" id="" placeholder="" name="username"></dd>
                    <br>
                    <dt>Mot de passe</dt>
                    <dd><input type="password" class="form-control" id="" placeholder="" name="password"></dd>
                    <br>
                </dl>
                
                

                </div><!-- /.box-body -->
                <div class="box-footer">
                <input type="submit" Name = "submit" value="Valider">
                                    </div>
            </div>
            </form>


        </section>
        <!-- /.content --></div>

    <footer class="main-footer">
        <div class="container">
            <div class="pull-right hidden-xs">
                <b>Version</b> <?php echo $version ?>
            </div>
            <strong>Copyright &copy; 2016 <a href="http://fenelon63.fr">Fenelon</a>.</strong> Tout droits réserves
        </div>
        <!-- /.container -->
    </footer>
    <!-- /.container -->
    <!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="../../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/app.min.js"></script>
<!-- table js -->
<script type="text/javascript" charset="utf8" src="/plugins/datatables/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" charset="utf8" src="/plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
<script>
$('#classchoose').on('change', function() {
  window.location.replace("/recap/?classid="+this.value);
});
$('#elevechoose').on('change', function() {

  window.location.replace("/recap/eleve/?eleveid="+this.value);
})
</script>
</body>
</html>





