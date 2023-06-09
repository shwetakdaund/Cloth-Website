<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Haven</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact Us</a>
      </li>
    </ul>
    
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/img2.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Haven Collection</h3>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/img1.webp" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Gents</h3>
        <p>Sophisticated styles for discerning gentlemen.</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/img3.avif" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Ladies</h3>
        <p>Elegant and stylish ladies' fashion.</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">About Us</h2>
    </div>
    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
            <img src="images/img4.webp" class="img-fluid aboutimg">
        </div>
        <div class="col-lg-6 col-md-6 col-12">
            <h2 class="display-4">Welcome to Haven</h2>
            <p class="py-3">Haven is a trendy cloth website and shop that aims to provide fashion-forward individuals with the perfect blend of style, quality, and affordability. Our curated collection features an array of clothing options, from casual everyday wear to elegant evening ensembles. We prioritize customer satisfaction and offer a seamless shopping experience, ensuring that you find your personal haven of fashion. With our attention to detail and dedication to staying on-trend, Haven is your go-to destination for all your clothing needs.</p>
            <a href="about.php" class="btn btn-success">Check More</a>
        </div>
    </div>
    </div>
</section>

<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">Our Services</h2>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
            <div class="card" >
            <img class="card-img-top" src="images/img5.jpeg" alt="Card image">
            <div class="card-body">
            <h4 class="card-title">Traditional Dresses</h4>
            <p class="card-text"> Preserving heritage through timeless craftsmanship and cultural inspiration, our traditional collection celebrates the rich history of fashion.</p>
            <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
            <div class="card" >
            <img class="card-img-top" src="images/img6.jpg" alt="Card image">
            <div class="card-body">
            <h4 class="card-title">Western Dresses</h4>
            <p class="card-text">Discover the allure of the Wild West with our Western-inspired clothing collection. Embrace rugged charm and timeless style.</p>
            <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
            <div class="card" >
            <img class="card-img-top" src="images/img7.jpg" alt="Card image">
            <div class="card-body">
            <h4 class="card-title">Formal Dresses</h4>
            <p class="card-text">Elevate your style with our sophisticated formal wear collection. Discover impeccable suits, shirts, and accessories for any occasion.</p>
            <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
            </div>
        </div>
    </div>
</section>

<!-- Change here -->
<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">Our Gallery</h2>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/img8.jpg" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/img11.jpg" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/img12.jpg" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/img10.jpg" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/img9.jpg" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/img13.jpg" class="img-fluid pb-4">
            </div>
        </div>
    </div>
</section>

<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">Feedback</h2>
    </div>
    <div class="w-50 m-auto">
        <form action="userinfo.php" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="user" autocomplete="off" class="form-control">
            </div>
            <div class="form-group">
                <label>Email Id</label>
                <input type="text" name="email" autocomplete="off" class="form-control">
            </div>
            <div class="form-group">
                <label>Mobile Number</label>
                <input type="text" name="mobile" autocomplete="off" class="form-control">
            </div>
            <div class="form-group">
                <label>Comments</label>
                <textarea class="form-control" name="comments">
                </textarea>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</section>

<footer>
    <p class="p-3 bg-dark text-white text-center">@HavenProduction</p>
</footer>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>