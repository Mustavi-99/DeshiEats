<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

  <link type="text/css" rel="stylesheet" href="css/DeStylesheet2.css" />


  <title>Deshieats_ChefProfile_Page</title>

</head>

<body>

  <?php
  include "header.php";
  ?>

  <div class="container userprofileform">

    <div class="row userprofileformrow">
      <!--image container div-->
      <div class="col-5 upload">
        <img src="images/profile.png" width=150 height=150 alt="">
        <div class="round">
          <input type="file">
          <i class="fa fa-camera" style="color:aliceblue"></i>
        </div>
      </div>

      <div class="col-7 userprofiledit ">
        <div class="userprofileheading mt-4">
          <p class="userprofileheadinguser">Chef's Profile</p>
        </div>
        <form action="" method="POST" enctype="multipart/form-data">
          <div class="mb-4 mt-2 userprofilecontents">
            <p class="userprofilelabels">Full Name:</p>
            <input type="text" placeholder="#Backend <?php //echo $fullName 
                                                      ?>" name="userprofilename" value="" class="form-control userformholders" />
          </div>

          <!-- **********available Name er ekta variable thakbe... edit button click korle edit kora jabe.*********** -->

          <div class="mb-4 mt-2 userprofilecontents">
            <p class="userprofilelabels">Email:</p>
            <input type="email" placeholder="#Backend<?php //echo $email 
                                                      ?>" name="userprofileemail" value="" class="form-control userformholders" />
          </div>
          <div class="mb-4 mt-2 userprofilecontents">
            <p class="userprofilelabels">Contact No:</p>
            <input type="text" placeholder="#Backend<?php //echo $contact 
                                                    ?>" name="userprofilecontactno" value="" class="form-control userformholders" />
          </div>
          <div class="mb-4 mt-2 userprofilecontents">
            <p class="userprofilelabels">Password:</p>
            <input type="password" placeholder="#Backende<?php //echo $password 
                                                          ?>" name="userPassword" value="" class="form-control userformholders" />
          </div>
          <div class="mb-4 mt-2 userprofilecontents">
            <p class="userprofilelabels">User Name:</p>
            <input type="text" placeholder="#Backend<?php //echo $userName 
                                                    ?>" name="username" value="" class="form-control userformholders" disabled />
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




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>









</html>