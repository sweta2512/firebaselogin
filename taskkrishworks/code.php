<?php
include'firebase_setup.php';
session_start();

if(isset($_POST['submit'])){//registration with firebase authentication

    if($_SERVER['REQUEST_METHOD']==='POST'){
       $name= $_POST['name'];
       $email= $_POST['email'];
       $password=$_POST['password'];

       if((!empty($name))&& (!empty($email)) && (!empty($password) )){

        $userProperties = [
            'email' =>$email ,
            'emailVerified' => false,
            
            'password' => $password,
            'displayName' => $name
            
        ];
        
        $createdUser = $auth->createUser($userProperties);
        if($createdUser){
            $_SESSION['status']="User Created.";
            header('location:register.php');
        }else{
            $_SESSION['status']="User not Created.";
            header('location:register.php');
        }


       }else{




       }
            

    }else{
    
    
    
    }
    
    
}



?>