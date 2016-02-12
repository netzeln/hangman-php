<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Game.php";
    require_once __DIR__."/../src/Word.php";

    session_start();
    if(empty($_SESSION['guessed_letters'])){
        $_SESSION['guessed_letters'] = array();
    }
    if(empty($_SESSION['wrong_guess'])){
        $_SESSION['wrong_guess'] = array();
    }
    $_SESSION['theWord'] = new Word("Torpedo");

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path'=>__DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
            $testWord = $_SESSION['theWord'];
            $splitWord = $testWord->hideWord();



        return $app['twig']->render('index.html.twig', array('letters'=> $splitWord));
    });

    $app->post("/game", function() use ($app){
        $guessed_letter = $_POST['guess'];
        $testWord = $_SESSION['theWord'];
        $checkWord = $testWord->checkLetter($guessed_letter);

        return $app['twig']->render('index.html.twig', array('letters' =>$checkWord));
    });

    return $app;
 ?>
