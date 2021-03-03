<?php
  require('./database/mysqli_connect/mysqli_connect.php');
  $result = mysqli_query($dbc , 'SELECT * FROM cart') or die("Error in db records : ". mysqli_error($dbc));
?>


<html>
<head>
  <title>Cart</title>
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
      <div class="col-lg-10">
        
        <div class="table-responsive mt-2">
          <table class="table table-bordered table-striped text-center">
            <thead>
              <tr>
                <td colspan="7">
                  <h4 class="text-center text-info m-0">Item you have Added</h4>
                </td>
              </tr>
              <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Cumulative Amount</th>
              </tr>
          </thead>

          <tbody>
          <?php
                $cumulative_amount = 0;
                while ($row = mysqli_fetch_array($result)):
          ?>
			  <form method="post" action="functionality.php" class="form-submit">
              <tr>
                    <td><?php echo $row['product_name'] ?></td>
                    <td>
                      <input type="number" disabled  class="form-control qty" name="qty" value="<?php echo $row['qty'] ?>" style="width:75px;">
                    </td>
                    <td><i class="fas fa-dollar-sign"></i>&nbsp;&nbsp;<?php echo $row['total_price']; ?></td>
               </tr>
		     </form>
              
              <?php $cumulative_amount += $row['total_price']; ?>
              <?php endwhile; ?>
          </tbody>
        </table>
        
        <div>
            <a href="cart.php" class="btn btn-danger <?php echo ($cumulative_amount > 1) ? '' : 'disabled'; ?>" ><i class="fas fa-trash"></i>&nbsp;&nbsp;Clear Cart</a>
        </div><br>


        <div>
            <b>Cumulative Amount</b>
            <b><i class="fas fa-dollar-sign"></i>&nbsp;&nbsp;<?php echo $cumulative_amount; ?></b>
        </div><br>

        
        <div>
          <a href="final_checkout.php" class="btn btn-info <?php echo ($cumulative_amount > 1) ? '' : 'disabled'; ?>"><i class="far fa-credit-card"></i>&nbsp;&nbsp;Checkout</a>
        </div>
        <?php
	        $result = mysqli_query($dbc , 'delete from cart') or die("Error in db records : ". mysqli_error($dbc));

        ?>
        
        </div>
      </div>
    </div>
  </div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>
</body>
</html>