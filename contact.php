<!Doctype html>
<html lang="en">

<head>
<meta charset="UTF-8"/>
<meta name="viewport"
content="width=device-width,intial-scale1.0"/>
<title> GoFly.. </title>
<link rel ="stylesheet" href=" style1.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.fa {  
			  width: 30px;
			  padding: 25px;
			  font-size: 20px;
			  text-align: center;
			  text-decoration: none;
			  margin: 4px 1px;
			  color: white;
			  border-radius: 45%; 
			}

			.fa:hover {
				opacity: 0.7;
			}

			.fa-facebook {
			  background: #3B5998;
			}

			.fa-twitter {
			  background: #55ACEE;
			}

		

			.fa-linkedin {
			  background: #007bb5;
			}

		
			.fa-instagram {
			  background: pink;
			}
.auto-style1 {
	font-weight: bold;
	text-decoration: underline;
	font-size: x-large;
}
.auto-style2 {
	font-size: x-large;
}
</style>

</head>

<body>


<div class="bg"></div>
<form action="connect.php" method="POST">

<center><br>
  <div class="col-md-12">
                    <div class="section-heading">
					
                      
						<h2><strong><u>Contact Us</u></strong></h2><br>
						
						
						</div>
	</div>
 <form>

    <input type="text" id="First name" placeholder="Your First name.." name="Firstname" required>
    <input type="text" id="Last name" placeholder="Your last name.." name="Lastname" required>
	<input type="text" id="Email" placeholder="Your Eamil.." name="Email" required>
	<textarea name="text" placeholder="Message"></textarea>
	<input type="submit" value="Submit" class="Submit" name="submit" >
	
	
	<a href="https://www.facebook.com/" class="fa fa-facebook"></a>
		<a href="https://twitter.com/LOGIN" class="fa fa-twitter"></a>
		<a href="https://www.linkedin.com/login" class="fa fa-linkedin"></a>
		
		<a href="https://www.instagram.com/accounts/login/" class="fa fa-instagram"></a>
	
	  

  
</form>
 

</body>
</html>