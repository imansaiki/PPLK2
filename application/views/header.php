<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PPLK</title>

    <script src="<?php echo base_url();?>assets/js/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/materialize.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/tema.css">
    <script src="<?php echo base_url();?>assets/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  </head>
  <body class="indigo lighten-5">
    <header>
      <nav class="serious-error">
          <div class="container nav-wrapper ">
            <a href="#!" class="brand-logo">PPLK</a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          </div>
        </nav>

        <ul class="sidenav" id="mobile-demo">

          <li><a href="profil.php"><i class="material-icons">account_circle</i>Profil</a></li>
          <li><a href="keluar.php">Keluar</a></li>

        </ul>
    </header>
<script type="text/javascript">
$(document).ready(function(){
  $('.sidenav').sidenav();
  $('.dropdown-trigger').dropdown({
    constrainWidth: false,
    coverTrigger: false,
  });
  //SCRIPT UNTUK MENGHILANGKAN PANEL NOTIFIKASI
$(document).on('click','#alert_close',function(){
  $( "#alert_panel" ).fadeOut( "slow", function() {
  });
});
});
</script>
