<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!-- Bootstrap CSS -->
    

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

        <link type="text/css" rel="stylesheet" href="css/DeStylesheet.css"/>
    
    
        <title>Deshi-eats_Product_Page</title>

    </head>

    <body>

    <?php
      include "header.php" ;
    ?>
            <div class="container">
                <div class="row m-5 simbg p-2">
                    <div class="col-lg-5 .col-md-5 .col-sm-5 .col-xs-12 productimg">
                        <img src="images/Menu/Food12.jpg">
                    </div>
                    <div class="col-lg-7 .col-md-7 .col-sm-7 .col-sm-12">
                        <div class="m-2 pt-4">
                            <p class="itemheading allpwrite">Product Name</p>
                            <p class="itemdes allpwrite">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo repellendus nihil necessitatibus eius illo reiciendis aliquid voluptatem doloremque rerum modi impedit dolorum omnis, quia ea numquam officia cupiditate nostrum aspernatur.</p>
                            <p class="addalliconsp allpwrite">Product Price</p>
                            <p class="prepared allpwrite">Prepared by ChefName</p>
                            <div class="ppall">
                                <p class="quan allpwrite addalliconsp">Quantity</p>
                                <button class="minusplus">
                                  <i class="addallicons fas fa-minus quantity"></i>
                                </button>
                                  <p class="addalliconsp">1</p>
                                  <button class="minusplus">
                                    <i class="addallicons fas fa-plus"></i>
                                  </button>
                              </div>
                              <button class="addtocart">
                                <p class="">ADD TO CART</p>
                                <i class="fas fa-shopping-cart"></i>
                              </button>
                        </div>
                    </div>
                </div>
            </div>

            <?php
              include "footer.php" ;
            ?>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>

</html>