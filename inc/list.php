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
