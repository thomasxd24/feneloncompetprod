<?php
include("../../check.php");
include("../../eleve/elevedetail.php");
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
    <link rel="stylesheet" href="/css/fencom.css">
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

                <div class="box-body">

                    <div class="row">
                        <div class="col-md-3">

                            <!-- Profile Image -->
                            <div class="box box-primary">
                                <div class="box-body box-profile">
                                    <img class="profile-user-img img-responsive img-circle" src="../../dist/img/user2-160x160.jpg" alt="User profile picture">

                                    <h3 class="profile-username text-center">
                                        <?php
                                        echo $elevename;
                                        ?>

                                    </h3>


                                    <p class="text-muted text-center"><?php echo $classe ?></p>

                                    <ul class="list-group list-group-unbordered">
                                        <li class="list-group-item">
                                            <b>Devoir réalisé</b> <a class="pull-right"><?php echo $devoirdone ?></a>
                                        </li>

                                    </ul>

                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->

                            <!-- About Me Box -->

                        </div>
                        <!-- /.col -->
                        <div class="col-md-9">

                            <div class="nav-tabs-custom">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#activity" data-toggle="tab">Activity</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="active tab-pane" id="activity">
                                      <div style="clear: both; margin: 0 auto;">
                                        <p style="float: left; width: 32&#37;; text-align: left;" ><button type="button" onclick="location.href='<?php $previouseleve = intval($_GET['eleveid'])-1 ; echo "/recap/eleve/?eleveid=".$previouseleve ?>';" class="btn btn-primary btn-arrow-left" style="text-align:left">Eleve Précedant</button></p>
                                      <p style="float: left; width: 32%; text-align: center;">
                                      <?php
                                      echo "
                                      <select class=\"form-control\" id=\"elevechoose\"  name=\"adsdlassid\">
                                      <option selected value=\"\" disabled>Selectionner un eleve</option>
                                      ";
                                      include($_SERVER['DOCUMENT_ROOT']."/eleve/simpleelevelist.php");
                                      echo "
                                      </select>";

                                      ?>
                                      </p>
                                      <p style="float: left; width: 32%; text-align: right;"><button type="button" class="btn btn-primary btn-arrow-right" onclick="location.href='<?php $nexteleve = intval($_GET['eleveid'])+1 ; echo "/recap/eleve/?eleveid=".$nexteleve ?>';" style="float:right">Eleve Prochain</button></p>


                                      </div>
                                        <!-- Post -->
                                        <table id="recapeleve"
                                               class="table table-bordered table-striped table-responsive hover dataTable text-center"
                                               role="grid" style="width:60%; margin: 0 auto;">
                                            <thead>
                                            <tr role="row">
                                                <th>Competence</th>
                                                <th class="circle-1" style="width:5%"></th>
                                                <th class="circle-2" style="width:5%"></th>
                                                <th class="circle-3" style="width:5%"></th>
                                                <th class="circle-4" style="width:5%"></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                        <!-- /.post -->
                                        <canvas id="graphe" class="chartjs" width="770" height="385" style="display: block; width: 770px; height: 385px;"></canvas>
                                    </div>
                                    <!-- /.tab-pane -->

                    </div>
                </div><!-- /.box-body -->



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
<script type="text/javascript" charset="utf8" src="https://cdn.jsdelivr.net/npm/chart.js@2.7.1/dist/Chart.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.jsdelivr.net/npm/chart.js@2.7.1/dist/Chart.min.js"></script>

<script>
$('#elevechoose').on('change', function() {

  window.location.replace("/recap/eleve/?eleveid="+this.value);
})
</script>
<script type="text/javascript" charset="utf8" src="/plugins/datatables/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" charset="utf8"
        src="/plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
        <script>
        $.ajax({
  url: "/getelevestat.php?eleveid=<?php echo $_GET['eleveid']; ?>&radar=true",
  cache: false
})
  .done(function( html ) {
    var ctx = $("#graphe");
    var myRadarChart = new Chart(ctx, {
type: 'radar',
data: {
    labels: ["Langue Francaise a l'oral et a l'ercit","Langue mathematique, scientifique et informatiques","Langue etrangeres et regionales","Langue du arts et du corps","Methode et outils pour apprendre","Formation de la personne et du citoyen","Systemes naturels et systemes techniques","Representation du monde et l'actvite humaine"],
    datasets: [{
        data: JSON.parse(html) ,
    }]
},
options: {
scale: {
        ticks: {
            beginAtZero : true,
            max: 4,
            min: 0
        }
    }
  }
});
  });

        </script>


<script>
    $('#recapeleve').DataTable({
        "ajax": {
            "url": "../../getelevestat.php?eleveid=<?php echo $_GET['eleveid']; ?>"
        },
        "paging": false,
        "ordering": false,
        "info": false,
        "searching": false,
        "responsive": true,
    });


</script>
</body>

</html>
