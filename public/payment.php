<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Payment</title>
  <link rel="stylesheet" href="css/payment.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>
  <section class="payment-package">
    <div class="wrapper">
      <h2>Payment Form</h2>
      <form action="connect.php" method="POST">
        <h4>Account</h4>
        <div class="input-group">
          <div class="input-box">
            <input type="text" placeholder="Full Name" required class="name" name="firstName">
            <i class="fa fa-user icon"></i>
          </div>
          <div class="input-box">
            <input type="text" placeholder="Last Name" required class="name" name="lastName">
            <i class="fa fa-user icon"></i>
          </div>
        </div>
        <div class="input-group">
          <div class="input-box">
            <input type="email" placeholder="Email Adress" required class="name" name="email">
            <i class="fa fa-envelope icon"></i>
          </div>
        </div>
        <div class="input-group">
          <div class="input-box">
            <h4>
              Date of Birth</h4>
            <input type="text" placeholder="DD" class="dob">
            <input type="text" placeholder="MM" class="dob">
            <input type="text" placeholder="YYYY" class="dob">
          </div>
          <div class="input-box">
            <h4>
              Gender</h4>
            <input type="radio" id="b1" name="gender" value="m" checked class="radio">
            <label for="b1">Male</label>
            <input type="radio" id="b2" name="gender" value="f" class="radio">
            <label for="b2">Female</label>
          </div>
        </div>
        <div class="input-group">
          <div class="input-box">
            <h4>
              Payment Details</h4>
            <input type="radio" name="pay" id="bc1" checked class="radio">
            <label for="bc1"><span><i class="fa fa-cc-visa"></i> Credit Card</span></label>
            <input type="radio" name="pay" id="bc2" class="radio">
            <label for="bc2"><span><i class="fa fa-cc-paypal"></i> Paypal</span></label>
          </div>
        </div>
        <div class="input-group">
          <div class="input-box">
            <input type="tel" placeholder="Phone Number" required class="name" name="number">
            <i class="fa fa-credit-card icon"></i>
          </div>
        </div>
        <div class="input-group">
          <div class="input-box">
            <input type="tel" placeholder="password" required class="name" name="password">
            <i class="fa fa-user icon"></i>
          </div>
          <div class="input-box">
              <input class="date" type="date" id="date" name="date">

          </div>
        </div>
        <div class="input-group">
          <div class="input-box">
            <button type="submit">PAY NOW</button>
          </div>
        </div>
      </form>
    </div>
  </section>

</body>

</html>
