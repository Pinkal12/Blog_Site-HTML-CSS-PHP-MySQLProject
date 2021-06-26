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
    <div id="demo" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
      </ul>

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

      <!-- Left and right controls -->
      <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>

    <section class="my-5">
      <div class="py-5">
        <h2 class="text-center"><i>About Us</i></h2>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-12">
            <img src="images/first.jpg" class="img-fluid" />
          </div>
          <div class="col-lg-6 col-md-6 col-12">
            <h2>I am The Big Blogs.</h2>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit.
              Distinctio quisquam officia incidunt voluptas non, saepe pariatur
              fugiat voluptatum ducimus animi sunt temporibus alias vitae illo
              asperiores veritatis aliquid possimus, esse quia, tempora laborum.
              Amet totam rem suscipit aspernatur veniam reiciendis odio officia
              at ducimus, vero architecto saepe voluptate deserunt eligendi nisi
              autem vitae ullam laudantium facilis provident dolor iure! Rem
              assumenda enim nulla et optio cupiditate soluta ipsam temporibus
              quod cumque, delectus magnam animi distinctio maiores deleniti?
              Minima qui inventore natus molestias reiciendis quam debitis
              doloribus est delectus ea vel odio, architecto voluptates alias
              accusantium aperiam ipsum ut, eum omnis alias vitae illo
              asperiores veritatis aliquid possimus, esse quia, tempora laborum.
              Amet totam rem suscipit aspernatur veniam reiciendis odio officia
              at ducimus, vero architecto saeplaussumenda enim nulla et optio
              cupiditate soluta ipsam temporibus quod cumque, delectus magnam
              animi distinctio maioreslaudantium facilis provident dolor iure!
              Rem assumenda enim nulla et optio cupiditate soluta ipsam
              temporibus quod cumque, delectus magnam
            </p>
            <a href="about.php" class="btn btn-success"> Check More></a>
          </div>
        </div>
      </div>
    </section>

    <section class="my-5">
      <div class="py-5">
        <h2 class="text-center"><i>Top Blogs</i></h2>
      </div>

      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
            <div class="card" style="width: 400px">
              <img
                class="card-img-top"
                src="images/firs (10).jpg"
                alt="Card image"
              />
              <div class="card-body">
                <h4 class="card-title">Set Laptop</h4>
                <p class="card-text">Some example text.</p>
                <a href="blog.php" class="btn btn-primary">See Profile</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-12">
            <div class="card" style="width: 400px">
              <img
                class="card-img-top"
                src="images/firs (4).jpg"
                alt="Card image"
              />
              <div class="card-body">
                <h4 class="card-title">Mountant</h4>
                <p class="card-text">Some example text.</p>
                <a href="blog.php" class="btn btn-primary">See Profile</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-12">
            <div class="card" style="width: 400px">
              <img
                class="card-img-top"
                src="images/firs (5).jpg"
                alt="Card image"
              />
              <div class="card-body">
                <h4 class="card-title">Himachal</h4>
                <p class="card-text">Some example text.</p>
                <a href="blog.php" class="btn btn-primary">See Profile</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="my-5">
      <div class="py-5">
        <h2 class="text-center"><i> Our Gallery</i></h2>
      </div>

      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
            <img src="images/firs (8).jpg" class="img-fluid pd-3" />
          </div>
          <div class="col-lg-4 col-md-4 col-12">
            <img src="images/firs (6).jpg" class="img-fluid pd-3" />
          </div>
          <div class="col-lg-4 col-md-4 col-12">
            <img src="images/firs (10).jpg" class="img-fluid pd-3" />
          </div>
          
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


    </section>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, unde dolor illum, eligendi ad atque odit expedita totam neque reiciendis quibusdam nemo et quidem aspernatur. Perspiciatis quasi ipsa porro delectus, necessitatibus labore veritatis, inventore illum fuga quia accusamus, quas dolores eaque temporibus odit consequatur atque recusandae. Beatae quae maiores, in perspiciatis repudiandae earum placeat quo. Quaerat consequuntur corrupti autem minima veniam sint! Aut inventore accusantium beatae explicabo vitae corrupti ipsa nulla eaque expedita alias reiciendis repellendus eum quidem, possimus voluptate ad, in fugit quasi earum sapiente animi vel! Possimus, perferendis? Alias dolores vel obcaecati dicta quaerat, odit sed praesentium deleniti.</p>

    <section class="my-5">
      <div class="py-5">
        <h2 class="text-center"><i> Contact Us</i></h2>
      </div>
      <div class="w-50 m-auto">
        <form action="userinfo.php" method="post">
          <div class="form-group">
            <label>Username</label>
            <input type="text" name="user" class="form-control">
            <div class="form-group">
              <label>Email Id</label>
              <input type="text" name="email" class="form-control">
              <div class="form-group">
                <label>Mobile</label>
                <input type="text" name="mobile" class="form-control">
          </div>
          <div class="form-group">
            <label>comment</label>
            <textarea class ="form-control" name="comments">
            </textarea>
          </div>
          <button type="submit" class="btn btn-success" href="userinfo.php">submit</button>
        </form>
      </div>

    </section>




    <footer>
  
      <h4  class=" p-3 bg-dark text-white text- text-center" >Big Blogs@example.com</h4>
    </footer>

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>
