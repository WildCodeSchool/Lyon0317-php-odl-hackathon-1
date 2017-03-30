<div class="row">
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <form action="" method="post" role="form">
            <input type="hidden" name="id" value="<?echo $id;?>">
            <legend>Formulaire de contact</legend>

            <div class="form-group">
                <label for="">Firstname</label>
                <input type="text" class="form-control" name="keyword" id="keyword" placeholder="Enter your search" value="<?php echo $firstname;?>">
            </div>
            <div class="form-group">
                <label for="type">Faction</label>
                <select class="form-control" id="type" name="type">
                    <option value="movie">Movie</option>
                    <option value="series">Series</option>
                    <option value="episode">Episode</option>
                </select>
            </div>
            <div class="form-group">
                <label for="year">Year</label>
                <input type="text" class="form-control" name="year" id="email" placeholder="Entrez votre email" value="<?php echo $email;?>">
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </form>
    </div>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
</div>