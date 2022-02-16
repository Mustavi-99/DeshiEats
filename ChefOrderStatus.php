<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&family=Mukta:wght@300;400;600;700;800&family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet">

    <link type="text/css" rel="stylesheet" href="css/DeStylesheet2.css" />


    <title>Desh-eats_ChefOrderStatus_Page</title>

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



        <div class="contents">    
            <div class="container userprofileform">

                <div class="row userprofileformrow">
                    <!--image container div-->

                    <div class="col-11 userprofiledit ">
                        <div class="userprofileheading mt-4">
                            <p class="userprofileheadinguser">#Name, Your Order status:</p>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <table class="table table-bordered ordertable">
                            <thead>
                                <tr class="text-align-center">
                                    <th scope="col" class="orderhead">Order No.</th>
                                    <th scope="col" class="orderhead">Item Name and Description</th>
                                    <th scope="col" class="orderhead">Base Price</th>
                                    <th scope="col" class="orderhead">Quantity</th>
                                    <th scope="col" class="orderhead">Pending Status</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <td class='orderdatas'>1</td>
                                    <td class='orderdatas'>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aspernatur, porro quibusdam. Doloribus cupiditate vitae similique numquam accusamus quam, odit est repudiandae itaque aliquid saepe amet iure deserunt harum odio beatae.</td>
                                    <td class='orderdatas'>12</td>
                                    <td class='orderdatas'>1</td>
                                    <td class='orderdatas'>Delivered</td>
                                </tr>
                                <tr>
                                    <td class='orderdatas'>2</td>
                                    <td class='orderdatas'>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aspernatur, porro quibusdam. Doloribus cupiditate vitae similique numquam accusamus quam, odit est repudiandae itaque aliquid saepe amet iure deserunt harum odio beatae.</td>
                                    <td class='orderdatas'>1</td>
                                    <td class='orderdatas'>10</td>
                                    <td class='orderdatas'>Pending</td>
                                </tr>
                                <tr>
                                    <td class='orderdatas'>2</td>
                                    <td class='orderdatas'>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aspernatur, porro quibusdam. Doloribus cupiditate vitae similique numquam accusamus quam, odit est repudiandae itaque aliquid saepe amet iure deserunt harum odio beatae.</td>
                                    <td class='orderdatas'>1</td>
                                    <td class='orderdatas'>10</td>
                                    <td class='orderdatas'>Received</td>
                                </tr>
                                <?php

                                //********Backend e help lagle php code rakhis naile delete korish********
                                if (isset($_SESSION['cart'])) {
                                    foreach ($_SESSION['cart'] as $key => $value) {
                                        $serial = $key + 1;

                                        //print_r($key);
                                        echo "
                                <tr>
                                <td class='orderdatas'></td>
                                <td class='orderdatas'></td>
                                <td class='orderdatas'></td>
                                <td class='orderdatas'></td>
                                <td class='orderdatas'></td>
                                </tr> 
                                ";
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    </form>
                </div>


            </div>
        </div>

    <!--</div>-->

    <div class="footer_wrapper bg-dark fit-content">
        <div class="container">
            <div class="row pt-3">
            <div class="col-md-4 text-center footerimg">
                    <img src="images/Login/deshi.png">
                </div>
                <div class="col-md-4 text-center">
                    <p>
                        <a class="footwrite" href="Index.php">Home</a>
                    </p>
                    <p>
                        <a class="footwrite" href="Menu.php">Menu</a>
                    </p>
                    <p>
                        <a class="footwrite" href="Register.php">Register</a>
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