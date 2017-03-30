<?php

$var = $_POST['name'];

$url= 'http://www.omdbapi.com/?s='.$var;


$curl = curl_init();


curl_setopt($curl, CURLOPT_URL, $url);

curl_setopt($curl, CURLOPT_COOKIESESSION, true);

curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);


$return = curl_exec($curl);

curl_close($curl);

$url = file_get_contents($url);

$result = json_decode($return,true);

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

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
      integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<form method="post">
    <div class="form-group">
        <label for="">Movie search by title</label>
        <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="form-group">
        <label for="year">Movie search by year:</label>
        <input type="number" class="form-control" id="year">
    </div>
    <button type="submit" class="btn btn-default">Search</button>
</form>

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
                <?php foreach($result[Search] as $record=>$item): ?>
                    <tr>
                        <td><?php echo $item['imdbID'];?></td>
                        <td><?php echo $item['Title'];?></td>
                        <td><?php echo $item['Year'];?></td>
                        <td><?php echo $item['Type'];?></td>
                        <td><img src="<?php echo $item['Poster'];?>"> </td>
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