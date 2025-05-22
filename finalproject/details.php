<?php
    session_start();
    include_once('config.php');
    $id=$_GET['id'];
    $_SESSION['product_id']=$id;
    $sql="SELECT * FROM products1 WHERE id=:id";
    $selectProduct=$conn->prepare($sql);
    $selectProduct->bindParam(':id',$id);
    $selectProduct->execute();
    $products_data=$selectProduct->fetch();

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
 <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
 <meta name="theme-color" content="#7952b3">
 <style>
    .form-floating{
      margin: 20px 0;
    }
  </style>
 </head>
 <body>
  <header>
    <div class="collapse bg-dark" id="navbarHeader">
     <div class="container">
        <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
                <h4 class="text-white">About</h4>
                <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
            </div>
            
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
<div class="container">
  <a href="list_proteins.php" class="navbar-brand d-flex align-items-center">
    
    <strong>Proteins</strong>
  </a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</div>
</div>
</header>
<section class="py-5 text-center container">
<div class="row py-lg-5">
  <div class="col-lg-6 col-md-8 mx-auto">
    <h1 class="fw-light">Buy your protein</h1>
    <p class="lead text-muted">Build your body</p>
  </div>
</div>
</section>
<div class="album py-5 bg-light">
    <div class="container">
      <div class="container">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-6">
                    <div class="white-box text-center" style="width: 100%;height: 100%;"><img src="protein_image/<?php echo $products_data['protein_image'];  ?>" class="img-responsive" style="width: 70%; height: 90%;"></div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-6">
                    <h4 class="box-title mt-5"><?php echo $products_data['name']; ?></h4>
                    <p><?php echo $products_data['desc']; ?></p>
                    <form action="buy.php" method="post">
                    <label for="weight">Weight</label>
                    <input type="number" class="form-control" id="floatingInput" placeholder="<?php echo $products_data['weight'];  ?>" readonly name="weight" placeholder="g" >
                    <label for="price">Price</label>
                    <input type="number" class="form-control" id="floatingInput" placeholder="<?php echo $products_data['price'];  ?>" readonly name="final_price" >
                    <!-- <div class="form-floating">
                      <select name="time">
                        <option value="1000g">1000g-50$</option>
                        <option value="1500g">1500g-60$</option>
                        <option value="1700g">1700g-65$</option>
                        <option value="2000g">2000g</option>
                      </select>
                    </div> -->
                    <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit">Buy</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
 </body>
 </html>