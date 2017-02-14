<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Allergies.php";

    $app = new Silex\Application();
    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('allergy_home.html.twig');
    });

    $app->post("/results", function() use($app) {
        $allergy = new Allergies;
        $allergyArray = $allergy->allergyNumber($_POST['allergy-number']);
        return $app['twig']->render('results.html.twig', array('allergies' => $allergyArray));
    });


    return $app;
 ?>
