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
            <a class="nav-link" href="services.php">Servies</a>
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
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
            Search
          </button>
        </form>
      </div>
    </nav>


    <div class="jumbotron">
  <h1>Big Blogs</h1>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio temporibus officiis similique qui! Animi quod ad id quos! Perspiciatis quae consequuntur temporibus sint eligendi illo laboriosam saepe voluptatem nemo in. Facilis unde, numquam eos dolores maxime, impedit voluptatum id similique molestias alias cupiditate atque architecto, laudantium error debitis saepe consequatur quae perspiciatis optio praesentium iure? Delectus consequatur natus, officia quibusdam, id et, placeat voluptate impedit quos vero nulla dolorem iusto veritatis. Amet et quo modi, voluptate, tenetur corrupti deleniti consectetur, nemo debitis unde reiciendis distinctio facilis numquam nulla incidunt tempore id minima nihil atque earum. Cupiditate provident libero nisi.</p>
</div>


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


</body>
</html>