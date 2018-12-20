<?php
include("../check.php");
include('../devoirdetail.php')
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
    <link rel="stylesheet" type="text/css"
          href="/plugins/datatables/extensions/Responsive/css/dataTables.responsive.css">
    <!-- Theme style -->

    <link rel="stylesheet" href="/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="/dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="/css/fencom.css">
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
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#navbar-collapse">
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
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Consulation<span
                                    class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="/recap/tous">Tous les devoir</a></li>
                                <li class="divider"></li>

                                <li><a href="/recap">Par eleve</a></li>

                            </ul>
                        </li>
                    </ul>
                    <form class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" id="navbar-search-input"
                                   placeholder="Rechercher (WIP)" disabled>
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
            <h1 class="display-1">Tableau de bord</h1>

        </section>

        <!-- Main content -->
        <section class="content">
          <?php if(isset($_GET[created]))
          {
            echo '
            <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4><i class="icon fa fa-check"></i> Success!</h4>
                  Votre devoir a ete enregistré avec sucess.
                </div>
            ';
          }
          ?>

            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Votre Devoir</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="box box-solid box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Détail du Devoir</h3>
                    </div><!-- /.box-header -->

                    <div class="box-body">
                      <dl>
                <dt>Nom Du Devoir</dt>
                <dd><?php echo $titledevoir ?></dd>
                <dt>Classe</dt>
                <dd><?php echo $classe ?></dd>
                <dt>Matiere</dt>
                <dd><?php echo $matiere ?></dd>
                <dt>Commentaire</dt>
                <dd><?php echo $comment ?></dd>

              </dl>
                    </div>
                  </div>
                    <table id="tabledevoir"
                           class="table table-bordered table-striped dataTable text-center responsive text-center"
                           role="grid"
                           style="width: 95%; margin: auto">
                        <thead>
                        <tr role="row">
                            <th>Eleve</th>
                            <th >Classe</th>
                            <th>Langue française à l'oral et à l'écrit</th>
                            <th>Langues mathématiques, scientifiques et informatiques</th>
                            <th>Langues étrangères et régionales.</th>
                            <th >Langues des arts et du corps.</th>
                            <th>Méthodes et outils pour apprendre</th>
                            <th>Formation de la personne et du citoyen</th>
                            <th >Les systèmes naturels et les systèmes techniques</th>
                            <th>Formation de la personne et du citoyen</th>
                        </tr>
                        </thead>
                        <tbody style="vertical-align: middle;"">
                        </tbody>
                    </table>
                </div><!-- /.box-body -->
                <div class="box-footer">
                </div><!-- box-footer -->
            </div>


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
<script type="text/javascript" charset="utf8"
        src="/plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js"></script>

<script>
    $('#tabledevoir').DataTable({
        "ajax": {
            "url": "devoir.php?d=<?php echo $_GET['d']; ?>"
        },
        "paging": false,
        "ordering": false,
        "info": false,
        "searching": false,
        "responsive": true,
        "columnDefs": [{
            "targets": [0],
            "width": "15%"
        },
        {
            "targets": [1],
            "width": "2%"
        },
        {
            "targets": [2],
            "width": "11%"
        },
        {
            "targets": [3],
            "width": "11%"
        },
        {
            "targets": [4],
            "width": "11%"
        },
        {
            "targets": [5],
            "width": "11%"
        },
        {
            "targets": [6],
            "width": "11%"
        },
        {
            "targets": [7],
            "width": "11%"
        },
        {
            "targets": [8],
            "width": "11%"
        },
        {
            "targets": [9],
            "width": "11%"
        }
      ],
    });
</script>
</body>
</html>
