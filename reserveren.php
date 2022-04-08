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
        <a class="nav-link text-light" href="index.html">Home</a>
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
          <a class="dropdown-item text-dark" href="menukaart.html">menukaart</a>
          <a class="dropdown-item text-dark" href="vestegingen.html"
            >vestegingen</a
          >
          <a class="dropdown-item text-dark" href="overons.html">over ons</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="reserveren.html">reserveren</a>
      </li>
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
        Reserveren
      </h1>
    </div>
    <div class="container">
      <form>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input
              type="email"
              class="form-control"
              id="inputEmail4"
              placeholder="Email"
            />
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">naam</label>
            <input
              type="name"
              class="form-control"
              id="inputPassword4"
              placeholder="naam"
            />
          </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Postcode</label>
              <input
                type="postcode"
                class="form-control"
                id="inputpostcode4"
                placeholder="postcode"
              />
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">datum</label>
              <input
                type="date"
                class="form-control"
                id="inputdatum4"
                placeholder="datum"
              />
            </div>
          </div>
       <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputCity">Plaats</label>
            <input type="text" class="form-control" id="inputCity" placeholder="Plaats" />
          </div>
            <div class="form-group col-md-4">
            <label for="inputState">Tijd</label>
            <select id="inputState" class="form-control">
              <option selected>Kiezen...</option>
                <option>17:00</option>
              <option>17:30</option>
              <option>18:00</option>
              <option>18:30</option>
              <option>19:00</option>
              <option>19:30</option>
              <option>20:00</option>
              <option>20:30</option>
            </select>
          </div>
        <button type="submit" class="btn" style="background-color: #95a78d" >Reserveer</button>
      </form>
    </div>
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
