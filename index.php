<!DOCTYPE html>
<html>
<head>
	<title>MPESA</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
	.card {
	    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
	    transition: 0.3s;
	    width: 40%;
	}

	.card:hover {
	    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
	}

	.container {
	    padding: 2px 16px;
	}
	</style>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
</head>
<body>

<div class="container">
	<div class="card">
	  <img src="https://media.frenchconnection.com/ms/fcuk/58ABB_model/1537/1024/Bowline-Crew-Neck-Jumper.jpg?lc\u003den-GB\u0026lv\u003d9\u0026404\u003dfcuk/58ABB.jpg" alt="Avatar" style="width:100%">
	  <div class="container">
	    <h4><b>KES 1200 /=</b></h4> 
	    <form method="POST" action="mpesa_api.php">
	    	<input type="hidden" name="amount" value="1200">
	    	<div class="form-group">
			    <input type="text" id="phone" name="phone" placeholder="Phone Number">
			</div>
	    	<button type="submit" class="btn btn-primary">Make Paymet</button>
	    </form> 
	  </div>
	</div>
</div>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>