<?php
session_start();

include("connect.php");
include("functions.php");

$result=getMessages($link);
$topCustResult=getTopCustomers($link);
$topChefResult=getTopChef($link);

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    $msgID=$_POST['Item_name'];
    
    if(removeMessages($link,$msgID)){
        
        ?>
        <script type="text/javascript">
          alert("Message Removed.");
          window.location.href='AdminPanel.php'
        </script>
        <?php
    
    }else{
        ?>
        <script type="text/javascript">
          alert("Error!Message not removed check the remove function");
          window.location.href='AdminPanel.php'
        </script>
        <?php
    }
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
    <link type="text/css" rel="stylesheet" href="css/DeStylesheet2.css" />

    <title>Deshieats_Admin_Panel_Page</title>

</head>

<body>
    <?php
    include "header.php";
    ?>

    <div class="Div3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left">
                    <div class="title">
                        <h1 id="t1">Admin Panel</h1>
                    </div>
                </div>

                <div class="col-md text-center" id="Grid1">
                    <img class="icon1 rounded-circle" src="images/Admin/customerIcon.png">
                    <h5 id="t2">#Number</h5>
                    <p id="t2">Customers</p>
                </div>


                <div class="col-md text-center" id="Grid1">
                    <img class="icon1 rounded-circle" src="images/Admin/orderIcon.png">
                    <h5 id="t2">#Number</h5>
                    <p id="t2">Total Orders</p>
                </div>


                <div class="col-md text-center" id="Grid1">
                    <img class="icon1 rounded-circle" src="images/Admin/revIcon.png">
                    <h5 id="t2">#rev</h5>
                    <p id="t2">Net Revenue</p>
                </div>

                <div class="col-md-12 text-left">
                    <div class="title2">
                        <h2 id="t2">Top chefs</h2>
                    </div>
                </div>

                <div class="col-xl-12">
                    <table class="table table-bordered ordertable">
                        <thead>
                            <tr class="text-align-center">
                                <th scope="col" class="orderhead">Chef ID</th>
                                <th scope="col" class="orderhead">Chef Name</th>
                                <th scope="col" class="orderhead">Chef Address</th>
                                <th scope="col" class="orderhead">Email</th>
                                <th scope="col" class="orderhead">Contact</th>
                                <th scope="col" class="orderhead">Remove</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <?php 
                                while($rowItem = mysqli_fetch_assoc($topChefResult)){ 
                            ?>
                            <tr>
                                <td class='orderdatas'>1</td>
                                <td class='orderdatas'>Rahim</td>
                                <td class='orderdatas'>Dhanmondi</td>
                                <td class='orderdatas'>rahim@email.com</td>
                                <td class='orderdatas'>01694206920</td>
                                <td>
                                    <form action='ManageCart.php' method='POST'>
                                        <button name='Remove_Item' class='plusMinusButton'> Deactivate </button>
                                        <input type='hidden' name='Item_name' value='$value[Item_name]'>
                                    </form>
                                </td>
                            </tr>
                            <?php 
                            }
                            ?>
                            <!--<tr>
                                <td class='orderdatas'>2</td>
                                <td class='orderdatas'>Karim</td>
                                <td class='orderdatas'>backend</td>
                                <td class='orderdatas'>backend</td>
                                <td class='orderdatas'>backend</td>
                                <td>
                                    <form action='ManageCart.php' method='POST'>
                                        <button name='Remove_Item' class='plusMinusButton'> REMOVE </button>
                                        <input type='hidden' name='Item_name' value='$value[Item_name]'>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td class='orderdatas'>3</td>
                                <td class='orderdatas'>backend</td>
                                <td class='orderdatas'>backend</td>
                                <td class='orderdatas'>backend</td>
                                <td class='orderdatas'>backend</td>
                                <td>
                                    <form action='ManageCart.php' method='POST'>
                                        <button name='Remove_Item' class='plusMinusButton'> REMOVE </button>
                                        <input type='hidden' name='Item_name' value='$value[Item_name]'>
                                    </form>
                                </td>
                            </tr>-->
                        </tbody>
                    </table>
                    <div class="col-xl-3">
                        <a style="text-decoration:none" href="ShowAll.php?category=Chef">
                            <p id="t2">See more>></p>
                        </a>
                    </div>
                </div>




                <div class="col-md-12 text-left">
                    <div class="title2">
                        <h2 id="t2">Top Customers</h2>
                    </div>
                </div>

                <div class="col-xl-12">
                    <table class="table table-bordered ordertable">
                        <thead>
                            <tr class="text-align-center">
                                <th scope="col" class="orderhead">Customer ID</th>
                                <th scope="col" class="orderhead">Customer Name</th>
                                <th scope="col" class="orderhead">Customer Address</th>
                                <th scope="col" class="orderhead">Email</th>
                                <th scope="col" class="orderhead">Contact</th>
                                <th scope="col" class="orderhead">Remove</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <?php 
                                while($rowItem = mysqli_fetch_assoc($topCustResult)){ 
                            ?>
                            <tr>
                                <td class='orderdatas'><?php echo $rowItem['CustID']; ?></td>
                                <td class='orderdatas'><?php echo $rowItem['CustName']; ?></td>
                                <td class='orderdatas'><?php echo $rowItem['CustAddress']; ?></td>
                                <td class='orderdatas'><?php echo $rowItem['CustEmail']; ?></td>
                                <td class='orderdatas'><?php echo $rowItem['CustContactNumber']; ?></td>
                                <td>
                                    <form action='ManageCart.php' method='POST'>
                                        <button name='Remove_Item' class='plusMinusButton'> Deactivate </button>
                                        <input type='hidden' name='Item_name' value='$value[Item_name]'>
                                    </form>
                                </td>
                            </tr>
                            <?php 
                            }
                            ?>
                            
                        </tbody>
                    </table>
                    <div class="col-xl-3">
                        <a style="text-decoration:none" href="ShowAll.php?category=Customer">
                            <p id="t2">See more>></p>
                        </a>
                    </div>
                </div>

                <div class="col-md-12 text-left">
                    <div class="title2">
                        <h2 id="t2">Customer Complains</h2>
                    </div>
                </div>

                <div class="col-xl-12">
                    <table class="table table-bordered ordertable">
                        <thead>
                            <tr class="text-align-center">
                                <th scope="col" class="orderhead">Message ID</th>
                                <th scope="col" class="orderhead">Customer Name</th>
                                <th scope="col" class="orderhead">Message</th>
                                <th scope="col" class="orderhead">Remove</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <?php 
                            while($rowItem = mysqli_fetch_assoc($result)){
                            ?>
                            <tr>
                                <td class='orderdatas' ><?php echo $rowItem['ContactID']; ?></td>
                                <td class='orderdatas' ><?php echo $rowItem['ContactName']; ?></td>
                                <td class='orderdatas' ><?php echo $rowItem['ContactMessage']; ?></td>
                                <td>
                                    <form action='' method='POST'>
                                        <button name='Remove_Item' class='plusMinusButton' type='submit' > REMOVE </button>
                                        <input type='hidden' name='Item_name' value="<?php echo $rowItem['ContactID'] ?>" >
                                    </form>
                                </td>
                            </tr>
                            <?php 
                            } 
                            ?>
                            <!--<tr>
                                <td class='orderdatas'>2</td>
                                <td class='orderdatas'>Karim</td>
                                <td class='orderdatas'>backend</td>
                                <td>
                                    <form action='ManageCart.php' method='POST'>
                                        <button name='Remove_Item' class='plusMinusButton'> REMOVE </button>
                                        <input type='hidden' name='Item_name' value='$value[Item_name]'>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td class='orderdatas'>3</td>
                                <td class='orderdatas'>backend</td>
                                <td class='orderdatas'>backend</td>
                                <td>
                                    <form action='ManageCart.php' method='POST'>
                                        <button name='Remove_Item' class='plusMinusButton'> REMOVE </button>
                                        <input type='hidden' name='Item_name' value='$value[Item_name]'>
                                    </form>
                                </td>
                            </tr>-->

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <?php
    include "footer.php";
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>