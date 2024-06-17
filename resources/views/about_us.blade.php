<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$title}}</title>

   <!--Il font lo inserisco in CSS-->

    <!--css bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!--css-->
    <link rel="stylesheet" href="./public/Stili/presto.css">
  </head>

  <body>
    <div class="container-md px-0">

    <header>
      <!--Navbar-->
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">

          <a class="navbar-brand" href="#">Presto.it</a>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href={{route("about-us")}}>Chi siamo</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href={{route("contacts")}}>Contatti</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href={{route("articles")}}>Articoli</a>
              </li>
              <li class="nav-item">
			  <a class="nav-link" href={{route("homepage")}}>Homepage</a>
              </li>
            </ul>

          </div>
        </div>
      </nav>
      <!--Fine Navbar-->


    </header>

  
   

    <footer></footer>

    </div>
    

    <!--libreria JS di Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!--my JS-->
    <script srl="./Javascript/main.js"></script>
  </body>
</html>
