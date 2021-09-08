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
                        <h3 class="text-center"> New User Register Here..</h3>
                    </div>
                    <div class="card-body">
                    <form action="code.php" method="POST" >
                            <div class="form-group mb-3">
                                <label for="">Name</label>
                                <input class="form-control" type="text" name="name" required>

                            </div>
                            <div class="form-group mb-3">
                                <label for="">Email</label>
                                <input class="form-control" type="email" name="email" required>

                            </div>
                            <div class="form-group mb-3">
                                <label for="">Password</label>
                                <input class="form-control" type="password" name="password" requred>

                            </div>
                            <div class="form-group mb-3">
                                
                                <input class="form-control btn-primary" type="submit" name="submit">

                            </div>

                    </form>






                       
                        
                        
                    </div>
                    <div class="text-center card-body">
                    <span> Registered USER..</span>
                    <a href="login.php" class="btn btn-success">LogIn</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include"assets/footer.php";?>
</body>
</html>