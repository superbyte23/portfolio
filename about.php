<!doctype html>
<html lang="en">
  <?php require_once "./inc/main.php"; ?>
  <style> 
    li i { font-size: 25px;}
  </style>
  </head> 
  <body class="bg-theme">
    <?php require_once "./inc/nav.php"; ?>
    <div class="main pt-4 mb-5 pb-5">
      <section class="about basic-info">
        <div class="container">
          <h4 class="mb-4 color-cyan">About Me</h4>
          <dl class="row">
            <dt class="col-sm-3">Full Name :</dt>
            <dd class="col-sm-9">John Dato. Canete</dd>

            <dt class="col-sm-3">Address :</dt>
            <dd class="col-sm-9">29-A, Coloso St. Brgy. 6, Kabankalan City, Negros Occidental</dd>

            <dt class="col-sm-3">Country :</dt>
            <dd class="col-sm-9">Philippines</dd>

            <dt class="col-sm-3">Educational backgroud :</dt>
            <dd class="col-sm-9">
              <small class="color-teal">Elementary Level</small>
              <p>Esteban R. Abada Memorial School West, 2003</p> 
              <small class="color-teal">Secondary Secondary</small>
              <p>Binicuil National High School Poblacion Extension, 2008</p>
              <small class="color-teal">Vocational</small>
              <p>Computer System Servicing, Kabankalan Catholic College Technological Center, 2011</p> 
              <small class="color-teal">Tertiary Level</small>
              <p>Bachelor of Science in Information Technology, Kabankalan Catholic College, 2018</p>
            </dd>

            <dt class="col-sm-3">Work Experience</dt>
            <dd class="col-sm-9">
              <small class="color-teal">Algotrithm Computer Services, Kabankalan Branch, 2012-2014</small>
              <p>Computer Specialist</p>
              <small class="color-teal">Kabankalan Catholic College High School Department, 2018-Present</small>
              <p>ICT Instructor</p>
            </dd>  
          </dl>
          </dd>
          </dl>
          <hr class="border-info">
        </div>
      </section> 
      <section class="about skills">
        <div class="container">
          <h4 class="mb-4 color-cyan">Web Development Skills</h4>
          <div class="row">
            <div class="col-md">
              <dt class="">Front-end Development</dt>
              <ul class="ml-0 mt-2 pl-0">
                <li class="d-flex py-2 pr-2 font-weight-light"><i class="devicon-html5-plain-wordmark colored mr-2"></i> HTML</li>
                <li class="d-flex py-2 pr-2 font-weight-light"><i class="devicon-css3-plain colored mr-2"></i> CSS</li>
                <li class="d-flex py-2 pr-2 font-weight-light"><i class="devicon-javascript-plain colored mr-2"></i> Jquery</li>
                <li class="d-flex py-2 pr-2 font-weight-light"><i class="devicon-bootstrap-plain-wordmark colored mr-2"></i> Bootstrap</li>
                <li class="d-flex py-2 pr-2 font-weight-light"><i class="devicon-vuejs-plain colored mr-2"></i> Vue</li>
              </ul>
            </div>
            <div class="col-md">
              <dt class="">Back-end Development</dt>
              <ul class="ml-0 mt-2 pl-0">
                <li class="d-flex py-2 pr-2 font-weight-light"><i class="devicon-php-plain colored mr-2"></i> PHP</li>
                <li class="d-flex py-2 pr-2 font-weight-light"><i class="devicon-python-plain colored mr-2"></i> Python</li>
                <li class="d-flex py-2 pr-2 font-weight-light"><i class="devicon-nodejs-plain colored mr-2"></i> NodeJS</li>
                <!-- <li><i class="fa fa-sql"></i> SQL</li> -->
              </ul>
            </div> 
            <div class="col-md">
              <dt class="">Database Management</dt>
              <ul class="ml-0 mt-2 pl-0">
                <li class="d-flex py-2 pr-2 font-weight-light"><i class="devicon-mysql-plain colored mr-2"></i> MySQL</li>
                <li class="d-flex py-2 pr-2 font-weight-light"><i class="devicon-mongodb-plain colored mr-2"></i> MongoDB</li> 
                <li class="d-flex py-2 pr-2 font-weight-light"><i class="devicon-postgresql-plain colored mr-2"></i> PostgreSQL</li> 
              </ul>
            </div>
            <div class="col-md">
              <dt class="">Frameworks</dt>
              <ul class="ml-0 mt-2 pl-0">
                <li class="d-flex py-2 pr-2 font-weight-light"><i class="devicon-laravel-plain colored mr-2"></i> Laravel</li>
                <li class="d-flex py-2 pr-2 font-weight-light"><i class="devicon-wordpress-plain colored mr-2"></i> Wordpress</li>
                <li class="d-flex py-2 pr-2 font-weight-light"><i class="devicon-codeigniter-plain colored mr-2"></i> Codeigniter</li>
              </ul>
            </div>
          </div>
        </div>
      </section>
    </div>
    <?php require_once 'inc/footer.php'; ?>
    <?php require_once 'inc/scripts.php'; ?>
  </body>
</html>