<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$variabile1}}</title>

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

          <a class="navbar-brand" href={{route("welcome")}}>{{$variabile1}}</a>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href={{route("aboutUs")}}>Chi siamo</a>
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


      <div class="position-relative">

        <img class="img-fluid" src="./public/Immagini/card1.jpg" alt="">

        <div class="position-absolute top-50 bg-danger w-100">
          <h1 class="text-center">{{config("site.name")}}</h1>
          <h2 class="text-center">La tua casa dei sogni</h2>
        </div>
      </div>
      


    </header>

    <main>

    <!--Body-->
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In dignissim congue odio eu egestas. In odio dolor, venenatis id feugiat eget, fermentum ut lectus. Cras sit amet pulvinar odio. Vivamus lacinia leo non erat ultricies aliquet. Nulla sit amet congue mauris, ut tristique tellus. In id neque quis lacus convallis dictum. Nulla consequat porttitor nibh, nec euismod lacus. Nullam pulvinar efficitur nunc, non varius nibh egestas vel. Pellentesque vestibulum lacus vel dui rutrum consequat. Integer et quam tincidunt, aliquet risus non, cursus turpis. Nulla non felis pellentesque, facilisis risus vel, accumsan neque. Vivamus varius, quam ultricies tincidunt vestibulum, lectus sem egestas dolor, at vehicula ante mi vitae mi. Quisque sagittis gravida justo in pharetra. Nam vitae ex felis. Donec lobortis molestie velit, at faucibus magna pellentesque vel. Aenean facilisis lorem non venenatis rhoncus.</p>


      <!--contenitore per card-->
      <div class="row gap-3 justify-content-center position-relative mia-top-card">

        <div class="col-8 col-md-3">

        <!--card1-->
        
          <div class="card">
            <img src="./public/Immagini/card1.jpg" class="card-img-top" alt="loft2">
          <div class="card-body">
            <h5 class="card-title">In città</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente quod, expedita ipsum libero numquam beatae sunt nulla eaque itaque deleniti iusto distinctio incidunt.</p>
            <a href="#" class="btn btn-primary">Leggi di più</a>
          </div>
          </div>
          <!--end card 1-->
        </div>
        
        <div class="col-8 col-md-3">

          <!--card2-->
          
            <div class="card">
            <img src="./public/Immagini/card2.jpg" class="card-img-top" alt="loft3">
            <div class="card-body">
              <h5 class="card-title">Rustici e casali</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente quod, expedita ipsum libero numquam beatae sunt nulla eaque itaque deleniti iusto distinctio incidunt.</p>
              <a href="#" class="btn btn-primary">Leggi di più</a>
            </div>
          </div>
          <!--fine card2-->
          </div>
        
          <div class="col-8 col-md-3">

          <!--card3-->
            <div class="card" >
            <img src="./public/Immagini/card3.jpg" class="card-img-top" alt="loft4">
            <div class="card-body">
              <h5 class="card-title">Stravaganti</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente quod, expedita ipsum libero numquam beatae sunt nulla eaque itaque deleniti iusto distinctio incidunt.</p>
              <a href="#" class="btn btn-primary">Leggi di più</a>
            </div></div>
            <!--end card3-->
            </div>
        
        </div>


        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In dignissim congue odio eu egestas. In odio dolor, venenatis id feugiat eget, fermentum ut lectus. Cras sit amet pulvinar odio. Vivamus lacinia leo non erat ultricies aliquet. Nulla sit amet congue mauris, ut tristique tellus. In id neque quis lacus convallis dictum. Nulla consequat porttitor nibh, nec euismod lacus. Nullam pulvinar efficitur nunc, non varius nibh egestas vel. Pellentesque vestibulum lacus vel dui rutrum consequat. Integer et quam tincidunt, aliquet risus non, cursus turpis. Nulla non felis pellentesque, facilisis risus vel, accumsan neque. Vivamus varius, quam ultricies tincidunt vestibulum, lectus sem egestas dolor, at vehicula ante mi vitae mi. Quisque sagittis gravida justo in pharetra. Nam vitae ex felis. Donec lobortis molestie velit, at faucibus magna pellentesque vel. Aenean facilisis lorem non venenatis rhoncus.</p>
        
        
    </main>


    
    <!-- Sezione i nostri numeri -->
    <aside>
              
      <div class="row justify-content-center">

        <div class="col-sm-8 col-md-6">
          <figure>
            <img class="img-fluid" src="./public/Immagini/card2.jpg" alt="">
          </figure>
        </div>

        <div id="nostrinumeri" class="col-8 col-md-6">

            <h2>I nostri numeri</h2>

            <p>
              <span id="number1">0</span> Annunci
            </p>
            <p>
              <span id="number2">0</span> Clienti soddisfatti
            </p>
            <p>
              <span id="number3">0</span> Ville vendute
            </p>
        </div>

      </div>

    </aside>
    <!-- END Sezione i nostri numeri -->

    <footer></footer>

    </div>
    

    <!--libreria JS di Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!--my JS-->
    <script srl="./Javascript/main.js"></script>
  </body>
</html>
