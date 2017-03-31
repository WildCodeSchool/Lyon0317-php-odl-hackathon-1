<?php
require_once "vendor/autoload.php";

require "config/Config.php";
require "src/BddManager.php";
require "src/AddKeywordManager.php";
require "src/Curl.php";

$bdd = new \wcs\BddManager();
$keyManager = new \wcs\AddKeywordManager($bdd);
$curl = new \wcs\Curl();

$loader = new Twig_Loader_Filesystem(__DIR__ . '/view');
$twig = new Twig_Environment($loader, array(
    'cache' => __DIR__ . '/tmp',
));

$result = array();
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $keyManager->setId($_POST['title']);
    $curl->setType($_POST['type']);
    $curl->setYear($_POST['year']);
    $result = $curl->DisplayCurl();
    $keyManager->setTitle($_POST['title']);
    $keyManager->addKeyWord();
}

echo $twig->render('index.html.twig');