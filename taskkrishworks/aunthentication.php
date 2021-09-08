<?php
session_start();

include'firebase_setup.php';
use Firebase\Auth\Token\Exception\InvalidToken;


if(isset($_SESSION['verified_user_id']))
{
    $uid=$_SESSION['verified_user_id'];
    $idToken=$_SESSION['idTokenString'];


    try {
        $verifiedIdToken = $auth->verifyIdToken($idToken);
        
    } catch (InvalidToken $e) {
        echo 'The token is invalid: '.$e->getMessage();
        $_SESSION['status']="Session Expire.";
    header('location:logout.php');
    exit();

    } catch (\InvalidArgumentException $e) {
        echo 'The token could not be parsed: '.$e->getMessage();
    }


}else{

    $_SESSION['status']="Login First.";
    header('location:login.php');
    exit();
}




?>