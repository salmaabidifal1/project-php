<?php
  session_start();
  if(isset($_POST['submit'])){
    header("Location:login.php");
    exit;

  }
  ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="FashionShop - Découvrez notre collection tendance de vêtements pour femmes.">
    <title>Accueil - FashionShop</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="stylelogo.css">
</head>
<body>
    <!--navbar-->
<div class="container-fluid p-0 ">
<nav class="navbar navbar-expand-lg" style="background-color:#C2B280;">
  <div class="container-fluid">
   <img src="./images/logoemsi.png" alt="Logo" class="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">SING IN</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
    
    </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
   <!--second child-->
<nav class="navbar navbar-expand-lg navbar-dark  bg-secondary"> 
    <ul class="navbar-nav me-auto">
    <li class="nav-item">
          <a class="nav-link" href="#"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"></a>
        </li>
    </ul>
</nav>
<!--third child-->
<div class="bg-ligth">
<h3 class="text-center">Welcome to our Boutique!</h3>
<p class="text-center">Where elegance meets style. Explore our curated collection of timeless fashion pieces designed to elevate your wardrobe</p>
</div>
<!--fourth child-->
<div class="row">
    <div class="col-md-10">
       <div class="row">
         <div class="col-md-4 mb-2">
            <div class="card" style="width: 18rem;">
  <img src="./images/robe1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn" style="background-color: #DAA520; color: white; border: none;">Add to cart</a>
    <a href="#" class="btn btn-secondary">View more</a>
  </div>
</div>
</div>
         <div class="col-md-4 mb-2">
            <div class="card" style="width: 18rem;">
  <img src="./images/vest2.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn" style="background-color: #DAA520; color: white; border: none;">Add to cart</a>
    <a href="#" class="btn btn-secondary">View more</a>
  </div>
</div>
</div>
<div class="col-md-4 mb-2">
    <div class="card" style="width: 18rem;">
  <img src="./images/jeans1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn" style="background-color: #DAA520; color: white; border: none;">Add to cart</a>
    <a href="#" class="btn btn-secondary">View more</a>
  </div>
</div>
</div>
<div class="col-md-4 mb-2">
    <div class="card" style="width: 18rem;">
  <img src="./images/robes4.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn" style="background-color: #DAA520; color: white; border: none;">Add to cart</a>
    <a href="#" class="btn btn-secondary">View more</a>
  </div>
</div>
</div>
         <div class="col-md-4 mb-2">
            <div class="card" style="width: 18rem;">
  <img src="./images/haut1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn" style="background-color: #DAA520; color: white; border: none;">Add to cart</a>
    <a href="#" class="btn btn-secondary">View more</a>
  </div>
</div>
</div>
<div class="col-md-4 mb-2">
    <div class="card" style="width: 18rem;">
  <img src="./images/pnt2.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn" style="background-color: #DAA520; color: white; border: none;">Add to cart</a>
    <a href="#" class="btn btn-secondary">View more</a>
  </div>
</div>
</div>
 </div>
     </div>
     <div class="col-md-2 bg-secondary p-0">
    <ul class="navbar-nav me-auto text-center"> 
        <li class="nav-item" style="background-color: #C2B280;">
            <a href="#" class="nav-link text-light"><h4>Catégories</h4></a> 
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link text-light">Robes</a> 
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link text-light">Hauts</a> 
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link text-light">Bas</a> 
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link text-light">Vestes et Manteaux</a> 
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link text-light">Accessoires</a> 
        </li>
    </ul>

    <ul class="navbar-nav me-auto text-center"> 
        <li class="nav-item" style="background-color: #C2B280;">
            <a href="#" class="nav-link text-light"><h4>Ensembles</h4></a> 
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link text-light">Ensembles Tailleur</a> 
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link text-light">Ensembles Casual</a> 
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link text-light">Ensembles Sportwear</a> 
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link text-light">Ensembles de Soirée</a> 
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link text-light">Ensembles Bohème</a> 
        </li>
    </ul>
</div>

       
     
</div>


<!--last child--> 
<div class="p-3" style="background-color: #808080;">
    <p>All rights reserved - Designed for Salma for Woman Luxury Boutique - 2024</p>
</div>

</div>




</body>
</html>
