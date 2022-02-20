<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!-- Bootstrap CSS -->
    

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

        <link type="text/css" rel="stylesheet" href="css/DeStylesheet.css"/>
        
        <title>Deshieats_Chef'sExhibition_Page</title>

    </head>

    <body>

      <?php
        include "header.php" ;
      ?>
      
          <div class="contents">

            <div class="container">
                <div class="row mt-5">
                    <div class="col-12 cheffownprof">
                        <img src="images/Menu/food2.jpg">
                          <div class="cheffdeatails ml-31">
                              <p class="cheffproname">Gerron Hurt<p>
                              <p class="cheffdes">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam perspiciatis doloribus o</p>
                              <button class="addmore">
                                <p class="pt-3 afi">+ Add more food items</p>
                              </button>
                            </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <p class="mt-2 chefna">I'm offering....</p>
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
                                                  <button class="minusplus" onclick="">
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

              <button class="delitem mb-4">
                <p class="pt-3 afi"> - Delete Item</p>
              </button>
  
            </div>
  
          </div>
        </div>


        <?php
          include "footer.php";
        ?>

          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>

</html>
