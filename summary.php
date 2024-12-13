<?php
session_start();

if (
    !isset($_SESSION['code']) || 
    !isset($_POST['v_burger']) || 
    !isset($_POST['v_fries']) || 
    !isset($_POST['v_icedtea']) ||
    !isset($_POST['v_name']) || 
    !isset($_POST['v_contact']) || 
    !isset($_POST['v_address']) ||
    !isset($_SESSION['u_username']) || 
    !isset($_SESSION['u_password'])
) {
    header("Location: order.php");
    exit();
}

?>
<!DOCTYPE HTML>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<title>McDollibee: Order Confirmation</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-warning navbar-dark" style="background-color: yellow;">
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
                        <h3>McDollibee: Order Summary</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                        <tr>
                            <th>Order</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Total</th>
                        </tr>
                        <tr>
                            <!-- Burger -->
                            <td>Burger</td>
                            <td><?php 
                                    if(empty($_POST["v_burger"])){
                                        $_POST["v_burger"] = 0;
                                        echo $_POST["v_burger"];
                                    } else {
                                        echo ($_POST["v_burger"]);
                                    }
                                    ?></td>
                            <td><?php echo 150 ?></td>
                            <td><?php 
                                    if(empty($_POST["v_burger"])){
                                        $t_burger = 0;
                                        echo $t_burger;
                                    } else {
                                        $t_burger = ($_POST["v_burger"]) * 150;
                                        echo $t_burger;
                                    }
                                    ?>  <br></td>
                        </tr>
                        <tr>
                            <!-- Fries -->
                            <td>Fries</td>
                            <td><?php
                                    if(empty($_POST["v_fries"])){
                                        $_POST["v_fries"] = 0;
                                        echo $_POST["v_fries"];
                                    } else {
                                        echo($_POST["v_fries"]);
                                    }
                                     ?></td>
                            <td><?php echo 100 ?></td>
                            <td><?php
                                    if(empty($_POST["v_fries"])){
                                        $t_fries = 0;
                                        echo $t_fries;
                                    } else {
                                        $t_fries = $_POST["v_fries"] * 100;
                                        echo  $t_fries; 
                                    }
                                    
                                    ?><br></td>
                        </tr>
                        <tr>
                            <!-- Iced Tea -->
                            <td>Iced Tea</td>
                            <td><?php
                                    if(empty($_POST["v_icedtea"])){
                                        $_POST["v_icedtea"] = 0;
                                        echo $_POST["v_icedtea"];
                                    } else {
                                        echo($_POST["v_icedtea"]);
                                    }
                                     ?></td>
                            <td><?php echo 60 ?></td>
                            <td><?php 
                                    if(empty($_POST["v_icedtea"])){
                                        $t_icedtea = 0;
                                        echo $t_icedtea;
                                    }else{
                                        $t_icedtea = $_POST["v_icedtea"] * 60;
                                        echo  $t_icedtea; 
                                    } 
                                    ?><br></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Total:</td>
                            <td><?php
                                    $t_order = $t_burger + $t_fries + $t_icedtea ;
                                    if($t_order == 0)
                                    {
                                        echo 0;
                                    }
                                    else if ($t_order >= 500){
                                        echo $t_order . ' (No Delivery Fee)';
                                    } else {
                                        echo $t_order . ' = ' . ($t_order + 70) . '(Additional ₱70 Delivery Fee)';
                                    }
                                    ?></td>
                        </tr>
                        </table>
                        <hr>
                        <div>
                            <h5>Personal Information:</h5>
                        <br>
                        <table class="table table-striped">
                            <tr>
                                <th></th>
                                <th>Details</th>
                            </tr>
                            <tr>
                                <td>Full Name</td>
                                <td><?php echo $_POST["v_name"]; ?></td>
                            </tr>
                            <tr>
                                <td>Contact No.</td>
                                <td><?php echo $_POST["v_contact"]; ?></td>
                            </tr>
                                <td>Address</td>
                                <td><?php echo $_POST["v_address"]; ?></td>
                            </tr>
                            <tr>
                            <td>Request</td>
                                <td><?php echo $_POST["v_request"]; ?></td>
                            </tr>
                        </table>
                        </div>
                        <hr>
                        <div style="text-align: right">
                                <form action="order.php" method="POST">
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#myModal">Submit</button>
                                    <input type="submit" name="cancel" value="Cancel">
                                </form>
                        </div>
                    </div>
            </div>
            <!-- Modal -->
            <div class="modal" id="myModal" role="dialog">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                    <div>                        
                        <h3>Receipt</h3>
                    </div>
                    <div style="margin-left: 350px;">
                        <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
                    </div>
                </div>
                <div class="modal-body">
                    <?php
                        $t_burger = $_POST["v_burger"] * 150;
                        $t_fries = $_POST["v_fries"] * 100;
                        $t_icedtea = $_POST["v_fries"] * 100;
                        $t_order = $t_burger + $t_fries + $t_icedtea;
                        echo "=========================================="."\n" .
                             "==================McDollibee================="."\n" .//20- 18 blanks
                             "====================Order==================="."\n";
                        echo "Burger = " . $_POST["v_burger"] . " x 150 = " . $t_burger . "===========================" . "\n";
                        echo "Fries = " . $_POST["v_fries"] . " x 150 = " . $t_fries . "=============================" ."\n" ;
                        echo "Iced Tea = " . $_POST["v_icedtea"] . " x 60 = " . $t_icedtea . "===========================" . "\n" .
                             "====================Total==================="."\n" ;
                             if($t_order == 0){
                                echo $t_order;
                             }
                             else if ($t_order >= 500){
                                echo "Total:==========================" . $t_order . ' (No Delivery Fee)';
                            }
                            else{
                                echo "Total: ". $t_order . " + 70 ==========="  . ($t_order + 70) . '(Additional ₱70 Delivery Fee)';
                            }
                        echo "\n"."==========================================";
                    ?>
                    <?php
                        // session_unset();
                        // session_destroy();
                    ?>
                </div>
              </div>
            </div>
         </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>