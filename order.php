<?php
session_start();
$_SESSION['code'] = 1;

if(empty($_POST['cancel']))
{
	if($_POST['v_username'] == "Ynno" && $_POST['v_password'] == "123Pogi")
	{
		$_SESSION['u_username'] = $_POST['v_username'];
		$_SESSION['u_password'] = $_POST['v_username'];
	} else {
		header("Location: login.php");
		exit();
	}
}




?>
<!DOCTYPE HTML>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<title>McDollibee</title>
</head>
<body>
	<nav class="navbar navbar-expand-sm bg-warning navbar-dark" style="background-color: yellow;">
		<div>
			<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS5EWNJLoFUR3E_o1tq0wSIxSV5DE1n5PkPbw&s" style="height: 40px; width: 40px" >
		</div>
		<div>
			Welcome <?php echo $_SESSION['u_username'] . "! "?>
		</div>
		<div style="margin: 0 1px 0 auto">
			<form action="login.php" method="POST">
				<input type="submit" name="logout" class="btn btn-primaryton" value="Logout">
			</form>
		</div>	
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="card" style="margin: 5px; padding: 5px;">
					<div class="card-header" style="background-color:yellow;">
						<h3>McDollibee</h3>
					</div>
					<div class="card-body" >
						<div style="text-align:center;">
						<form action="summary.php" method="POST">
							<div class="row">
								<div class="class" style="width: 300px;">
									<div class="card-header">
										<h6>McBee's Burger: Only ₱ 150 </h6>
									</div>
									<div class="card-body">
										<img src="https://www.foodandwine.com/thmb/jldKZBYIoXJWXodRE9ut87K8Mag=/750x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/crispy-comte-cheesburgers-FT-RECIPE0921-6166c6552b7148e8a8561f7765ddf20b.jpg" alt="NA" style="height: 200px; width: 200px;border-width: 3px; border-color: black; border-style: solid; margin: 10px;">
										<input type="number" placeholder="How many McD's Burgers would you like?" name="v_burger">
									</div>
								</div>
								<div class="class" style="width: 300px;">
									<div class="card-header">
										<h6>McBee's Fries: Only ₱ 100 </h6>
									</div>
									<div class="card-body">
										<img src="https://www.seriouseats.com/thmb/dWuLBGrNYuDAq2YSMctpzO_ongI=/750x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/__opt__aboutcom__coeus__resources__content_migration__serious_eats__seriouseats.com__2018__04__20180309-french-fries-vicky-wasik-15-5a9844742c2446c7a7be9fbd41b6e27d.jpg" alt="NA" style="height: 200px; margin:10px;width: 200px;border-width: 3px; border-color: black; border-style: solid;">
										<input type="number" placeholder="How many McD's Fries would you like?" name="v_fries">
									</div>
								</div>
								<div class="class" style="width: 300px;">
									<div class="card-header">
										<h6>McBee's Fries: Only ₱ 60 </h6>
									</div>
									<div class="card-body">
										<img src="https://www.eatthis.com/wp-content/uploads/sites/4/2019/05/iced-tea.jpg?quality=82&strip=1&w=640" alt="NA" style="height: 200px; width: 200px;border-width: 3px; border-color: black; border-style: solid; margin: 10px;"><br>
										<input type="number" placeholder="How many McD's Iced Tea would you like?" name="v_icedtea">
									</div>
								</div>
							</div>
						<br>
						</div>
							<hr>
							<h5>Order Confirmation: Customer's Information Fill Up</h5>
							Full Name: <input type="text" placeholder="Full Name" name="v_name" required>
							Contact #: <input type="number" placeholder="Contact #" name="v_contact" required>
							<br><br>
							Address: <input type="text" placeholder="Address" name="v_address" required>
							Request: <input type="text" placeholder="Request" name="v_request">
							<hr>
							<div style="text-align:right">
								<input type="submit" value="Order" style="text-align:right">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>