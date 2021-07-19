<!doctype html>
<html lang="en">
  <?php require_once "./inc/main.php"; ?>
  </head> 
  <body class="bg-theme">
    <?php require_once "./inc/nav.php"; ?>
    <div class="main pt-4 mb-5 pb-5">
      <section class="contact">
        <div class="container">      
          <div class="row">
            <div class="col-md-6">
              <h4 class="mb-4 color-cyan">Contact</h4>             
              <form action="" class="mt-5">
                <p class="pb-3">Let me know your questions, suggestions and concerns by filling out the contact below.</p>
                <div class="group">      
                  <input type="text" required class="bg-transparent text-white material-control">
                  <span class="highlight"></span>
                  <span class="bar"></span>
                  <label class="material-label">Your Name</label>
                </div> 
                <div class="group">      
                  <input type="text" required class="bg-transparent text-white material-control">
                  <span class="highlight"></span>
                  <span class="bar"></span>
                  <label class="material-label">Your Email</label>
                </div>
                <div class="group">      
                  <textarea rows="0" required="" id="message" class="bg-transparent text-white material-control" style="height:2.7em; resize: none;"></textarea>
                  <span class="highlight"></span>
                  <span class="bar"></span>
                  <label class="material-label">Your Message</label>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-outline-info"><i class="fa fa-send mr-1"></i> Send</button>
                </div>
              </form> 
            </div>
            <div class="col-md-6">
              <h4 class="mb-4 color-cyan">Social Links</h4>
              <ul class="ml-0 mt-2 pl-0">
                <li class="list-unstyled font-weight-normal pr-2 mb-3 font-weight-light">
                  <a href="" class="text-decoration-none text-theme d-flex"><i class="fa fa-facebook color-blue pr-1 pl-1 mr-2"></i> Facebook</a>
                </li>
                <li class="list-unstyled font-weight-normal pr-2 mb-3 font-weight-light">
                  <a href="" class="text-decoration-none text-theme d-flex"><i class="fa fa-twitter color-cyan mr-2"></i> Twitter</a>
                </li>
                <li class="list-unstyled font-weight-normal pr-2 mb-3 font-weight-light">
                  <a href="" class="text-decoration-none text-theme d-flex"><i class="fa fa-instagram color-orange mr-2"></i> Instagram</a>
                </li>
                <li class="list-unstyled font-weight-normal pr-2 mb-3 font-weight-light">
                  <a href="" class="text-decoration-none text-theme d-flex"><i class="fa fa-github color-blue-grey mr-2"></i> Github</a>
                </li>
              </ul> 
              <button class="btn btn-outline-info btn-block">Subscribe to our weekly newsletter.</button>
            </div> 
          </div>
        </div>
      </section>
    </div>
    <?php require_once 'inc/footer.php'; ?>
    <?php require_once 'inc/scripts.php'; ?>
    <script>
      $('textarea').each(function () {
        this.setAttribute('style', 'height:' + (this.scrollHeight) + 'px;overflow-y:hidden;');
      }).on('input', function () {
        this.style.height = '2.7em';
        this.style.height = (this.scrollHeight) + 'px';
      });
    </script>
  </body>
</html>