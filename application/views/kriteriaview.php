<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>KRITERIA - SPKTI</title>
  <link href="<?php echo base_url();?>css/bootstrap.css" rel="stylesheet">
  <link href="<?php echo base_url();?>css/simple-sidebar.css" rel="stylesheet">
  <!-- <link href="font-awesome-4.3.0/css/font-awesome.min.css" rel="stylesheet">
 -->
</head>

<body>
  <nav class="navbar navbar-default no-margin">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header fixed-brand">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" id="menu-toggle">
        <span class="glyphicon glyphicon-th-large" aria-hidden="true"></span>
      </button>
      <a class="navbar-brand" href="#"><i class="fa fa-rocket fa-4"></i> SPK-TI KRITERIA</a>
    </div>
    <!-- navbar-header-->

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active">
          <button class="navbar-toggle collapse in" data-toggle="collapse" id="menu-toggle-2">
            <span class="glyphicon glyphicon-th-large" aria-hidden="true"></span></button>
        </li>
      </ul>
    </div>
    <!-- bs-example-navbar-collapse-1 -->
  </nav>
  <div id="wrapper">
    <!-- Sidebar -->
    <div id="sidebar-wrapper">
      <ul class="sidebar-nav  nav-stacked" id="menu">



        <li>
          <a href="<?php echo base_url();?>index.php/Calonsiswacontroller/"><span class="fa-stack fa-lg pull-left"><i class="fa fa-cloud-download fa-stack-1x "></i></span>DATA CALAS</a>
        </li>
        <li>
          <a href="<?php echo base_url();?>index.php/kriteriacontroller"> <span class="fa-stack fa-lg pull-left"><i class="fa fa-cart-plus fa-stack-1x "></i></span>KRITERIA</a>
        </li>
        <li>
          <a href="<?php echo base_url();?>index.php/nilaicalonasistencontroller/"><span class="fa-stack fa-lg pull-left"><i class="fa fa-youtube-play fa-stack-1x "></i></span>TABEL NILAI CALAS</a>
        </li>
        <li>
        <a href="<?php echo base_url();?>index.php/normalisasicontroller"><span class="fa-stack fa-lg pull-left"><i class="fa fa-wrench fa-stack-1x "></i></span>TABEL HASIL</a>
        </li>
        <li>
          <a href="<?php echo base_url();?>index.php/HimpunanController"><span class="fa-stack fa-lg pull-left"><i class="fa fa-server fa-stack-1x "></i></span>TABEL HIMPUNAN</a>
        </li>
        <li>
            <a href="<?php echo base_url(); ?>index.php/indekscontroller/infoapps"><span class="fa-stack fa-lg pull-left"><i class="fa fa-server fa-stack-1x "></i></span>INFO</a>
        </li>

        <li class="fa-stack fa-lg pull-left">

          <button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModal">Tambah Data Calas</button>

        </li>
      </ul>
      <!-- Modal -->

    </div>

    <!-- /#sidebar-wrapper -->
    <!-- Page Content -->
    <div id="page-content-wrapper">
      <div class="container-fluid ">
  <a class="btn btn-danger" href="<?php echo base_url(); ?>index.php/indekscontroller/logout">LOGOUT</a>
        <div class="row">
          <div class="col-sm-8">
            <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
              <thead>


                <tr>

                  <th>ID KRITERIA</th>
                  <th>NAMA KRITERIA</th>
                  <th>BOBOT</th>




                   <!-- <th>Start date</th>
                  <th>Salary</th> -->
                </tr>
              </thead>
              <tfoot>

                <tr>

                  <th>ID KRITERIA</th>
                  <th>KRITERIA</th>
                  <th>BOBOT</th>



                </tr>
              </tfoot>
              <tbody>

                  <?php foreach ($kriteria as $krit ) {

                    ?>

                  <tr>

                       <td>
                         <?php echo $krit->id_kriteria; ?>
                       </td>

                       <td>
                         <?php echo strtoupper($krit->kriteria); ?>
                       </td>

                       <td>
                         <?php echo $krit->bobot; ?>
                       </td>


                  </tr>
                  <?php } ?>

              </tbody>


            </table>

          </div>
        </div>


      </div>
    </div>
    <!-- /#page-content-wrapper -->
  </div>
  <!-- /#wrapper -->
  <!-- jQuery -->
  <script src="<?php echo base_url();?>js/jquery-1.12.3.js"></script>
  <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>

  <script src="<?php echo base_url();?>js/simple-sidebar.js"></script>
  <script src="<?php echo base_url();?>js/jquery.dataTables.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function() {
      $('#example').DataTable();
    });
  </script>
</body>

</html>
