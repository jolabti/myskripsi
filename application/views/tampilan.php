<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SISTEM PENUNJANG KEPUTUSAN - METODE WP</title>
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
      <a class="navbar-brand" href="#"><i class="fa fa-rocket fa-4"></i> SPK-TI</a>
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
          <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-cloud-download fa-stack-1x "></i></span>DATA CALAS</a>
        </li>
        <li>
          <a href="#"> <span class="fa-stack fa-lg pull-left"><i class="fa fa-cart-plus fa-stack-1x "></i></span>KRITERIA</a>
        </li>
        <li>
          <a href="<?php echo base_url();?>index.php/nilaicalonasistencontroller/"><span class="fa-stack fa-lg pull-left"><i class="fa fa-youtube-play fa-stack-1x "></i></span>TABEL NILAI CALAS</a>
        </li>
        <li>
          <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-wrench fa-stack-1x "></i></span>TABEL NORMALISASI</a>
        </li>
        <li>
          <a href="<?php echo base_url();?>index.php/HimpunanController"><span class="fa-stack fa-lg pull-left"><i class="fa fa-server fa-stack-1x "></i></span>TABEL HIMPUNAN</a>
        </li>
        <li>
          <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-server fa-stack-1x "></i></span>INFO</a>
        </li>

        <li class="fa-stack fa-lg pull-left">

          <button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModal">Tambah Data Calas</button>

        </li>
      </ul>
      <!-- Modal -->

    </div>
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">SPK-TI</h4>
          </div>
          <div class="modal-body">

            <div class="container">
              <h2>INPUT NILAI UJIAN CALAS</h2>
              <form role="form" method="post" action="<?php echo site_url("nilaicalonasistencontroller/tambahNilaiCalonAsisten");?>">

                <div class="form-group">
                  <label for="pwd">NPM</label>
                  <input type="text" class="form-control" id="pwd" name="npm">
                </div>
                <div class="form-group">
                  <label for="pwd">nilai_asli_c1</label>
                  <input type="text" class="form-control" id="pwd"  name="c1">
                </div>
                <div class="form-group">
                  <label for="pwd">nilai_asli_c2</label>
                  <input type="text" class="form-control" id="pwd" name="c2">
                </div>
                <div class="form-group">
                  <label for="pwd">nilai_asli_c3</label>
                  <input type="text" class="form-control" id="pwd" name="c3">
                </div>
                <div class="form-group">
                  <label for="pwd">nilai_asli_c4</label>
                  <input type="text" class="form-control" id="pwd" name="c4">
                </div>
                <div class="form-group">
                  <label for="pwd">nilai_asli_c5</label>
                  <input type="text" class="form-control" id="pwd" name="c5">
                </div>
                <div class="form-group">
                  <label for="pwd">PRESTASI</label>
                  <!-- <input type="text" class="form-control" id="pwd" name="c6"> -->

                  <select class="form-control" name="c6">

                    <option>LOKAL</option>
                    <option>NASIONAL</option>
                    <option>INTERNASIONAL</option>
                    <option>NONE</option>

                  </select>


                </div>

                <button type="submit" class="btn btn-default">Submit</button>
              </form>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
    </div>
    <!-- /#sidebar-wrapper -->
    <!-- Page Content -->
    <div id="page-content-wrapper">
      <div class="container-fluid ">

        <div class="row">
          <div class="col-xl-12">
            <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>ID HIMPUNAN</th>
                  <th>BATAS BAWAH</th>
                  <th>BATAS ATAS</th>
                  <th>BOBOT</th>
                  <!-- <th>Start date</th>
                  <th>Salary</th> -->
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>ID HIMPUNAN</th>
                  <th>BATAS BAWAH</th>
                  <th>BATAS ATAS</th>
                  <th>BOBOT</th>
                </tr>
              </tfoot>
              <tbody>

                <?php foreach ($himpunan as $himp) {  ?>

                  <tr>
                    <td>
                      <?php echo $himp->id_himpunan; ?>
                    </td>
                    <td>
                      <?php echo $himp->batas_atas; ?>
                    </td>
                    <td>
                      <?php echo $himp->batas_bawah; ?>
                    </td>
                    <td>
                      <?php echo $himp->nilai; ?>
                    </td>

                  </tr>
                  <?php } ?>
              </tbody>
            </table>

          </div>
        </div>

        <!-- <div class="row">
          <div class="col-xl-12">
            <table class="table table-hover">
              <thead class="danger">
                <tr>
                  <th>#</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Username</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td colspan="2">Larry the Bird</td>
                  <td>@twitter</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div> -->
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
