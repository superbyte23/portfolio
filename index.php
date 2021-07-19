<!doctype html>
<html lang="en">
  <?php require_once "./inc/main.php"; ?>
  </head> 
  <body class="bg-theme">
   <?php require_once "./inc/nav.php"; ?>
   <div class="main pt-4">
    <section class="container my-5 pb-4" id="sec1">
      <div class="jumbotron bg-theme text-gray p-1">
        <h1 class="display-3" id="welcome">Hello, Im 
          <strong class="text-info d-none" id="name-fix">John D. Cañete</strong>
          <strong class="text-info d-none d-lg-inline-block" style="font-weight: 650;">
            <span class='console-container'><span id='text'></span><div class='console-underscore' id='console'>&#95;</div></span>
          </strong>
        </h1>
        <p class="lead text-justify">I'm a software developer specializing in building websites and applications.</p>
        <hr class="my-4 border-light">
        <p>If you have a projects that you would like to discuss, you can contact me 24/7.</p>
        <a class="btn btn-lg btn-outline-info btn-sm-block" href="#" role="button"><i class="fa fa-envelope-square mr-2"></i> john.canete1991@gmail.com</a>
      </div>
    </section>
    <div class="svg-bg"> 
      <section class="container mb-5 pb-5" id="sampleProjects">
        <h4 class="mb-4 text-gray">Demo Projects</h4>
        <div class="row">
          <div class="col-md-6 mb-4">
            <div class="card bg-theme border-info h-100">
              <div class="card-body">
                <div class="d-flex align-content-end mb-3">
                  <div class="open"><a href="#" class="btn btn-sm btn-outline-info"><i class="fa fa-download"></i> <span class="d-none d-lg-inline">Download</span></a></div>
                  <div class="ml-auto">
                    <a href="" class="btn btn-sm btn-outline-info"><i class="fa fa-link"></i> <span class="d-none d-lg-inline">Demo</span></a>
                    <a href="" class="btn btn-sm btn-outline-info"><i class="fa fa-github"></i> <span class="d-none d-lg-inline">Source Code</span></a>
                  </div>
                </div>
                <h5 class="card-title">HotelRS</h5>
                <h6 class="card-subtitle mb-2 text-light">Hotel Reservation System</h6>
                <p class="card-text ">Some quick example text to build on the card title and make up the bulk of the card's content.</p> 
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-4">
            <div class="card bg-theme border-info h-100">
              <div class="card-body">
                <div class="d-flex align-content-end mb-3">
                  <div class="open"><a href="#" class="btn btn-sm btn-outline-info"><i class="fa fa-download"></i> <span class="d-none d-lg-inline">Download</span></a></div>
                  <div class="ml-auto">
                    <a href="" class="btn btn-sm btn-outline-info"><i class="fa fa-link"></i> <span class="d-none d-lg-inline">Demo</span></a>
                    <a href="" class="btn btn-sm btn-outline-info"><i class="fa fa-github"></i> <span class="d-none d-lg-inline">Source Code</span></a>
                  </div>
                </div>
                <h5 class="card-title">ERIS</h5>
                <h6 class="card-subtitle mb-2 text-light">Educational Resource Information System</h6>
                <p class="card-text ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis culpa.</p> 
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-4">
            <div class="card bg-theme border-info h-100">
              <div class="card-body">
                <div class="d-flex align-content-end mb-3">
                  <div class="open"><a href="#" class="btn btn-sm btn-outline-info"><i class="fa fa-download"></i> <span class="d-none d-lg-inline">Download</span></a></div>
                  <div class="ml-auto">
                    <a href="" class="btn btn-sm btn-outline-info"><i class="fa fa-link"></i> <span class="d-none d-lg-inline">Demo</span></a>
                    <a href="" class="btn btn-sm btn-outline-info"><i class="fa fa-github"></i> <span class="d-none d-lg-inline">Source Code</span></a>
                  </div>
                </div>
                <h5 class="card-title">Survey System</h5>
                <h6 class="card-subtitle mb-2 text-light">Kabankalan CAtholic College Survey System</h6>
                <p class="card-text ">A simple survey system specificaly for the KCC sponsor community.</p> 
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-4">
            <div class="card bg-theme border-info h-100">
              <div class="card-body">
                <div class="d-flex align-content-end mb-3">
                  <div class="open"><a href="#" class="btn btn-sm btn-outline-info"><i class="fa fa-download"></i> <span class="d-none d-lg-inline">Download</span></a></div>
                  <div class="ml-auto">
                    <a href="" class="btn btn-sm btn-outline-info"><i class="fa fa-link"></i> <span class="d-none d-lg-inline">Demo</span></a>
                    <a href="" class="btn btn-sm btn-outline-info"><i class="fa fa-github"></i> <span class="d-none d-lg-inline">Source Code</span></a>
                  </div>
                </div>
                <h5 class="card-title">Class Management System</h5>
                <h6 class="card-subtitle mb-2 text-light">Card subtitle</h6>
                <p class="card-text ">Some quick example text to build on the card title and make up the bulk of the card's content.</p> 
              </div>
            </div>
          </div> 
        </div>
        <div class="mb-1 text-center">          
            <button class="btn btn-outline-info btn-sm-block px-5"><i class="fa fa-link"></i><span class="ml-2">More projects</span></button>
          </div>
      </section> 
    </div>
  </div>
    <?php require_once 'inc/footer.php'; ?>
    <?php require_once 'inc/scripts.php'; ?>
    <script src="./js/terminal.js"></script>
  </body>
</html>