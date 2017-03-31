<?php
require_once "vendor/autoload.php";

require "config/Config.php";
require "src/BddManager.php";
require "src/AddKeywordManager.php";

$bdd = new \wcs\BddManager();
$keyManager = new \wcs\AddKeywordManager($bdd);

//$keyword = $_POST['keyword'];
//$keyManager = setKeyWord($keyword);
//$keyManager = addKeyWord($keyword);


$var = $_POST['keyword'];
$menuyear = $_POST['year'];
$type = $_POST['type'];
$url = 'http://www.omdbapi.com/?s=' . $var;

if (!empty($menuyear)) {
    $url .= "&y=" . $menuyear;
}

if (!empty($type)) {
    $url.= "&t=" . $type;
}
var_dump($url);
$curl = curl_init();

curl_setopt($curl, CURLOPT_COOKIESESSION, true);

curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

curl_setopt($curl, CURLOPT_URL, $url);

$return = curl_exec($curl);

curl_close($curl);

$result = json_decode($return, true);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenue sur ODL</title>
    <link rel="stylesheet" href="public/css/stylesheet.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
          crossorigin="anonymous">
</head>
<body>

<header>
<?php include "inc/header.php"?>
</header>

<div class="search">
<?php include "inc/form.php"?>
</div>

<div class="list">
<?php include "inc/list.php"?>
</div>

<footer>
<?php include "inc/footer.php"?>
</footer>

<script src="http://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
</body>
</html>