<?php 
  $api_url = "https://63b58ffc58084a7af3989158.mockapi.io/shoes/{$_GET['id']}";
  $data = file_get_contents($api_url);
  $result = json_decode($data);


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width= , initial-scale=1.0">
  <title>GNP Company - Login Page</title>

  <link rel="stylesheet" href="bootstrap-5.2.2-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/custom.css">
  <style> 
    body {
        
        background: url(https://www.ahmadsyarifudin.id/template/2020/assets/images/bg/body-bg.png) no-repeat center;
        /* color: #777; */
        color: #4d4b4b;
    }
    .centerDiv {
      height: 100vh;
      width: 100%;
    }
  </style>  
</head>
<body>
  <!-- Start Navbar Section -->
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
    <div class="card border-0">
      <div class="row">
        <div class="col-md-4">
        </div>
        <div class="col-md-4">
          <div class="card-body">
            <div class="mb-5 text-center">
              <h2 class="h5">Show Shoes</h2>
            </div>
              <div class="mb-3">
                <label style="font-size: 17px"><strong>Nama</strong></label><br>
                <label><?php print_r($result->name); ?></label>
              </div>
              <div class="mb-3">
                <label style="font-size: 17px"><strong>Harga</strong></label><br>
                <label><?php print_r($result->price); ?></label>
              </div>
              <div class="mb-3">
                <label style="font-size: 17px"><strong>Stok</strong></label><br>
                <label><?php print_r($result->stock); ?></label>
              </div>
              <div class="mb-3">
                <label style="font-size: 17px"><strong>Jumlah Terjual</strong></label><br>
                <label><?php print_r($result->amount_sold); ?></label>
              </div>
              <a href="edit.php?id=<?php print_r($_GET['id']) ?>" class="button btn w-100" style="background-color: #47b2e4; color: white">Edit</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>  
  <!-- End Login Section -->
  <!-- Start Footer -->
  <footer class="text-center text-lg-start text-muted"  style="background-color: #37517e;">
    <div class="text-center p-4 bg-footer"  style="color: white;">
      &copy; Copyright  by 20552011282_Gesit Nur Pratama_TIF K20
    </div>
  </footer>
  <!-- End Footer -->
  <script src="js/custom.js"></script>
</body>
</html>