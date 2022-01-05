<!DOCTYPE html>
<html>
<head>
    <title>GoFly..</title>
   
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
    <link rel="stylesheet" href="style2.css">
</head>
<body>


<h1><i class="fa fa-plane" aria-hidden="true"> GoFly.....</i></h1>
<div class="row">
    <div class="col-25">
        <div class="container">
            <form action="buy.php" method="POST">
                <div class="row">
                    <div class="col-2">
                        <h3>Passenger Address</h3>
                        <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                        <input type="text" id="fname" name="fullname" placeholder="Your full name" required name="full name">
                        <label for="email"><i class="fa fa-envelope"></i> Email</label>
                        <input type="text" id="email" name="email" placeholder="pallavm0079@.com" required name="email">
                        <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                        <input type="text" id="adr" name="address" placeholder="b-2/202 rupak flats surat gujarat" required name="address">
                        <label for="city"><i class="fa fa-institution"></i> City</label>
                        <input type="text" id="city" name="city" placeholder="surat" required name="city">

                        <div class="row">
                            <div class="col-3">
                                <label for="state">State</label>
                                <input type="text" id="state" name="state" placeholder="Gujarat"required name="state">
                            </div>
                            <div class="col-3">
                                <label for="zip">Zip</label>
                                <input type="text" id="zip" name="zip" placeholder="12000"required name="zip">
                            </div>
                        </div>
                    </div>

                    <div class="col-5">
                        <h3>Payment</h3>
                        <label for="fname">Accepted Cards</label>
                        <div class="icon-container">
                            <i class="fa fa-cc-visa" style="color:navy;"></i>
                            <i class="fa fa-cc-amex" style="color:blue;"></i>
                            <i class="fa fa-cc-mastercard" style="color:red;"></i>
                            <i class="fa fa-cc-discover" style="color:orange;"></i>
                        </div>

                        <label for="cname">Name on Card</label>
                        <input type="text" id="cname" name="cardname" placeholder="your full name"required name="cardname">
                        <label for="ccnum">Credit card number</label>
                        <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444"required name="cardnumber">
                        <label for="Amount">Amount</label>
                        <input type="text" id="amount"  placeholder="Amount"required name="amount">
                        <div class="row">
                            <div class="col-4">
                                <label for="expyear">Exp Year</label>
                                <input type="text" id="expyear" name="expyear" placeholder="2021"required name="expyear">
                            </div>
                            <div class="col-4">
                                <label for="cvv">CVV</label>
                                <input type="text" id="cvv" name="cvv" placeholder="352"required name="cvv">
                            </div>
                        </div>
                    </div>
                </div>
              
                <input type="submit" value="Confrim payment" class="btn">
				


            </form>
        </div>
    </div>
    </div>
</div>
<!-- script validate js -->
<script>
    $('#validate').validate({
        roles: {
            fullname: {
                required: true,
            },
            email: {
                required: true,
            },
            address: {
                required: true,
            },
            city: {
                required: true,
            },
            state: {
                required: true,
            },
            zip: {
                required: true,
            },
            cardname: {
                required: true,
            },
            cardnumber: {
                required: true,
            },
            expmonth: {
                required: true,
            },
            expyear: {
                required: true,
            },
            cvv: {
                required: true,
            },
           
        },
        messages: {
            fullname:"Please input full name*",
            email:"Please input email*",
            city:"Please input city*",
            address:"Please input address*",
            state:"Please input state*",
            zip:"Please input address*",
            cardname:"Please input card name*",
            cardnumber:"Please input card number*",
            expmonth:"Please input exp month*",
            expyear:"Please input exp year*",
            cvv:"Please input cvv*",
        },
    });
</script>
</body>
</html>