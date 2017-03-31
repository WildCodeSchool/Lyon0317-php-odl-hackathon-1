
<div class="row">
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <form action="" method="post" role="form">
            <input type="hidden" name="id">
            <legend>Your search</legend>
            <div class="form-group">
                <label for="keyword">Keyword</label>
                <input type="text" class="form-control" name="keyword" id="keyword" placeholder="Enter your search">
            </div>
            <div class="form-group">
                <label for="type">Type</label>
                <select class="form-control" id="type" name="type">
                    <option value="default" selected>Choose a type</option>
                    <option value="<?php echo $type; ?>">Movie</option>
                    <option value="<?php echo $type; ?>">Series</option>
                    <option value="<?php echo $type; ?>">Episode</option>
                </select>
            </div>
            <div class="form-group">
                <label for="year">Year</label>
                <select name="year">
                    <option value="default" selected>Choose a year</option>
                    <?php
                    for ($menuyear = 1900; $menuyear < 2018; $menuyear++) {
                        ?>
                        <option value="<?php echo $menuyear; ?>">
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
