<?php 
include'aunthentication.php';
include"assets/header.php";

    
?>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h3 class="text-center"> Dashboard</h3>
                    </div>
                    <div class="card-body">
                    <?php
                    if(isset($_SESSION['status'])){
                        echo"<span>".$_SESSION['status']."</span>";
                        unset($_SESSION['status']);
                    }
                    echo"<h3 class='text-center'>WELCOME : <span style='color:green;' >". $_SESSION['user_name']."</span> </h3>";
                    ?>
                        <a href="logout.php" class="btn btn-success fs-3">Logout</a> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include"assets/footer.php";?>
</body>
</html>