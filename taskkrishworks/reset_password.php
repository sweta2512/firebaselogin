<?php include"assets/header.php";
session_start();
?>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h3 class="text-center">Enter Your Email</h3>
                    </div>
                    <div class="card-body">
                        <form  action="" method="POST">
                            <div class="form-group mb-3">
                                <label for="">Email</label>
                                <input class="form-control" type="email" name="email">

                            </div>
                           
                            <div class="form-group mb-3">
                                
                                <input class="form-control btn-primary" type="submit" name="send_link">

                            </div>








                        </form>
                        
                        
                    </div>
                    

                </div>
            </div>
        </div>
    </div>
    <?php include"assets/footer.php";?>
</body>
</html>
<?php
include'firebase_setup.php';
if(isset($_POST['send_link'])){
    $email=$_POST['email'];
    $auth->sendPasswordResetLink($email);
    $_SESSION['status']="Link has been sent to your Email ID.";
    header('location:index.php');

}





?>