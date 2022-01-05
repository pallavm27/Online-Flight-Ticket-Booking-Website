<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GOFly...</title>
    <link href="book.css" rel="stylesheet" >
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>
<body>
    <div class="container">
	 <form action="booknow.php" method="POST">

        <form class="form-group">
            <h1 class="text-center">Book your Ticket Here !!</h1>

            <div id="form"
                <h3 class="text-white">Booking Details</h3>

            <div id="input">
                <input type="text" id="input-group" placeholder="From" name="boarding">
                <input type="text" id="input-group" placeholder="To" name="destination">
               <u> Departure Date:</u><input type="" id="date" placeholder="Departure Date" name="tdate">
                <input type="text" id="input-group" placeholder="Departure Time" name="time">
                </div>
			    <div id="input4">
				<p> Prefered GOFly Airline no:</P
                  <br> GOFly:-1  <br>GOFly:-2<br> GOFly:-3
                    <input type="text" id="input-group1" placeholder="Write Your flight No:" name="flightno">
					
               
                </div>
				 

                <div id="input2">
                     <input type="text" id="input-group" placeholder="Adult" name="adult">
                   
                </div>

                <div id="input3">
                 <br>Economy Class:- ₹2000 Business Class:- ₹3000 First Class:- ₹5000
                    
                </div>
                <div id="input4">
                  
                    <input type="text" id="input-group1" placeholder="Prefered class" name="msg">
                </div>

                <div id="input5">
                    <h3 class="text-white">Personal Details</h3>
                </div>
                <div id="input6">
                    <input type="text" id="input-group" placeholder="Full Name" name="name">
                    <input type="number" id="input-group" placeholder="Phone Number" name="phno">
                    <input type="email" id="input-group1" placeholder="Email" name="email">
                </div>
                <button type="submit" class="btn btn-warning text-white">Order ticket</button>
                <button  class="btn btn-primary text-white"><a href="payment.php">Pay Now</a></button>
            </div>

        </form>

    </div>
</body>
</html>