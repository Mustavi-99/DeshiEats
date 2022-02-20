<?php
session_start();
include("connect.php");
if(isset($_SESSION["ID"])){
  if($_SESSION["type"]=="chef"){
    ?>
      <script type="text/javascript">
        alert("Invalid user");
        window.location.href = "Index.php"
      </script>
     <?php 
  }
}else{
  ?>
<script type="text/javascript">
  alert("User needs to be logged In");
  window.location.href = "Login.php"
</script>
<?php
}
$sql = "SELECT * FROM customer where CustID=".$_SESSION["ID"];
$result = mysqli_query($link,$sql);
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

  <link type="text/css" rel="stylesheet" href="css/DeStylesheet2.css" />


  <title>Deshieats_CustomerProfile_Page</title>

</head>

<body>

  <?php
  include "header.php";
  ?>
  <div class="container userprofileform">

    <div class="row userprofileformrow">

      <div class="col-7 userprofiledit ">
        <div class="userprofileheading mt-4">
          <p class="userprofileheadinguser">Customer's Profile</p>
        </div>
        <form action="" method="POST" enctype="multipart/form-data">
          <div class="mb-4 mt-2 userprofilecontents">
            <p class="userprofilelabels">Full Name:</p>
            <input type="text" placeholder="<?php echo $row["CustName"] ?>" name="userprofilename" value="<?php echo $row["CustName"] ?>" class="form-control userformholders" />
          </div>

          <!-- **********available Name er ekta variable thakbe... edit button click korle edit kora jabe.*********** -->

          <div class="mb-4 mt-2 userprofilecontents">
            <p class="userprofilelabels">Email:</p>
            <input type="email" placeholder="<?php echo $row["CustEmail"] ?>" name="userprofileemail" value="<?php echo $row["CustEmail"] ?>" class="form-control userformholders" />
          </div>
          <div class="mb-4 mt-2 userprofilecontents">
            <p class="userprofilelabels">Address:</p>
            <input type="text" placeholder="<?php echo $row["CustAddress"] ?>" name="userprofilecontactno" value="<?php echo $row["CustAddress"] ?>" class="form-control userformholders" />
          </div>
          <div class="mb-4 mt-2 userprofilecontents">
            <p class="userprofilelabels">Contact No:</p>
            <input type="text" placeholder="<?php echo $row["CustContactNumber"] ?>" name="userprofilecontactno" value="<?php echo $row["CustContactNumber"] ?>" class="form-control userformholders" />
          </div>
          <div class="mb-4 mt-2 userprofilecontents">
            <p class="userprofilelabels">Area:</p>
            <input type="text" placeholder="<?php echo $row["CustArea"] ?>" name="userprofilecontactno" value="<?php echo $row["CustArea"] ?>" class="form-control userformholders" />
          </div>
          <div class="mb-4 mt-2 userprofilecontents">
            <p class="userprofilelabels">Password:</p>
            <input type="password" placeholder="<?php echo $row["CustPassword"] ?>" name="userPassword" value="<?php echo $row["CustPassword"] ?>" class="form-control userformholders" />
          </div>
          <div class="mb-4 mt-2 userprofilecontents">
            <p class="userprofilelabels">User Name:</p>
            <input type="text" placeholder="<?php echo $row["CustName"] ?>" name="username" value="<?php echo $row["CustName"] ?>" class="form-control userformholders" disabled />
          </div>
          <div class="userprofileallbuttons">
            <button type="submit" name="UserProfileconfirm" value="Save changes" class="btn-submit" onclick=" "> Submit</button>
            <!--<input type="submit" name="UserProfilePasswordChange" value="Change Password" class="passwordchangebutton" onclick=" "/>-->
          </div>
        </form>
      </div>
    </div>

  </div>

  <?php
  include "footer.php";
  ?>




  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>









</html>