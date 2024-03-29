<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>


  <!-- All CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-dark bg-opacity-50 fixed-top mt-3 mx-3 rounded-pill ">
    <div class="container">
      <a class="navbar-brand" href="#"><span class="text-warning">Bi</span><span class="text-white">Trix</span></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#portfolio">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#team">Team</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>



  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <!-- <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button> -->
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/computer.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption">
          <h5>Chino Computer Parts <br>&<br> Diskless Setup</h5>
          <!-- <P>Let's Build UP your Computer Cafe and Setup Server's and Client's for better experience and management of your Business</P> -->
          <P>We Deliver PC Sets and PC Parts plus Package of Diskless Setup and Cabling</P>
          <br>
          <p>We cater Extensive <strong>I-Cafe's</strong> and <strong>Office's</strong> Setup</p>
          <br>
          <p><a href="#about" class="btn btn-outline-warning mt-3 text-decoration-none">Scroll Down</a></p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/web.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption">
          <h5>Web Development Service</h5>
          <p>Have your own website and manage your Business</p>
          <p><a href="#about" class="btn btn-outline-warning mt-3 text-decoration-none">Scroll Down</a></p>
        </div>
      </div>

      <div class="carousel-item">
        <img src="img/repair.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption">
          <h5>Repair Services</h5>
          <p>Let's Fix your <strong>Computer Laptop and Phone's</strong> click the button below</p>
          <p><a href="#about" class="btn btn-outline-warning mt-3 text-decoration-none">Scroll Down</a></p>
        </div>
      </div>

      <!-- <div class="carousel-item">
        <img src="img/Avon.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption">
          <h5>Avon Products</h5>
          <p>Certified Distributor Avon product click the button below</p>
          <p><a href="#" class="btn btn-outline-warning mt-3">Learn More</a></p>
        </div>
      </div>

      <div class="carousel-item">
        <img src="img/selling.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption">
          <h5>Mariecar Clothing</h5>
          <p>We Sell all kinds of Clothing to see more click the button below</p>
          <p><a href="#" class="btn btn-outline-warning mt-3">Learn More</a></p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/mayangstore.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption">
          <h5>Alvarez Subcon</h5>
          <p>Accepting Subcon</p>
          <p><a href="#" class="btn btn-outline-warning mt-3">Learn More</a></p>
        </div>
      </div> -->
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <!-- about section starts -->
  <section id="about" class="about section-padding">
    <div class="container">
      <div class="row d-flex justify-content-center pb-5" style="background: #D6E4E5;">
        <div class="col-lg-4 col-md-12 col-12">
          <div class="about-img">
            <img src="img/satisfaction.svg" alt="" class="img-fluid rounded" style="height: 350px;" width="100%">
          </div>
        </div>
        <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
          <div class="about-text">
            <h2>Ensuring will Provide the Best Quality <br />Services</h2>
            <p>Making sure you and your staff are knowledgeable about the products you sell. Being available for customer questions and responding promptly (even if it's negative feedback) Doing what you can to go above and beyond and make customers happy and feel special.</p>
            <a href="#services" class="btn btn-warning">Learn More</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- about section Ends -->


  <!-- services section Starts -->
  <section class="services section-padding" id="services">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-header text-center pb-3">
            <h2>Our Services</h2>
            <p>Looks so Good on the Outside, It'll Make You Feel Good Inside.</p>
            <!-- <p>We give the Best. We Receive the best. Our customer is the hero of our Business. Expect Perfection.</p> -->
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-12 col-lg-4 mb-3">
          <div class="card text-dark text-center bg-transparent pb-2 shadow">
            <div class="card-body">
              <i class="bi bi-pc-display"></i>
              <h3 class="card-title">Diskless Setup</h3>
              <p class="lead">A computer system without hard drives. Instead, each computer uses network-attached storage drives on a server to store data.</p>
              <button class="btn btn-outline-secondary"><a href="#portfolio" class="text-decoration-none">Read More</a></button>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-12 col-lg-4 mb-3">
          <div class="card text-dark text-center bg-transparent pb-2 shadow">
            <div class="card-body">
              <i class="bi bi-laptop"></i>
              <h3 class="card-title">Web Development Service</h3>
              <p class="lead">Building and maintenance of websites; it's the work that happens behind the scenes to make a website look great.</p>
              <button class="btn btn-outline-secondary"><a href="#portfolio" class="text-decoration-none">Read More</a></button>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-12 col-lg-4 mb-3">
          <div class="card text-dark text-center bg-transparent pb-2 shadow">
            <div class="card-body">
              <i class="bi bi-tools"></i>
              <h3 class="card-title">Repair Service</h3>
              <p class="lead">Restoration of Equipment to its original function on an as-needed basis, as may be required by the Facility.</p>
              <button class="btn btn-outline-secondary"><a href="#portfolio" class="text-decoration-none">Read More</a></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- services section Ends -->


  <!-- portfolio strats -->
  <section id="portfolio" class="portfolio section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-header text-center pb-3">
            <h2>Our Projects</h2>
            <p>Delivering all your needs ontime</p>
          </div>
        </div>
      </div>
      <div class="row d-flex justify-content-center">
        <div class="col-12 col-md-12 col-lg-3 mb-3">
          <div class="card text-light text-center bg-white pb-2">
            <div class="card-body text-dark">
              <div class="img-area mb-4">
                <img src="img/computer-server.jpg" class="img-fluid" alt="" style="height: 200px;">
              </div>
              <h3 class="card-title">Diskless Blog</h3>
              <p class="lead">Crack Software & I-Cafe | CC-Boot and Office Setup </p>
              <button class="btn bg-warning text-dark" data-bs-toggle="modal" data-bs-target="#DisklessBlog">Learn More</button>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-12 col-lg-3 mb-3">
          <div class="card text-light text-center bg-white pb-2">
            <div class="card-body text-dark">
              <div class="img-area mb-4">
                <img src="img/manOnTable.svg" class="img-fluid" alt="" style="height: 200px;">
              </div>
              <h3 class="card-title">Web Blog</h3>
              <p class="lead">Web and Mobile Development and Blog </p>
              <button class="btn bg-warning text-dark" data-bs-toggle="modal" data-bs-target="#WebBlog">Learn More</button>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-12 col-lg-3 mb-3">
          <div class="card text-light text-center bg-white pb-2">
            <div class="card-body text-dark">
              <div class="img-area mb-4">
                <img src="img/computer-repair.avif" class="img-fluid" alt="" style="height: 200px;">
              </div>
              <h3 class="card-title">Repair Blog</h3>
              <p class="lead">Computer Laptop and Phone Repair Services</p>
              <button class="btn bg-warning text-dark" data-bs-toggle="modal" data-bs-target="#RepairBlog">learn More</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- portfolio ends -->


  <!-- team starts -->
  <section class="team section-padding" id="team">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-header text-center pb-3">
            <h2>Our Team</h2>
            <p>Lorem ipsum dolor sit amet, consectetur <br>adipisicing elit. Non, quo.</p>
          </div>
        </div>
      </div>
      <div class="row d-flex justify-content-center">
        <div class="col-12 col-md-6 col-xl-3 mb-3">
          <div class="card text-center">
            <div class="card-body">
              <img src="img/brix.jpg" alt="" class="img-fluid rounded-circle">
              <h3 class="card-title py-2">Brix Darlucio</h3>
              <p class="card-text">A Extensive level experience and knowledge in Troubleshooting hardware and software issue and able to build your Computer Cafe or Call center Server and Clients</p>


              <p class="socials">
                <a href="https://www.facebook.com/profile.php?id=100080027782522"><i class="bi bi-facebook text-dark mx-1"></i></a>
                <a href="https://www.messenger.com/t/100080027782522"><i class="bi bi-messenger text-dark mx-1"></i></a>
              </p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-xl-3 mb-3">
          <div class="card text-center">
            <div class="card-body">
              <img src="img/me.jpg" alt="" class="img-fluid rounded-circle">
              <h3 class="card-title py-2">Trix Darlucio</h3>
              <p class="card-text">A Full Stack Software Developer having an experience of building Web and Mobile application with JavaScript /
                Reactjs /React Native and other libraries & frameworks.</p>
              <p class="socials">
                <a href="https://www.facebook.com/profile.php?id=100085677631685"><i class="bi bi-facebook text-dark mx-1"></i></a>
                <a href="https://www.messenger.com/t/100085677631685"><i class="bi bi-messenger text-dark mx-1"></i></a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- team ends -->


  <!-- Contact starts -->
  <section id="contact" class="contact section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-header text-center pb-3">
            <h2>Contact Us</h2>
            <p>Lorem ipsum dolor sit amet, consectetur <br>adipisicing elit. Non, quo.</p>
          </div>
        </div>
      </div>
      <div class="row m-0">
        <div class="col-md-12 p-0 pt-4 pb-4">
          <form action="#" class="p-4 m-auto rounded-3">
            <div class="row container">
              <div class="col-md-12">
                <div class="mb-3">
                  <input class="form-control" placeholder="Full Name" required="" type="text">
                </div>
              </div>
              <div class="col-md-12">
                <div class="mb-3">
                  <input class="form-control" placeholder="Email" required="" type="email">
                </div>
              </div>
              <div class="col-md-12">
                <div class="mb-3">
                  <textarea class="form-control" placeholder="Message" required="" rows="3"></textarea>
                </div>
              </div>
              <div class="text-center">
                <button class="btn btn-warning w-50 btn-lg btn-block mt-3" type="button">Send Now</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- contact ends -->


  <!-- footer starts -->
  <footer align="center" class="  px-3 mb-3">
    <div class="card bg-transparent">
      <h5 class="card-header"><strong>Featured</strong></h5>
      <div class="card-body">
        <a href="#" class="text-decoration-none text-dark h5"><span class="text-warning ">Bi&nbsp;</span>Trix | Made with &#10084;&#65039; by XirTech</a>
      </div>
    </div>

  </footer>
  <!-- footer ends -->


  <?php
  include "assets/DisklessBlog.php";
  include "assets/RepairBlog.php";
  include "assets/WebBlog.php";
  ?>


  <!-- All Js -->
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/script.js"></script>
</body>

</html>