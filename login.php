<?php
session_unset();
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>McDollibee's Login</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12" style="margin:150px 0 0 480px">
                <div class="card" style="width: 220px">
                    <div class="card-header" style="background-color: yellow">
                        <h5>McDollibee's Login</h5>
                    </div>
                    <div class="card-body">
                        <form action="order.php" method="POST">
                            <label for="v_username">Username:</label>
                            <input type="text" name="v_username" id="v_username" placeholder="Username" required class="form-control">
                            <label for="v_password">Password:</label>
                            <input type="password" name="v_password" id="v_password" placeholder="Password" required class="form-control">
                            <hr>
                            <div style="text-align: right">
                                <input type="submit" value="Login">
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