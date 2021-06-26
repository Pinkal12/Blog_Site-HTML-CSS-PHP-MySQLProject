<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <title>index</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Big Blogs</a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php"
              >Home <span class="sr-only">(current)</span></a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" href="services.php">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input
            class="form-control mr-sm-2"
            type="search"
            placeholder="Search"
            aria-label="Search"
          />
          <button type="button" class="btn btn-outline-light">Search</button>
        </form>
      </div>
    </nav>


    <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Best Service </h1>
    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium nemo eveniet mollitia eius velit tempora quis quos repudiandae nam eos dignissimos asperiores aspernatur voluptate doloribus aliquid dolorem perspiciatis omnis tempore ea fugit ullam, harum expedita illum deleniti. Iste porro aperiam architecto est hic adipisci. Dolorem perferendis rem voluptas itaque quam!.</p>
  </div>
</div>


<section class="my-5">
      <div class="py-5">
        <h2 class="text-center"><i> Our Services</i></h2>
      </div>

      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
            <img src="images/firs (8).jpg" class="img-fluid pd-3" />
          </div>
          <div class="col-lg-4 col-md-4 col-12">
            <img src="images/firs (9).jpg" class="img-fluid pd-3" />
          </div>
          <div class="col-lg-4 col-md-4 col-12">
            <img src="images/firs (4).jpg" class="img-fluid pd-3" />
          </div>
          
        </div>
      </div>
    </section>


     <!-- The slideshow -->
     <div class="carousel-inner">
        <div class="carousel-item active">
          <img
            src="https://source.unsplash.com/user/erondu/1600x900"
            alt="Chicago"
            width="1500"
            height="500"
          />
        </div>
        <div class="carousel-item">
          <img
            src="https://source.unsplash.com/collection/190727/1600x900"
            alt="Chicago"
            width="1500"
            height="500"
          />
        </div>
        <div class="carousel-item">
          <img
            src="https://source.unsplash.com/WLUHO9A_xik/1600x900"
            alt="New York"
            width="1500"
            height="500"
          />
        </div>
      </div>
      <br>

    <nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="blog.php">Previous</a></li>
    <li class="page-item"><a class="page-link" href="blog.php">1</a></li>
    <li class="page-item"><a class="page-link" href="blog.php">2</a></li>
    <li class="page-item"><a class="page-link" href="blog.php">3</a></li>
    <li class="page-item"><a class="page-link" href="blog.php">Next</a></li>
  </ul>
</nav>

    <footer>
  
  <h4  class=" p-3 bg-dark text-white text- text-center" >Big Blogs@example.com</h4>
</footer>


</body>
</html>