<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi cuenta | Pop-pop</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
  
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../assets/css/style.css" rel="stylesheet">
</head>
<body>
       <!-- ======= Mobile nav toggle button ======= -->
    <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>


    <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Pop-pop</h2>
          <ol>
            <li><a href="index.html">Cuenta</a></li>
            <li>Pop-pop</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">
      
        <div class="row">
            <div class="col-11">
                <div class="card bg-light mb-3">
                    <div class="card-body">
                        <center>
                        <h5 class="card-title" style="color:#074A98; font-size:30px; letter-spacing: 0.20em;" ><b>Pop-up<b></h5>
                        </center>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col" width="10%"><center>Id</center></th>
                                    <th scope="col" width="15%"><center>Nombre</center></th>
                                    <th scope="col" width="50%"><center>Imagen</center></th>
                                    <th scope="col"  colspan="2" width="25%"><center>Operaciones</center></th>
                                <tr>
                            </thead>

                            <tbody>
                                <?php
                                    include("index.php");
                                    $query = "SELECT * FROM imagenes where Id = 2";
                                    $resultado= mysqli_query($conexion,$query) or die ($conexion->error);
                                    while($row = $resultado->fetch_assoc()){
                                ?>
                                    <tr class="bg-active">
                                        <center>
                                        <td><center><?php echo $row['Id']; ?></center></td>
                                        <td><center><?php echo $row['Nombre']; ?></td>
                                        <td align="center"><img width="100%" src="<?php echo $row['Img']; ?>"/></td>
                                        <td><center><a href="modificar_img.php?id=<?php echo $row['Id'];?>">Cambiar</a></center></td>
                                    </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
   
      </div>
    </section>

  </main><!-- End #main -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

         <!-- Vendor JS Files -->
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="../assets/vendor/counterup/counterup.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/venobox/venobox.min.js"></script>
  <script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="../assets/vendor/typed.js/typed.min.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>
</body>
</html>