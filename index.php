<?php 
include ('connect.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/aos.css">
    <link rel="stylesheet" href="./assets/css/line-awesome.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body data-bs-spy="scroll" data-bs-target=".navbar">
    <!--navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container flex-lg-column">
          <a class="navbar-brand mx-lg-auto mb-lg-4" href="#">
            <span class="h3 fw-bold d-block d-lg-none">Lesego Molefe</span>
            <img src="./assets/images/lesego.jpeg" class="d-none d-lg-block rounded" alt="">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto flex-lg-column text-lg-center">
              
              <li class="nav-item">
                <a class="nav-link" href="#home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#services">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#work">Work</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#Links">Links</a>
              </li>
              
              

             
             
            </ul>
          </div>
        </div>
      </nav>
      <!--//navbar-->

      <!--content wrapper-->
      <div id="content-wrapper">
        <!--home-->
        <section id="home" class="full-height px-lg-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10">
                        <h1 class="display-4 fw-bold" >I'M A <span class="text-brand"></span>LESEGO MOLEFE SOFTWARE DEVELOPER </h1>
                        <p class="lead mt-2 mb-4">Iam Lesego Molefe, And i craft high perfoming and delightful experiences tailored and conversion-focused</p>
                        <p class="lead mt-2 mb-4"> i'm more profient in more programming languages such as python,javascript,html,css, php and mysql..I have a deep understanstanding of the syntax,fatures and best practices associated with these languages

                        As a developer i possess strong analytical and problem-solving skills. i can break down complex problem into smaller, maneagable tasks and design effective spl_autoload_functions

                        I specialized in web development 
                        </p>
                        <a href="#work" class="btn btn-brand me-3">Explore My Work</a>
                        <a href="#" class="link-custom">Call : +27 62495 9771</a>

                    </div>
                </div>
            </div>
        </section>
        <!--//home-->

        <!--sevices-->
        <section id="services" class="full-height px-lg-5">
            <div class="container">
                <div class="row pb-4">
                    <div class="col-lg-8">
                        <h6 class="text-brand">SERVICES</h6>
                        <h1>Services That I Provide</h1>

                    </div>

                </div>
              <div class="row gy-4">
                    <div class="col-md-4">
                        <div class="service p-4 bg-base rounded-4 shadow-effect">
                            <div class="iconbox rounded-4">
                                <i class="las la-feather"></i>
                            </div>
                            <h4 class="mt-4 mb-2">UX Desing</h4>
                            <p>I craft high perfoming and delightful experiences tailored and conversion-focused</p>
                            <a href="#" class="link-custom">Read More</a>
                        </div>
                     </div>

                

                    <div class="col-md-4">
                      <div class="service p-4 bg-base rounded-4 shadow-effect">
                          <div class="iconbox rounded-4">
                              <i class="las la-pencil-ruler"></i>
                          </div>
                          <h4 class="mt-4 mb-2">Coding</h4>
                          <p>I craft high perfoming and delightful experiences tailored and conversion-focused</p>
                          <a href="#" class="link-custom">Read More</a>

                      </div>

                  </div>

                  <div class="col-md-4">
                    <div class="service p-4 bg-base rounded-4 shadow-effect">
                        <div class="iconbox rounded-4">
                            <i class="las la-laptop-code"></i>
                        </div>
                        <h4 class="mt-4 mb-2">Web Desinging</h4>
                        <p>I craft high perfoming and delightful experiences tailored and conversion-focused</p>
                        <a href="#" class="link-custom">Read More</a>

                    </div>

                </div>

              </div>

            </div>

        </section>
        <!--services-->

        <!--work-->
        <section id="work" class="full-height px-lg-5">
          <div class="container">
            <div class="row pb-4">
              <div class="col-lg-8">
                <h6 class="text-brand">WORK</h6>
                <h1>My Recent Projects</h1>

              </div>
            </div>
            <div class="row gy-4">
              <div class="col-md-6">
                <div class="card-custom rounded-4 bg-base shadow-effect">
                  <div class="card-custom-image rounded-4">
                    <img src="./assets/images/sofware.jpg" alt="">

                  </div>
                  <div class="card-custom-content p-4">
                    <h4>Sartup Landing Page</h4>
                    <p>Innovation that exceeds expectations. Astra is a template equiped with all the elements you could ever need to put together</p>
                    <a href="#" class="link-custom">Read More</a>

                  </div>

                </div>

              </div>

              <div class="col-md-6">
                <div class="card-custom rounded-4 bg-base shadow-effect">
                  <div class="card-custom-image rounded-4">
                    <img src="./assets/images/information-tech.jpg" alt="">

                  </div>
                  <div class="card-custom-content p-4">
                    <h4>Sartup Landing Page</h4>
                    <p>Innovation that exceeds expectations. Astra is a template equiped with all the elements you could ever need to put together</p>
                    <a href="#" class="link-custom">Read More</a>

                  </div>

                </div>

              </div>

              <div class="col-md-6">
                <div class="card-custom rounded-4 bg-base shadow-effect">
                  <div class="card-custom-image rounded-4">
                    <img src="./assets/images/technology-news.jpg" alt="">

                  </div>
                  <div class="card-custom-content p-4">
                    <h4>Sartup Landing Page</h4>
                    <p>Innovation that exceeds expectations. Astra is a template equiped with all the elements you could ever need to put together</p>
                    <a href="#" class="link-custom">Read More</a>

                  </div>

                </div>

              </div>

              <div class="col-md-6">
                <div class="card-custom rounded-4 bg-base shadow-effect">
                  <div class="card-custom-image rounded-4">
                    <img src="./assets/images/th.jpg" alt="">

                  </div>
                  <div class="card-custom-content p-4">
                    <h4>Sartup Landing Page</h4>
                    <p>Innovation that exceeds expectations. Astra is a template equiped with all the elements you could ever need to put together</p>
                    <a href="#" class="link-custom">Read More</a>

                  </div>

                </div>

              </div>

            </div>

          </div>

        </section>
        <!--//work-->


        <!--about-->
        <section id="about" class="full-height px-lg-5">
          <div class="container">
            <div class="row pb-4">
              <div class="col-lg-8">
                <h6 class="text-brand">ABOUT</h6>
                <h1>My Education & Experience</h1>

              </div>

            </div>
            <div class="row gy-5">
              <div class="col-lg-6">
                <h4 class="mb-4">Education</h4>
                <div class="row gy-4">

                  <div class="col-12">
                    <div class="bg-base p-4 rounded-4 shadow-effect">
                      <h4>Diploma in Software Development</h4>
                      <p class="text-brand mb-2">Tshwane University Of Technology (2019-2022)</p>
                      <p class="mb-0">Software is the process of conceiving,specifying,Desinging,programming,documenting,testing and bug fixing 
                        involved in creating and maintaining applications,frameworks and other software components
                      </p>

                    </div>
                  </div>

                  <div class="col-12">
                    <div class="bg-base p-4 rounded-4 shadow-effect">
                      <h4>Matric</h4>
                      <p class="text-brand mb-2">Phagameng High (2010-2014)</p>
                      <p class="mb-0">Matriculation is formal the process of entering a University or of becoming eligible to enter by
                        fullfilling certain academic requirements..
                      </p>

                    </div>
                  </div>

                </div>

              </div>
              <div class="col-lg-6">

                <h4 class="mb-4">Experience</h4>
                <div class="row gy-4">

                  <div class="col-12">
                    <div class="bg-base p-4 rounded-4 shadow-effect">
                      <h4>Software Developer</h4>
                      <p class="text-brand mb-2">Makwa-IT (2022-2023)</p>
                      <p class="mb-0">I create and develop webpages using HTML,CSS,PHP and JAVASCRIPT.
                        i use these programming languages to create webpages that are visually appealing and easy to
                        to use.I work closely with backend developers to ensure that a an application/system is intuitive,easy to use and optimized for performance
                      </p>

                    </div>
                  </div>

                  <div class="col-12">
                    <div class="bg-base p-4 rounded-4 shadow-effect">
                      <h4>StockTaker</h4>
                      <p class="text-brand mb-2">Edcon (2019-2019)</p>
                      <p class="mb-0">i was manually checking and record all the inventory that the business has currently has on hand </p>

                    </div>
                  </div>

                </div>


              </div>

            </div>

          </div>

        </section>

      
        <!--LINKS-->

       <!--contact-->

          <section id="contact" class="full-height px-lg-5">
            <div class="container">
              <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                  <h6 class="text-brand">CONTACT</h6>
                  <h1>Interested in working together: Let's talk</h1>
                </div>
                <div class="col-lg-8">
                  <form action="connect.php" method="post" class="row g-lg-3 gy-3">
                    <div class="form-group col-md-6">
                      <input type="text" name="fullname" class="form-control" placeholder="Enter your name" required>
                    </div>
                    <div class="form-group col-md-6">
                      <input type="text" name="email" class="form-control" placeholder="Enter your email" required>
                    </div>
                    <div class="form-group col-12">
                      <input type="text" name="subject" class="form-control" placeholder="Enter subject" required>
                    </div>
                    <div class="form-group col-12 d-grid">
                      <textarea name="message"  rows="4" class="form-group" placeholder="Enter your message"></textarea>
                    </div>
                    <div class="form-group col-12 d-grid">
                    <button type="submit" name="submit" class="btn btn-brand">Contact me</button>
                    </div>
                  
                  </form>

                </div>

              </div>
              

            </div>

          </section>
          <!--//contact-->

          <!--footer-->

          <section id="links" class="full-height px-lg-5">
            <footer class="py-5 px-lg-5">
            <div class="container">
            <h6 class="text-brand">LINKS</h6>
              <div class="row gy-4 justify-content-between">
                <div class="col-auto">
                  <p class="mb-0">Copyright text goes here</p>

                </div>
                <div class="col-auto">
                  <div class="social-icons">
                    <a href="https://twitter.com/miles79460893?s=09"><i class="lab la-twitter"></i></a>
                    <a href="https://www.linkedin.com/in/lesego-molefe-77b448227"><i class="lab la-linkedin"></i></a>
                    <a href="https://github.com/lesegomolefe"><i class="lab la-github"></i></a>
                    <a href="#"><i class="lab la-instagram"></i></a>
                    <a href="" download>Download CV</a>
                 

                  </div>

                </div>

              </div>

            </div>

          </footer>
          </section>
          
      </div>
          

       <!--//content wrapper-->
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/aos.js"></script>
    <script src="./assets/js/main.js"></script>
</body>
</html>