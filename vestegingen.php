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
        Vestegingen
      </h1>
    </div>
    <div
      class="container-xl"
      style="display: flex; justify-content: center; width: 100%; padding: 20px"
    >
      <div class="container">
        <div class="mapouter">
          <div class="gmap_canvas">
            <iframe
              width="600"
              height="500"
              id="gmap_canvas"
              src="https://maps.google.com/maps?q=nijmegen%20pizza&t=&z=13&ie=UTF8&iwloc=&output=embed"
              frameborder="0"
              scrolling="no"
              marginheight="0"
              marginwidth="0"
            ></iframe
            ><a href="https://123movies-to.org"></a><br /><style>
              .mapouter {
                position: relative;
                text-align: right;
                height: 500px;
                width: 600px;
              }</style
            ><a href="https://www.embedgooglemap.net"
              >add google map to website</a
            ><style>
              .gmap_canvas {
                overflow: hidden;
                background: none !important;
                height: 500px;
                width: 600px;
              }
            </style>
          </div>
        </div>
      </div>
      <div class="container fs-3">
        <ul>
          <li style="list-style-type: none">
            Kelfkensbos 24, 6511 TB Nijmegen
          </li>
          <li>Sint Jacobslaan 402, 6533 VW Nijmegen</li>
          <li>Daalseweg 248, 6521 GS Nijmegen</li>
          <li>Graafseweg 27, 6512 BM Nijmegen</li>
          <li>Eerste Walstraat 18, 6511 GG Nijmegen</li>
          <li>Groenestraat 233, 6531 HJ Nijmegen</li>
          <li>Sint Annastraat 45-A, 6524 EE Nijmegen</li>
        </ul>
      </div>
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
