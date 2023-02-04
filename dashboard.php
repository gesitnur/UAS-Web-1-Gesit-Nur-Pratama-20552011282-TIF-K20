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
  
        <h1 class="logo me-auto"><a href="dashboard.php">Gesit App</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
  
        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link scrollto active" href="dashboard.php">Dashboard</a></li>
            <li><a class="nav-link scrollto" href="index.html">Logout</a></li>
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
              <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="box">
                  <h3>TOTAL TRAFFIC</h3>
                  <h4>350,897</h4>
                  <ul>
                    <li><i class="bx bx-check"></i> Users Who Visited Our Website</li>
                  </ul>
                  <a class="buy-btn">Detail</a>
                </div>
              </div>
              <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="box">
                  <h3>NEW PROJECTS</h3>
                  <h4>48</h4>
                  <ul>
                    <li><i class="bx bx-check"></i> New Project This Month</li>
                  </ul>
                  <a class="buy-btn">Detail</a>
                </div>
              </div>
              <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="box">
                  <h3>Clients</h3>
                  <h4>21</h4>
                  <ul>
                    <li><i class="bx bx-check"></i> New Client This Month</li>
                  </ul>
                  <a class="buy-btn">Detail</a>
                </div>
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

        <!-- Start Project Content-->
        <section id="services" class="services section-bg">
          <div class="container" data-aos="fade-up">
            <div class="section-title">
              <h2>Our Latest Project</h2>
            </div>
    
            <div class="row">
              <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon-box">
                  <div class="icon"><i class="bx bxl-dribbble"></i></div>
                  <h4><a href="">	TracVirus</a></h4>
                  <p>	TracVirus has come to be a solution for travellers who want to come to Malaysia easily and make sure that they are not infected with COVID-19.</p>
                </div>
              </div>
    
              <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                <div class="icon-box">
                  <div class="icon"><i class="bx bx-file"></i></div>
                  <h4><a href="">Virtual Tenant Representative (VTR)</a></h4>
                  <p>Virtual Tenant Representative (VTR) was created to unite small business tenants and landlords. VTR provides educational opportunities, facilitates site selection, negotiation, and lease management for small real estate business owner.</p>
                </div>
              </div>
    
              <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
                <div class="icon-box">
                  <div class="icon"><i class="bx bx-tachometer"></i></div>
                  <h4><a href="">Learnemy</a></h4>
                  <p>Learnemy, a platform that narrows the gap between experienced instructors and young learners to achieve better prospects of learning. We developed a diverse learning platform for eager learners and skillful instructors from any part of Singapore.</p>
                </div>
              </div>
    
              <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
                <div class="icon-box">
                  <div class="icon"><i class="bx bx-layer"></i></div>
                  <h4><a href="">TCMC Medical Care Web App</a></h4>
                  <p>TCMC, a healthcare web app that aligns with the noble principles of the Tzu Chi foundation. We developed an easy and user-friendly web app to handle all the complex data and operations of the world's one of the largest charitable organizations.</p>
                </div>
              </div>
    
            </div>
    
          </div>
        </section>
        <!-- End Project Content-->       
      </div>
    </div>
	</div>	
  <!-- End Login Section -->
  <!-- Start Footer -->
  <footer class="text-center text-lg-start text-muted"  style="background-color: #37517e;">
    <div class="text-center p-4 bg-footer"  style="color: white;">
      &copy; Copyright	by 20552011282_Gesit Nur Pratama_TIF K20_UASWEB1
    </div>
  </footer>
  <!-- End Footer -->
  <script src="js/custom.js"></script>
</html>