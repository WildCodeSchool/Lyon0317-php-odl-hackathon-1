

<!doctype html>
<html lang="fr">
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
    <link rel="stylesheet" href="../vendor/boostrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../vendor/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../public/css/main.css">
</head>
<body>
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
                        for ($menuyear = 1900; $menuyear < 2018; $menuyear++)
                        {
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

<section>

</section>
<script
        src="https://code.jquery.com/jquery-3.1.1.js"
        integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
        crossorigin="anonymous">
</script>
<script src="../vendor/boostrap/js/bootstrap.min.js"></script>
</body>
</html>