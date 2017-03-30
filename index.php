<?php

$var = $_POST['keyword'];

$url = 'http://www.omdbapi.com/?s=' . $var;

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
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
          crossorigin="anonymous">
    <link rel="stylesheet" href="list.css">
</head>
<body>
<!-- form ---------------------------------->
<div class="row">
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <form action="" method="post" role="form">
            <input type="hidden" name="id">
            <legend>Your search</legend>
            <div class="form-group">
                <label for="">Keyword</label>
                <input type="text" class="form-control" name="keyword" id="keyword" placeholder="Enter your search">
            </div>
            <div class="form-group">
                <label for="type">Type</label>
                <select class="form-control" id="type" name="type">
                    <option value="default" selected>Choose a type</option>
                    <option value="movie">Movie</option>
                    <option value="series">Series</option>
                    <option value="episode">Episode</option>
                </select>
            </div>
            <div class="form-group">
                <label for="year">Year</label>
                <select name="year">
                    <option value="default" selected>Choose a year</option>
                    <?php
                    for ($menuyear = 1900; $menuyear < 2018; $menuyear++) {
                        ?>
                        <option value="year">

                            <?php echo $menuyear; ?>
                        </option>
                        <?php
                    }
                    ?>

                </select>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
</div>
<!-- search results ---------->
<div class="row">
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">Liste des contacts</div>
            <table class="table">
                <tr>
                    <th>imdbID</th>
                    <th>Title</th>
                    <th>Year</th>
                    <th>Type</th>
                    <th>Poster</th>
                </tr>
                <?php foreach ($result['Search'] as $item): ?>
                    <tr>
                    <td><?php echo $item['imdbID']; ?></td>
                        <td><?php echo $item['Title']; ?></td>
                        <td><?php echo $item['Year']; ?></td>
                        <td><?php echo $item['Type']; ?></td>
                    <td><img src="<?php echo $item['Poster'];?>"></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
</div>

<script src="http://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
</body>
</html>