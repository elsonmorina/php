<?php

    include_once('config.php');
    $sql="SELECT * FROM products1";
    $selectproducts=$conn->prepare($sql);
    $selectproducts->execute();
    $products_data=$selectproducts->fetchall();

?>
<!DOCTYPE html>
<html>
<head>
 <title>Home</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content="">
   <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
   <meta name="generator" content="Hugo 0.88.1">
   <link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
 <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
 <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
 <link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
 <link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
 <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
 <meta name="theme-color" content="#7952b3">
 <style>
    
    header {
      background: #3f51b5;
      padding: 20px;
      text-align: center;
      color: white;
    }

    header h1 {
      font-size: 2.5rem;
    }

    nav {
      background: #303f9f;
      padding: 10px 0;
      display: flex;
      justify-content: center;
      gap: 40px;
      flex-wrap: wrap;
    }

    nav a {
      color: white;
      text-decoration: none;
      font-weight: bold;
      font-size: 1rem;
      transition: color 0.3s;
    }

    nav a:hover {
      color: #ffeb3b;
    }

    nav a.logout {
      background: #ff5252;
      padding: 8px 16px;
      border-radius: 5px;
      color: white;
    }

    nav a.logout:hover {
      background: #e53935;
      color: white;
    }
 </style>
</head>
<body>
    <header>
    <h1>FitnessWeb</h1>
    <p>Your Personal Fitness Companion</p>
  </header>

  <nav>
    <a href="home.php">Home</a>
    <a href="dashboard.php">Dashboard</a>
    
    <a href="logout.php" class="logout">Logout</a>
  </nav>
<header>
    
  <div class="collapse bg-dark" id="navbarHeader"> 
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">About</h4>
          <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white">Contact</h4>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white">Follow on Twitter</a></li>
            <li><a href="#" class="text-white">Like on Facebook</a></li>
            <li><a href="#" class="text-white">Email me</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="#" class="navbar-brand d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
        <strong>Album</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <a href="dashboard.php"><span class="navbar-toggler-icon"></span></a>
      </button>
    </div>
  </div>
</header>
<section class="py-5 text-center container">
<div class="row py-lg-5">
  <div class="col-lg-6 col-md-8 mx-auto">
    <h1 class="fw-light">Fuel Your Body with Premium Protein</h1>
    <p class="lead text-muted">Unlock your full potential with our high-quality protein. Whether you're building muscle, enhancing recovery, or boosting overall health, our protein is designed to help you achieve your fitness goals faster and more effectively.</p>
    
  </div>
</div>
</section>
<div class="album py-5 bg-light">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <?php
        foreach($products_data as $product_data){
        ?>
        <div class="col">
          <div class="card shadow-sm">
          <img src="protein_image/<?php echo $product_data['protein_image']   ?>" height="350">
<div class="card-body">
  <h4><?php echo $product_data['name'] ?></h4>
  <p class="card-text"><?php echo $product_data['desc']  ?></p>
  <div class="d-flex justify-content-between align-items-center">
    
    <small class="text-muted">Price: <?php echo $product_data['price']; ?></small>
<small class="text-muted">Weight:<?php echo $product_data['weight']; ?></small>
</div>
</div>
</div>
</div>
<?php } ?>
</div>
</div>
</div>