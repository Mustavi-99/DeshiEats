<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">   
        <!-- Bootstrap CSS -->    
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">   
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
		<link type="text/css" rel="stylesheet" href="css/DeStylesheet.css"/>  
		
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
		<link type="text/css" rel="stylesheet" href="css/Contact.css"/> 		
        <title>DeshEats Contact Form</title>
    </head>

    <body>
		<?php
        include "header.php" ;
      ?>	
	  <section class="contact"> 
		<div class="content">
			<h2> Contact Us</h2>
			<p>DeshiEats is aimed at providing you the best service. Have any issues with our service or want to contact us personally? Email Us! </p>
		</div>
		<div class="container">
			<div class="contactInfo">
				<div class="box">			
					<div class="icon"> <i class="fas fa-phone"></i> </div>
						<div class="text">
							<h3>Phone</h3>
							<p>+8801512345678</p>
						</div>
					
				</div>
				<div class="box">			
					<div class="icon"><i class="fas fa-envelope"></i></div>
						<div class="text">
							<h3>Email</h3>
							<p>DeshiEats@gmail.com</p>
						</div>
					</div>
				</div>
				<div class="contactForm"> 
					<form>
						<h2> Send Message </h2>
						<div class="inputBox">
						<input type="text" name="" required="required">
						<span> Full Name </span>							
						</div>	
						<div class="inputBox">
						<input type="text" name="" required="required">
						<span> Email </span>							
						</div>
						<div class="inputBox">
						<input type="text" name="" required="required">
						<span> Phone Number </span>							
						</div>
						<div class="inputBox">
						<textarea required="required"> </textarea>
						<span> Type your Message... </span>							
						</div>	
						<div class="inputBox">
						<input type="submit" name="" value="Send">
						</div>							
					</form>
				</div>
			</div>
	  </section>

          <?php
            // include "footer.php";
          ?>

	</body>
	

</html>