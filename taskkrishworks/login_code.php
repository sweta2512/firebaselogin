<?php

include'firebase_setup.php';
session_start();
use Firebase\Auth\Token\Exception\InvalidToken;




////login code
if(isset($_POST['login'])){
    if($_SERVER['REQUEST_METHOD']==='POST'){
        $email= $_POST['email'];
       $password=$_POST['password'];

       try {
        
        $user = $auth->getUserByEmail($email);//to check email exit in this db or not

        $signInResult = $auth->signInWithEmailAndPassword($email, $password);

        $idTokenString = $signInResult->idToken();//if signed in then it will generate a token.
        $data=$signInResult->data();
        $_SESSION['user_name']=$data['displayName'];
        try {
            $verifiedIdToken = $auth->verifyIdToken($idTokenString);//verify id token for user authenticity.
           // $uid = $verifiedIdToken->firebaseUserId();//get uid(userid of the user from database)
           // $uid = $verifiedIdToken->claims()->get('sub');
            $uid = $verifiedIdToken->claims()->get('sub');
           
            $_SESSION['verified_user_id']=$uid;//will be used for varification
            $_SESSION['idTokenString']=$idTokenString;

            $_SESSION['status']="you are logged in successfully.";
            header('location:dashboard.php');
            exit();


        } catch (InvalidToken $e) {
            echo 'The token is invalid: '.$e->getMessage();
        } catch (\InvalidArgumentException $e) {
            echo 'The token could not be parsed: '.$e->getMessage();
        }

       
    } catch (\Kreait\Firebase\Exception\Auth\UserNotFound $e) {
        //echo $e->getMessage();
        $_SESSION['status']="Email not found.";
        header('location:login.php');
        exit();
    }

    }
}












?>