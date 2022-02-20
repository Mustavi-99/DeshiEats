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
               echo "<script>window.location.href='index.php?$_SESSION[ID]';</script>";
           
            }elseif($type=="customer"){
               $_SESSION["ID"]=$userExists["CustID"];
               $_SESSION["type"]=$type;
               echo "<script>window.location.href='index.php?$_SESSION[ID]';</script>";
            }

        }
        else{
           echo "<script>window.location.href='Login.php?Pass-word-mismatch';</script>";
        }
     
      }

?>