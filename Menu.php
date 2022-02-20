<?php
session_start();
include("connect.php");
include("functions.php");
if (isset($_SESSION["ID"])) {
  if($_SESSION["type"]=="customer"){
    $sql = "SELECT * FROM item";
    $results = mysqli_query($link, $sql);
  }else{
    ?>
  <script type="text/javascript">
    alert("Invalid User");
    window.location.href = "Chef'sExhibition.php"
  </script>
<?php
  }
} else {
?>
  <script type="text/javascript">
    alert("User needs to be logged In");
    window.location.href = "Login.php"
  </script>
<?php
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

  <link type="text/css" rel="stylesheet" href="css/DeStylesheet.css" />

  <title>Desh-eats_Menu_Page</title>

</head>

<body>
  <?php
  include "header.php";
  ?>

  <div class="contents">
    <div class="container">
      <div class="container">
        <div class="row mt-5">
          <div class="col-12 cheffownprof2">
            <div class="cheffdeatails ml-31">
              <p class="cheffproname">Menu
              <p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <?php
        while ($row = mysqli_fetch_assoc($results)) { ?>

          <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 menuall">
            <div class="Items">
            <a href="ProductPage.php?ProductID=<?php echo $row["ItemID"]?>" style="text-decoration: none;">
              <img src="<?php echo $row["ItemImage"] ?>">
              <div class="allthings">
                <p class="itemheading"><?php echo $row["ItemName"] ?></p>
                <p class="itemdes"><?php echo $row["ShortDescription"] ?></p>
                </a>
                <div class="add">
                  <p class="addalliconsp"><?php echo $row["Price"] ?>/=</p>
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

        <?php
        }
        ?>
        <!-- <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 menuall">
          <div class="Items">
            <img src="images/Menu/Food10.jpg">
            <div class="allthings">
              <p class="itemheading">Ham Burger
              <p>
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
              <p class="itemheading">Ham Burger
              <p>
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
              <p class="itemheading">Ham Burger
              <p>
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
        </div> -->

      </div>

    </div>
  </div>

  <?php
  include "footer.php";
  ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>