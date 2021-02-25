
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
           <a class="nav-link" href="final_checkout.php">
           <i class="fas fa-money-check-alt mr-2"></i>Checkout</a>
        </li>

        <li class="nav-item">
                 <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i> 
                 <span id="cart-item" class="badge badge-danger"></span></a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container">
    <div id="message"></div>
    <div class="row mt-2 pb-3">
		
	
      <div class="col-sm-6 col-md-4 col-lg-3 mb-2">
        <div class="card-deck">

          <div class="card p-2 border-secondary mb-2">
            <img class="card-img-top" height="250">
            <div class="card-body p-1">
              <h4 class="card-title text-center text-info"></h4>
              <h5 class="card-text text-center text-danger"><i class="fas fa-dollar-sign"></i>&nbsp;&nbsp;</h5>
            </div>
            <div class="card-footer p-1">
              <form method="post"class="form-submit">
                <div class="row p-2">
                  <div class="col-md-6 py-1 pl-4">
                    <b>Quantity : </b>
                  </div>
                  <div class="col-md-6">
                    <input type="number" class="form-control pqty" name="pqty">
                  </div>
                </div>
                <input type="hidden" class="pid" name="pid">
                <input type="hidden" class="pname" name="pname">
                <input type="hidden" class="pprice" name="pprice">
                <input type="hidden" class="pimage" name="pimage">
                <input type="hidden" class="pcode" name="pcode">
                
                <button class="btn btn-info btn-block addItemBtn" name="button"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Add to
                  cart</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>
  

 
</body>

</html>