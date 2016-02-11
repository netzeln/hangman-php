<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Game.php";
    require_once __DIR__."/../src/Word.php";

    // session_start();
    // if(empty($_SESSION[''])){
    //     $_SESSION[''] = array();
    // }


    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path'=>__DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {



        // return $app['twig']->render('index.html.twig', array('cds'=> $cd_list));
    });

    return $app;
 ?>
