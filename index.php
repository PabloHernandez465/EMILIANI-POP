<?php $conexion = mysqli_connect("localhost","root","","prueba"); 
$query = "SELECT*FROM imagenes where id = 1";
$conectar = mysqli_query($conexion,$query);
while ($row = $conectar->fetch_assoc() ) {
  $fondo = $row['Img'];
}
$Querya = "SELECT*FROM imagenes where id = 2";
$conectarb = mysqli_query($conexion,$Querya);
while ($rowa = $conectarb->fetch_assoc() ) {
  $pop = $rowa['Img'];
}
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/icono_gob.jpg">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" id="link" href="css/loader-style.css">
    <link href="animate-load/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="animate-load/animate.css/animate.min.css" rel="stylesheet">
    <link href="animate-load/icofont/icofont.min.css" rel="stylesheet">
    <link href="animate-load/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="animate-load/venobox/venobox.css" rel="stylesheet">
    <link href="animate-load/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="animate-load/aos/aos.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/73f075235b.js" crossorigin="anonymous"></script>
    <script src="animate-load/jquery/jquery.min.js"></script>
    <script src="animate-load/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="animate-load/jquery.easing/jquery.easing.min.js"></script>
    <script src="animate-load/php-email-form/validate.js"></script>
    <script src="animate-load/venobox/venobox.min.js"></script>
    <script src="animate-load/waypoints/jquery.waypoints.min.js"></script>
    <script src="animate-load/counterup/counterup.min.js"></script>
    <script src="animate-load/owl.carousel/owl.carousel.min.js"></script>
    <script src="animate-load/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="animate-load/aos/aos.js"></script>
    <script src="js/loader-script.js"></script>
    <script src="js/main.js"></script>
    <script src="js/search-modal.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/shortcut.js"></script>
    <script src="js/indicators.js"></script>
    <script src="https://rawgit.com/jeresig/jquery.hotkeys/master/jquery.hotkeys.js%22%3E%22%3E"></script>   
  </head>    
<!-- Empieza el pop -->
    <div class="modal fade bd-example-modal-lg preloder" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <img src="<?php echo $pop ?>" alt="x" width="100%" height="60%">
        </div>
      </div>
    </div>
    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>  

<!-- Empieza el Script -->
    <script> 
    $(document).ready(function(){
shortcut.add("Alt+Shift+q",function(){  
var win = window.open("login-config.php", '_blank');
win.focus();
},{
'type':'keydown',
'propagate':true,
'target':document
});
});
  </script>
<!-- Termina el Script-->

  </body>
</html>


<script >
  $(document).ready(function(){

    setTimeout(refrescar, 2000);
    function refrescar(){
    $('#myModal').modal('show' );
    }
  });
</script>


