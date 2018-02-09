<!DOCTYPE html>
<html>
<?php include 'head.php';   ?>
<body>
  <!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
  <?php include 'header.php';   ?>

  <div class="container-fluid no-padding">
    <div class="row">
        <video width="100%" height="240px" style="margin-bottom: 15px;"controls>
           <source src="img/media/catania.mp4" type="video/mp4">
          Your browser does not support the video tag.
        </video>
      </div> <!-- chiudo row-->
    </div> <!-- chiudo container-fluid no-padding -->
  <div class="container-fluid">
      <div class="row">
        <h1 class="titolo">Ciao ‘mbare!</h1>
        <h4 class="titolino">…e benvenuto a Catania!
          Mi chiamo <strong>Turiddu</strong> e ti porterò in giro per Catania.
          <br /> <br />Sono molto felice di mostrarti la mia amata città e
           darti una visione speciale di quei luoghi culturali e non che rendono
           la mia città magica e che te la faranno apprezzare nella sua essenza.
           <br /><br />
          Non vedo l’ora di farti conoscere e amare Catania.
        <strong>Se sei pronto? 3 ,2 ,1, GO!</strong></h4>
        <button type="button" class="button1">Amunì</button>
        <button type="button" class="button2">Esplora vicino a me</button>

    </div> <!-- chiudo row-->
</div> <!-- chiudo container-fluid -->
  <!--jquery -->
  <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <!-- collegamento Js -->
  <script type="text/javascript" src="js/main.js"></script>
</body>

</html>
