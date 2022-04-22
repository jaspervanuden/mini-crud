<?php include_once "connection.php";

//dit stuk haalt de data op
$sql = "SELECT * FROM menu";
$stmt = $conn->prepare($sql);
$stmt->execute();
//haal alle data op en knal die in een variabele genaam results
$results = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>project</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body style="background-color: #d4cec2">
    <ul class="nav nav-pills" style="background-color: #95a78d">
      <li class="nav-item">
        <a class="nav-link text-light" href="index.php">Home</a>
      </li>
      <li class="nav-item dropdown">
        <a
          class="nav-link dropdown-toggle text-light"
          data-toggle="dropdown"
          href="#"
          role="button"
          aria-haspopup="true"
          aria-expanded="true"
          style="background-color: #95a78d"
        >
          pizzamia</a
        >
        <div class="dropdown-menu">
          <a class="dropdown-item text-dark" href="menukaart.php">menukaart</a>
          <a class="dropdown-item text-dark" href="vestegingen.php"
            >vestegingen</a
          >
          <a class="dropdown-item text-dark" href="overons.php">over ons</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="reserveren.php">reserveren</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="login.php">admin login</a>
      </li>
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
    </ul>
    <div
      class="container-xl"
      style="
        background: linear-gradient(
            to top,
            #d4cec2d3,
            #95a78d88,
            #afb79e80,
            #95a78dbe
          ),
          url(img/header.jpg) no-repeat;
        background-size: cover;
        background-position: center;
        padding: 10%;
      "
    >
      <h1
        style="
          color: white;
          justify-content: space-evenly;
          text-align: center;
          font-size: 80px;
        "
      >
        Menukaart
      </h1>
        </div>
    <div class="container row justify-content-around" style="margin-bottom: 10px; padding: 10px; margin: 10%;">
    <?php
    foreach($results as $res){
      ?>
      <div class="card" style="margin: 2%; padding: 2%; width: 18rem; background-color: #95a78d">
        <img src="img/<?php echo $res['img']?>" class="card-img-top"/>
        <div class="card-body">
         <h5 class="card-title"><?php echo $res['name'];?></h5>
          <p class="card-text">prijs: <?php echo $res['price'];?></p>
          <a href="#" class="btn btn-outline-light">toevoegen aan bestelling</a>
        </div>
      </div>
      <?php
    }
    ?>
    </div>
  </div>
  <footer class="footer" style="background-color: #95a78d">
      <div class="container">
        <span class="text-muted center">volg ons op de Socials:
          <a href="instagram.com">instagram</a>
          <a href="snapchat.com">snapchat</a>
          <a href="facebook.com">facebook</a>
          <a href="twitter.com">twitter</a>
        </span>
      </div>
    </footer>
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
