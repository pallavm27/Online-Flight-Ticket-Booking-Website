<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GOFly...</title>
    <link rel="stylesheet" href="loginpage.css">
    
</head>
<body>
    <div class="containner">
        <div class="form">
            <h1>Login</h1>
            <form action="validation.php" method="POST">
                <div class="name">
                    <label for=""><i class="far fa-user"></i></label>
                    <input type="text" placeholder="Name" name="user" >
                </div>
               
                <div class="password">
                    <label for=""><i class="fas fa-lock"></i></label>
                    <input type="password" placeholder="Password" name="password">
                </div>
                <div class="buttons">
                    <button type="submit">SING IN</button>
					<br>
					<br>
					<br>
					 
					 
					<button class="btn"><a href="signup.php" >SIGN Up</a></button> New Member ? 	              
                </div>
               
           
        </div>
    </div>
</body>
</html>