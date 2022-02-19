<?php 
  session_start();
  
  include("connect.php");

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    $fullname=$_POST['fname']."-".$_POST['lname'];
    $Email=$_POST['email'];
    $contact=(int)$_POST['contactNo'];
    $passwrd=$_POST['pass'];
    $confpasswrd=$_POST['cpass'];
    
    $chefDescription="About Chef";
    $chefAddress="Chef/Company Address";
    $chefArea="Chef/Company area";
    $chefImage="Chef Image";
    

    $userType=$_POST['utype'];

    if(!empty($fullname)  && !empty($contact) && !empty($Email) && !empty($passwrd) && !empty($confpasswrd)){

      if($passwrd==$confpasswrd){
        
        if($userType=="customer"){
          
          /*
          CustOrder ta ki hobe? 
          $query="INSERT INTO customer(CustName, CustEmail, CustPassword, CustContactNumber, CustOrder, CustAddress, CustArea) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7])";

            if(mysqli_query($CON,$query)){
            echo "<script>window.location.href='Login.php';</script>";
          }else{
            echo "<script>window.location.href='Register.php?error-in-customer-insert';</script>";
          }


          */
        
        }elseif($userType=="chef"){
          
          $query="INSERT INTO chef(ChefName, ChefEmail, ChefPassword, ChefContactNumber, ChefDescription, ChefAddress, ChefArea, ChefImage) VALUES ('$fullname','$Email','$confpasswrd','$contact','$chefDescription','$chefAddress','$chefArea','$chefImage')";
          
          
          if(mysqli_query($CON,$query)){
            echo "<script>window.location.href='Login.php';</script>";
          }else{
            echo "<script>window.location.href='Register.php?error-in-chef-insert';</script>";
          }


        }
        
      }else{
       echo "<script>window.location.href='Register.php?error-password-mismatch;</script>";
      }

    }else{
      echo "<script>window.location.href='Register.php?error-in-emptycheck-$userType-$fullname-$contact-$Email-$passwrd-$confpasswrd';</script>";
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

        <link type="text/css" rel="stylesheet" href="css/DeStylesheet.css"/>
    
    
        <title>DeshEats_Register</title>

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
                    <a class="nav-link navwrite" aria-current="page" href="Index.html">Home</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link navwrite" href="Menu.html">Menu</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link navwrite" href="#">Order</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link navwrite" href="Register.html">Register</a>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link navwrite" href="Login.html">Login</a>
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


          <div class="container">
            <div class="row m-5">
              <div class="col-12 .col-sm-12 col-lg-2 .col-md-2 col-xl-6">
                <div class="loginlog">
                  <img src="images/Login/deshi.png">
                  <h3 class="dont">Isha kisu likkha dio...:3</h3>
              </div>
              </div>
              <div class="col-12 .col-sm-12 col-lg-2 .col-md-2 col-xl-6">
                <h1 class="regcon">
                  SIGN UP
              </h1>
              <h4 class="dont"> 
                   It's completely free.
               </h4>
               
               <form action="#" method="POST">
                <div class="mt-3 mb-3 Formnames">
                    <input class="form-control fname" type="text" placeholder="First Name"  name="fname" >
                    <input class="form-control lname" type="text" placeholder="Last Name"   name="lname" >  
                </div>
                <input class="form-control mb-3" type="text" placeholder="Email"           name="email" >
                <input class="form-control mb-3" type="text" placeholder="Contact No."     name="contactNo" >
                <input class="form-control mb-3" type="password" placeholder="Password"    name="pass"  >
                <input class="form-control" type="password" placeholder="Re-type password" name="cpass" >
                <div class="domatch">
                  <label class="">Passwords don't match</label>
                </div>
                <div class="form-check form-switch mt-3">
                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" value="chef" name="utype">
                    <label class="form-check-label labe" for="flexSwitchCheckDefault">Register as a Chef</label>
                </div>
                <div class="form-check form-switch mt-3">
                  <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked"  value="customer" name="utype">
                  <label class="form-check-label labe" for="flexSwitchCheckChecked">Register as a customer</label>
                </div>
                <div class="col-auto mt-4">
                  <button type="submit" class="btn btn-primary mb-3">Register</button>
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