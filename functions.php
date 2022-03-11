<?php 
    //ekhane necessary functiongula likhis

    //ei function user exist kore kina check kore sudhu chef table er jonno kora apatoto
    function uidExists($con,$username,$email,$type){
      
      if($type=="chef"){  
        $sql="SELECT * FROM chef WHERE ChefName = ? OR ChefEmail = ?";
        $stmt=mysqli_stmt_init($con);
        if(!mysqli_stmt_prepare($stmt,$sql)){
          header("location:../Login.php?error=stmtfailed");
          exit();
        }
        
        mysqli_stmt_bind_param($stmt,"ss",$username,$email);
        mysqli_stmt_execute($stmt);
    
        $resultData=mysqli_stmt_get_result($stmt);
    
        if($row=mysqli_fetch_assoc($resultData)){
          return $row;
        }
        else{
           $result=false;
           return $result;
        }
    
        mysqli_stmt_close($stmt);
      
      }elseif($type=="customer"){
        
         $sql="SELECT * FROM customer WHERE CustName = ? OR CustEmail = ?";
        $stmt=mysqli_stmt_init($con);
        if(!mysqli_stmt_prepare($stmt,$sql)){
          header("location:../Login.php?error=stmtfailed");
          exit();
        }
        
        mysqli_stmt_bind_param($stmt,"ss",$username,$email);
        mysqli_stmt_execute($stmt);
    
        $resultData=mysqli_stmt_get_result($stmt);
    
        if($row=mysqli_fetch_assoc($resultData)){
          return $row;
        }
        else{
           $result=false;
           return $result;
        }
    
        mysqli_stmt_close($stmt);
      
      }
     
   }

     //ei function login koray aar session e info rakhe. apatoto chef er jonno kora hoise
     function loginUser($con,$user,$pass,$type){
        $userExists=uidExists($con,$user,$user,$type);
     
        if($userExists==false){
           echo "<script>window.location.href='Login.php?user-dont-exists';</script>";
           exit();
        }

        if($type=="chef"){
         $pwd=$userExists["ChefPassword"];       
         
        }elseif($type=="customer"){
         $pwd=$userExists["CustPassword"];
        
        }

        
        $Check_pwd=$pass;
     
         if($Check_pwd==$pwd){
           
            
           if($type=="chef"){
               
               $_SESSION["ID"]=$userExists["ChefID"];
               $_SESSION["type"]=$type;
               ?><script>window.location.href="Chef'sExhibition.php";</script><?php
           
            }elseif($type=="customer"){
               $_SESSION["ID"]=$userExists["CustID"];
               $_SESSION["type"]=$type;
               echo "<script>window.location.href='index.php';</script>";
            }

        }
        else{
           echo "<script>alert('User name or password empty or the type not chosen. Check please.');window.location.href='Login.php?Pass-word-mismatch';</script>";
        }
     
      }


      
      //ei function ta user information update kore
      function UpdateUserInfo($con,$id,$fullName,$email,$contact,$password,$chefDesc,$chefAddress,$chefImg,$type){
        
        if($type=="customer"){
          
          $query="UPDATE customer SET CustName='$fullName',CustEmail='$email',CustPassword='$password',CustContactNumber='$contact' ,CustAddress='$chefAddress' ,CustArea='$chefDesc' WHERE CustID='$id'";
          
          if(mysqli_query($con,$query)){
            $status=true;
            return $status;
          }else{
            $status=false;
            return $status;
          }

        }
        elseif($type=="chef"){
          $query="UPDATE chef SET ChefName='$fullName',ChefEmail='$email',ChefPassword='$password',ChefContactNumber='$contact',ChefDescription='$chefDesc',ChefAddress='$chefAddress',ChefImage='$chefImg' WHERE ChefID='$id'";
          
          if(mysqli_query($con,$query)){
            $status=true;
            return $status;
          }else{
            $status=false;
            return $status;
          }
          
        }
      }


      function userInfoGet($con,$id,$type){
      
        if($type=="chef"){  
          $sql="SELECT * FROM chef WHERE ChefID = ?";
          $stmt=mysqli_stmt_init($con);
          if(!mysqli_stmt_prepare($stmt,$sql)){
            header("location:../Login.php?error=stmtfailed");
            exit();
          }
          
          mysqli_stmt_bind_param($stmt,"i",$id);
          mysqli_stmt_execute($stmt);
      
          $resultData=mysqli_stmt_get_result($stmt);
      
          if($row=mysqli_fetch_assoc($resultData)){
            return $row;
          }
          else{
             $result=false;
             return $result;
          }
      
          mysqli_stmt_close($stmt);
        
        }elseif($type=="customer"){
          
           $sql="SELECT * FROM customer WHERE CustID = ?";
          $stmt=mysqli_stmt_init($con);
          if(!mysqli_stmt_prepare($stmt,$sql)){
            header("location:../Login.php?error=stmtfailed");
            exit();
          }
          
          mysqli_stmt_bind_param($stmt,"i",$id);
          mysqli_stmt_execute($stmt);
      
          $resultData=mysqli_stmt_get_result($stmt);
      
          if($row=mysqli_fetch_assoc($resultData)){
            return $row;
          }
          else{
             $result=false;
             return $result;
          }
      
          mysqli_stmt_close($stmt);
        
        }
       
     }
     
     function inputMessage($link,$name,$email,$phone,$message){
       $contactsql = "INSERT INTO `contactus`( `ContactName`, `ContactEmail`, `ContactPhone`, `ContactMessage`) VALUES ('".$name."','".$email."','".$phone."','".$message."')";
       if(!mysqli_query($link,$contactsql)){
          echo '<script type="text/javascript">
          alert("Something went wrong! Try Again");
        </script>';
       }
     }

     
     function getMessages($link){
        $query="SELECT * FROM contactus";
        $result = mysqli_query($link, $query);
        return $result;

     }

     function removeMessages($link,$id){
      $query="DELETE FROM contactus WHERE ContactID =".$id;
      //echo $query;
      if(mysqli_query($link,$query)){
        
        $status=true;
        return $status;
        
      }else{
          
        $status=false;
        return $status;
      
      }
      

     }


?>