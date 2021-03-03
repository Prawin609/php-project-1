<html>
<head>
  <title>Checkout</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
</head>

<body>
  <nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <a class="navbar-brand" href="index.php"><i class="fas fa-utensils"></i>&nbsp;&nbsp;InstaFood</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link active" href="index.php"><i class="fas fa-utensils mr-2"></i>Products</a>
        </li>
      
        <li class="nav-item">
                 <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i> 
                 <span id="cart-item" class="badge badge-danger">Orders</span></a>
        </li>
        
        <li class="nav-item">
           <a class="nav-link" href="final_checkout.php">
           <i class="fas fa-money-check-alt mr-2"></i>Checkout</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6 px-4 pb-4" id="order">
        <h4 class="text-center text-info p-2">Enter the details</h4>
        <form action="store_data.php" method="post">
        <div class="form-group">
            Full Name : <input type="text" name="full_name" class="form-control" placeholder="Enter your full name" required
            value="<?php 
              if(!empty($_POST['full_name'])){
                echo $_POST['full_name'];
              }
            ?>" >
          </div>
          <div class="form-group">
            Email Address : <input type="email" name="email" class="form-control" placeholder="Enter your email address" required
            value="<?php 
              if(!empty($_POST['full_name'])){
                echo $_POST['full_name'];
              }
            ?>">
          </div>
          <div class="form-group">
            Contact Number : <input type="number" name="phone" class="form-control" placeholder="Enter your contact number" required
            value="<?php 
              if(!empty($_POST['phone'])){
                echo $_POST['phone'];
              }
            ?>">
          </div>
          <div class="form-group">
            Street Name : <input name="mail_address" class="form-control" placeholder="Enter your Street Name"
            value="<?php 
              if(!empty($_POST['mail_address'])){
                echo $_POST['mail_address'];
              }
            ?>">
          </div>
          <div class="form-group">
            Postal Code<input name="postal_code" class="form-control" placeholder="Enter the Postal Code" required
            value="<?php 
              if(!empty($_POST['postal_code'])){
                echo $_POST['postal_code'];
              }
            ?>">
          </div>
          <div class="form-group">
            Credit Card Number : <input name="card_number" type="number" class="form-control" placeholder="Enter your credit card number" required
            value="<?php 
              if(!empty($_POST['card_number'])){
                echo $_POST['card_number'];
              }
            ?>">
          </div>
          <div class="form-group">
            <!-- <p>Save your information before submitting</p> -->
            <button formaction="store_data.php" name="submit" value="Oder" class="btn btn-success btn-block">Order your item</button>
          </div>
          
        </form>
      </div>
    </div>
  </div>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

</body>

</html>