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

    <title>DeshiEats_ShowAll_Page</title>

</head>

<body>

    <?php
        include "header.php";
    ?>

<div class="container">
    <div class="row">
        <div class="col-xl-12">
                    <table class="table table-bordered ordertable">
                        <thead>
                            <tr class="text-align-center">
                                <th scope="col" class="orderhead">chef Name</th>
                                <th scope="col" class="orderhead">chef Address</th>
                                <th scope="col" class="orderhead">Email</th>
                                <th scope="col" class="orderhead">Contact</th>
                                <th scope="col" class="orderhead">Remove</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr>
                                <td class='orderdatas'>Rahim</td>
                                <td class='orderdatas'>Dhanmondi</td>
                                <td class='orderdatas'>rahim@email.com</td>
                                <td class='orderdatas'>01694206920</td>
                                <td>
                                    <form action='ManageCart.php' method='POST'>
                                        <button name='Remove_Item' class='plusMinusButton'> REMOVE </button>
                                        <input type='hidden' name='Item_name' value='$value[Item_name]'>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
    </div>
</div>

    <?php
        include "footer.php";
    ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>