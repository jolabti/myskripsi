<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>LOGIN</title>
  <link rel="stylesheet" href="<?php echo base_url();?>css/bdmcss/bootstrap.css" media="screen">
  <link rel="stylesheet" href="<?php echo base_url();?>css/bdmcss/mdb.css" media="screen">
</head>

<body>


  <!--Navbar-->
  <nav class="navbar navbar-light info-color navbar-toggleable-md ">

    <!-- Collapse button-->
    <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#collapseEx2">
      <i class="fa fa-bars"></i>
    </button>

    <div class="container  ">

      <!--Collapse content-->

      <a class="navbar-brand text-lighten-5 text-fluid" href="#">SISTEM PENUNJANG KEPUTUSAN - CALAS LABORATORIUM TEKNIK INFORMATIKA</a>
      <!--Links-->

      <!--Search form-->


      <!--/.Collapse content-->

    </div>

  </nav>

  <div class="container card-danger ">

    <!--Card-->
    <div class="card">

      <!--Card image-->
      <img class="img-circle" src="<?php echo base_url();?>media/ugfuture.jpg" alt="Card image cap" width="100%" height="350px">
      <!--/.Card image-->

      <!--Card content-->
      <div class="card-block">
        <!--Title-->
        <h4 class="card-title">SISTEM LOGIN</h4>
        <!--Text-->

        <div class="md-form">
          <form class="form-control-sm " action="index.html" method="post">
            <input placeholder="Username" type="text" id="form5" class="form-control">
            <input placeholder="Password" type="password" id="form5" class="form-control">
          <input type="submit" name="name" value="LOGIN" class="form-control btn btn-sm btn-info-outline">
          </form>



        </div>



        <div class="card">

          <div class="card-block">
            <h4 class="card-title">Keterangan</h4>
            <p class="card-text">Jika terdapat kesalahan program- Klik button di bawah.</p>
            <a href="#" class="btn btn-danger">Report Bug</a>
          </div>
        </div>
      </div>
      <!--/.Card content-->

    </div>
    <!--/.Card-->

  </div>




</body>
























<script type="text/javascript" src="<?php echo base_url();?>css/bdmjs/jquery-2.2.3.js">
</script>
<script type="text/javascript" src="<?php echo base_url();?>css/bdmjs/js/mdb.js">
</script>
<script type="text/javascript" src="<?php echo base_url();?>css/bdmjs/js/bootstrap.js">
</script>
<script type="text/javascript" src="<?php echo base_url();?>css/bdmjs/js/tether.js">
</script>

</html>
