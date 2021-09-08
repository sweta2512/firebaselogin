<?php

require __DIR__.'/vendor/autoload.php';
use Kreait\Firebase\Factory;
use Kreait\Firebase\Auth;
use Firebase\Auth\Token\Exception\InvalidToken;

$factory = (new Factory)
         ->withServiceAccount('sweta-321416-firebase-adminsdk-2dxs7-4ba1817ff2.json')
            ->withDatabaseUri('https://sweta-321416-default-rtdb.firebaseio.com/');
            $database = $factory->createDatabase();
            $auth = $factory->createAuth();




?>