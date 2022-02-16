<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!-- Bootstrap CSS -->
    

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

        <link type="text/css" rel="stylesheet" href="css/DeStylesheet.css"/>
    
    
        <title>Desh-eats_Home_Page</title>

    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand disabled navlogo">
                  <img src="images/Login/deshi.png">
                </a>

                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                  <li class="nav-item">
                    <a class="nav-link navwrite" aria-current="page" href="Index.php">Home</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link navwrite" href="Menu.php">Menu</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link navwrite" href="#">Order</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link navwrite" href="Register.php">Register</a>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link navwrite" href="Login.php">Login</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link navwrite" href="#">About</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link navwrite" href="#">Contact Us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link navwrite" href="#">Devs Corner</a>
                  </li>
                </ul>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-shopping-cart icons ico"></i></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-user ico"></i></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-sign-out-alt ico"></i></a>
                      </li>
               </ul>
              </div>
            </div>
          </nav>

          <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/Slide/Slide3.jpg" class="d-block w-100 caroimg" alt="...">
                    <div class="container carousel-caption d-block d-md-block">
                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-8 slidedes">
                                <p class="Slidehead">What We provide??</p>
                                <p class="Slidepara">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, soluta blanditiis temporibus recusandae ab dignissimos earum accusamus perspiciatis ratione eveniet officia vero. Ut natus ad dolore consectetur. Explicabo, accusantium maxime?</p>
                                <div class=" viewmore ordernow">
                                    <p class="">ORDER NOW</p>
                                    <i class="fas fa-long-arrow-alt-right orderarrow"></i>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="carousel-item">
                <img src="images/Slide/Slide2.jpg" class="d-block w-100 caroimg" alt="...">
                <div class="container carousel-caption d-block d-md-block">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-8 slidedes">
                            <p class="Slidehead">WHY US??</p>
                            <p class="Slidepara">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, soluta blanditiis temporibus recusandae ab dignissimos earum accusamus perspiciatis ratione eveniet officia vero. Ut natus ad dolore consectetur. Explicabo, accusantium maxime?</p>
                            <div class="viewmore ordernow">
                                <p class="">ORDER NOW</p>
                                <i class="fas fa-long-arrow-alt-right orderarrow"></i>
                        </div>
                        </div>
                    </div>
                </div>
        </div>
        <div class="carousel-item">
            <img src="images/Slide/Slide1.jpg" class="d-block w-100 caroimg" alt="...">
            <div class="container carousel-caption d-block d-md-block">
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-8 slidedes">
                        <p class="Slidehead">Best Service at your doorstep...</p>
                        <p class="Slidepara">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, soluta blanditiis temporibus recusandae ab dignissimos earum accusamus perspiciatis ratione eveniet officia vero. Ut natus ad dolore consectetur. Explicabo, accusantium maxime?</p>
                        <div class=" viewmore ordernow">
                            <p class="">ORDER NOW</p>
                            <i class="fas fa-long-arrow-alt-right orderarrow"></i>
                    </div>
                    </div>
                </div>
            </div>
    </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          <div class="contents">
            
            <p class="food">Our Foods</p>

            <div class="container">
              <div class="row">
                  <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 menuall">
                      <div class="Items">
                          <img src="images/Menu/Mushroomburger1.jpg">
                              <div class="allthings">
                                      <p class="itemheading">Ham Burger<p>
                                      <p class="itemdes">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam perspiciatis doloribus o</p>
                                      <div class="add">
                                          <p class="addalliconsp">200.00/=</p>
                                              <div class="addall">
                                                <button class="minusplus">
                                                  <i class="addallicons fas fa-minus quantity"></i>
                                                </button>
                                                  <p class="addalliconsp">1</p>
                                                  <button class="minusplus">
                                                    <i class="addallicons fas fa-plus"></i>
                                                  </button>
                                              </div>
                                      </div>
                                      <button class="addtocart">
                                        <p class="">ADD TO CART</p>
                                        <i class="fas fa-shopping-cart"></i>
                                      </button>
                              </div>
                      </div>
                  </div>
                  <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 menuall">
                    <div class="Items">
                        <img src="images/Menu/Food10.jpg">
                            <div class="allthings">
                                    <p class="itemheading">Ham Burger<p>
                                    <p class="itemdes">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam perspiciatis doloribus o</p>
                                    <div class="add">
                                        <p class="addalliconsp">200.00/=</p>
                                            <div class="addall">
                                              <button class="minusplus">
                                                <i class="addallicons fas fa-minus quantity"></i>
                                              </button>
                                                <p class="addalliconsp">1</p>
                                                <button class="minusplus">
                                                  <i class="addallicons fas fa-plus"></i>
                                                </button>
                                            </div>
                                    </div>
                                    <button class="addtocart">
                                      <p class="">ADD TO CART</p>
                                      <i class="fas fa-shopping-cart"></i>
                                    </button>
                            </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 menuall">
                  <div class="Items">
                      <img src="images/Menu/Food12.jpg">
                          <div class="allthings">
                                  <p class="itemheading">Ham Burger<p>
                                  <p class="itemdes">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam perspiciatis doloribus o</p>
                                  <div class="add">
                                      <p class="addalliconsp">200.00/=</p>
                                          <div class="addall">
                                            <button class="minusplus">
                                              <i class="addallicons fas fa-minus quantity"></i>
                                            </button>
                                              <p class="addalliconsp">1</p>
                                              <button class="minusplus">
                                                <i class="addallicons fas fa-plus"></i>
                                              </button>
                                          </div>
                                  </div>
                                  <button class="addtocart">
                                    <p class="">ADD TO CART</p>
                                    <i class="fas fa-shopping-cart"></i>
                                  </button>
                          </div>
                  </div>
              </div>
              <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 menuall">
                <div class="Items">
                    <img src="images/Menu/food2.jpg">
                        <div class="allthings">
                                <p class="itemheading">Ham Burger<p>
                                <p class="itemdes">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam perspiciatis doloribus o</p>
                                <div class="add">
                                    <p class="addalliconsp">200.00/=</p>
                                        <div class="addall">
                                          <button class="minusplus">
                                            <i class="addallicons fas fa-minus quantity"></i>
                                          </button>
                                            <p class="addalliconsp">1</p>
                                            <button class="minusplus">
                                              <i class="addallicons fas fa-plus"></i>
                                            </button>
                                        </div>
                                </div>
                                <button class="addtocart">
                                  <p class="">ADD TO CART</p>
                                  <i class="fas fa-shopping-cart"></i>
                                </button>
                        </div>
                </div>
            </div>

              <button class="viewmore">
                   <p class="">VIEW MORE</p>
                  <i class="fas fa-long-arrow-alt-right arrow"></i>
              </button>

          </div>

          <div class="container">

            <p class="food mb-5">Our expert cheffs</p>

            <div class="row">
              <div class=" col-sm-6 col-md-6 col-lg-4 col-xl-4 cheffall">
                <img src="images/Menu/food2.jpg">
                  <div class="cheffdeatails ml-31">
                      <p class="cheffname">Gerron Hurt<p>
                      <p class="cheffdes">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam perspiciatis doloribus o</p>
                      <button class="visitmenu">
                        <p>Visit Menu-></p>
                      </button>
                  </div>
               </div>
  
               <div class=" col-sm-6 col-md-6 col-lg-4 col-xl-4 cheffall">
                <img src="images/Menu/food2.jpg">
                  <div class="cheffdeatails ml-31">
                      <p class="cheffname">Courtney Lapresi<p>
                      <p class="cheffdes">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam perspiciatis doloribus o</p>
                      <button class="visitmenu">
                        <p>Visit Menu-></p>
                      </button>
                  </div>
               </div>
  
               <div class=" col-sm-6 col-md-6 col-lg-4 col-xl-4 cheffall">
                <img src="images/Menu/food2.jpg">
                  <div class="cheffdeatails ml-31">
                      <p class="cheffname">Gerron Hurt<p>
                      <p class="cheffdes">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam perspiciatis doloribus o</p>
                      <button class="visitmenu">
                        <p>Visit Menu-></p>
                      </button>
                  </div>
               </div>
            </div>

          </div>

          <div class="container">
            <p class="food mt-5">What our customers say !!!!!</p>
              <div class="row">
                  <div class="col-xl-4">
                      <div class="Reviewitems">
                          <img src="images/Menu/Food12.jpg" class="rounded-circle">
                          <p class="Reviewitemsname">Suzana</p>
                          <p class="Reviewitemsdes">"Burger khamu..."</p>
                      </div>
                  </div>
                  <div class="col-xl-4">
                      <div class="Reviewitems">
                          <img src="images/Menu/Food10.jpg" class="rounded-circle">
                          <p class="Reviewitemsname">Sanjay Mondol</p>
                          <p class="Reviewitemsdes">"Halar putera bal banay amrrrr......."</p>
                      </div>
                  </div>
                  <div class="col-xl-4">
                      <div class="Reviewitems">
                          <img src="images/Menu/Food9.jpeg" class="rounded-circle">
                          <p class="Reviewitemsname">Sanjay Mondol</p>
                          <p class="Reviewitemsdes">"Halar putera bal banay amrrrr......."</p>
                      </div>
                  </div>
              </div>
          </div>

        </div>
        
          <div class="footer_wrapper bg-dark fit-content">
            <div class="container">
              <div class="row pt-3">
                <div class="col-md-4 text-center footerimg">
                    <img src="images/Login/deshi.png">
                </div>
                <div class="col-md-4 text-center">
                  <p>
                    <a class="footwrite" href="Index.html">Home</a>
                  </p>
                  <p>
                    <a class="footwrite" href="Menu.html">Menu</a>
                  </p>
                  <p>
                    <a class="footwrite" href="Register.html">Register</a>
                  </p>
                  <p>
                    <a class="footwrite" href="#">Order</a>
                  </p>
                  <p>
                    <a class="footwrite" href="#">About</a>
                  </p>
                  <p>
                    <a class="footwrite" href="#">Devs Corner</a>
                  </p>
                  <p>
                    <a class="footwrite" href="#">Contact Us</a>
                  </p>
                </div>
                <div class="col-md-4 text-center">
                  <p>
                    <a href="#"><i class="fab fa-facebook footicons"></i></a>
                  </p>
                  <p>
                    <a href="#"><i class="fab fa-instagram-square footicons"></i></a>
                  </p>
                  <p>
                    <a href="#"><i class="fab fa-linkedin-in footicons"></i></a>
                  </p>
                  <p>
                    <a href="#"><i class="fab fa-twitter footicons"></i></a>
                  </p>
                </div>
              </div>
              <div class="row">
                <p class="text-center last">@ALL RIGHTS RESERVED BY TEAM OPTIMIST...</p>
              </div>
            </div>
          </div>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>

</html>