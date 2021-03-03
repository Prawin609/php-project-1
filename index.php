<html>

<head>
  <title>Instafood</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
</head>

<body>

  <nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <a class="navbar-brand" href="index.php"><i class="fas fa-utensils"></i>&nbsp;&nbsp;InstaFood</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon">
      </span>
    </button>

    <div class="collapse navbar-collapse" id="collapsibleNavbar">

      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
                <a class="nav-link active" href="index.php">
                <i class="fas fa-utensils"></i>&nbsp;&nbsp;Products</a>
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
    <div id="message"></div>
    <div class="row mt-2 pb-3">
		

    <?php
  			require('./database/mysqli_connect/mysqli_connect.php');

        $query = "SELECT * FROM product";
  			$result = mysqli_query($dbc, $query) or die("Error in db records : ". mysqli_error($dbc));
  			while ($row = mysqli_fetch_array($result)):
  		?>

	
      <div class="col-sm-6 col-md-4 col-lg-3 mb-2">
        <div class="card-deck">

          <div class="card p-2 border-secondary mb-2">
            <img src="<?php echo $row['product_image'] ?>" class="card-img-top" height="250">
            <div class="card-body p-1">
              <h4 class="card-title text-center text-info">
              <?php 
              echo $row['product_name']; 
              ?></h4>
              <h5 class="card-text text-center text-danger"><i class="fas fa-dollar-sign">
              </i>&nbsp;&nbsp;
              <?php 
              echo $row['product_price']; 
              ?></h5>
            </div>
            <div class="card-footer p-1">
              <form method="post" action="cart_functionality.php" class="form-submit">
                <div class="row p-2">
                  <div class="col-md-6 py-1 pl-4">
                    <b>Quantity : </b>
                  </div>
                  <div class="col-md-6">
                    <input type="number" min="0" max="20" class="form-control pqty" name="pqty" value="<?php 
                    if (isset($_POST['pqty'])){
                      echo $row['product_qty'];
                    }
                     ?>">
                  </div>
                </div>
                <input type="hidden" class="pid" name="pid" value="<?php
                 if (isset($_POST['pid'])){
                  echo $row['id'];
                }
                 ?>">
                <input type="hidden" class="pname" name="pname" value="<?php 
                echo $row['product_name']; ?>">
                <input type="hidden" class="pprice" name="pprice" value="<?php 
                echo $row['product_price']; ?>">

                <button class="btn btn-info btn-block" name="button">
                    <i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Add Item
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
  </div>
  <div>

  <form method="get">
  
  <button type="submit" formaction="navigation.php" class="btn btn-info btn-block">
                    Go to Cart</button>
</form>
  <!-- <button type="submit" formaction="/action_page2.php" class="btn btn-info btn-block">
                    Go to Cart</button>
                    <button type="submit" formaction="/action_page2.php">Submit to another page</button>
  </div> -->

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>
  

 
</body>

</html>