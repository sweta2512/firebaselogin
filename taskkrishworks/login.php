<?php include"assets/header.php";
session_start();
?>
<body>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card mt-4">
                <?php
                    if(isset($_SESSION['status'])){
                        echo"<span>".$_SESSION['status']."</span>";
                        unset($_SESSION['status']);
                    }
                    ?>
                    <div class="card-header">
                        <h3 class="text-center">SignIn Here..</h3>
                    </div>
                    <div class="card-body">
                        <form  action="login_code.php" method="POST">
                            <div class="form-group mb-3">
                                <label for="">Email</label>
                                <input class="form-control" type="email" name="email">

                            </div>
                            <div class="form-group mb-3">
                                <label for="">Password</label>
                                <input class="form-control" type="password" name="password">

                            </div>
                            <div class="form-group mb-3">
                                
                                <input class="form-control btn-primary" type="submit" name="login">

                            </div>

                    </form>
                        
                        
                    </div>
                    <div class="text-center card-body">
                    <span>New User Register Here..</span>
                    <a href="register.php" class="btn btn-success ">Register</a>
                    </div>
                    <div class="text-center card-body">
                    <span>Forgot Password?</span>
                    <a href="reset_password.php" class="btn btn-success">Click Here</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <?php include"assets/footer.php";?>
</body>
</html>