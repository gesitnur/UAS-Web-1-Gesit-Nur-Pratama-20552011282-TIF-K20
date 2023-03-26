<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=	, initial-scale=1.0">
    <title>GNP Company - Dashboard Page</title>

    <link rel="stylesheet" href="bootstrap-5.2.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom.css">
  </head>
  <body><!-- Start Navbar Section -->
    <header id="header" class="fixed-top " style="background-color: #37517e;">
      <div class="container d-flex align-items-center">
  
        <h1 class="logo me-auto"><a href="index.php">Gesit App</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
  
        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link scrollto active" href="index.php">Dashboard</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
  
      </div>
    </header>
	<!-- End Navbar Section -->
	<br>
  <!-- Start Login Section -->
	<div class="col-sm-12 my-auto pt-5">
    <div id="page-content-wrapper" class="w-100">
      <div class="container-fluid">
        <!-- Start Welcome Content-->
        <section id="pricing" class="pricing" style="padding: 0px;">
          <div class="container" data-aos="">
    
            <div class="row">
              <div class="section-title">
                <h2>Welcome Admin</h2>
                <p>Welcome Admin, Nice to see you back</p>
              </div>
    
            </div>
    
          </div>
        </section>
        <!-- End Welcome Content-->

        <section id="pricing" class="pricing" style="padding: 0px;">
          <div class="container" data-aos="">
    
            <div class="row">
              <div class="section-title">
                <h2>Shoes Data</h2>
              </div>
              <a href="add_shoes.php" class="btn btn-primary ">Add Shoes</a>
              <?php 
                $api_url = 'https://63b58ffc58084a7af3989158.mockapi.io/shoes';
                $data = file_get_contents($api_url);
                $result = json_decode($data);
              ?>
              <?php foreach ($result as $bicycle){ ?>
              <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100" style="margin-top: 10px">
                <div class="box">
                  <h3><?php print_r($bicycle->name); ?></h3>
                  <h4><?php print_r($bicycle->price); ?></h4>
                  <ul>
                    <li><i class="bx bx-check"></i>Stok : <?php print_r($bicycle->stock); ?></li>
                  </ul>
                  <a class="buy-btn" href="show.php?id=<?php print_r($bicycle->id); ?>">Detail</a>

                  <form action="delete.php" method="post">
                    <input type="hidden" name="id" value="<?php print_r($bicycle->id) ?>"><br>
                    <input type="submit" class="buy-btn" style="background-color: white; " value="Delete">
                  </form>
                </div>
              </div>
              <?php } ?>
              
    
            </div>
    
          </div>
        </section>     
      </div>
    </div>
	</div>	
  <!-- End Login Section -->
  <!-- Start Footer -->
  <footer class="text-center text-lg-start text-muted"  style="background-color: #37517e;">
    <div class="text-center p-4 bg-footer"  style="color: white;">
      &copy; Copyright	by 20552011282_Gesit Nur Pratama_TIF K20
    </div>
  </footer>
  <!-- End Footer -->
  <script src="js/custom.js"></script>
</html>