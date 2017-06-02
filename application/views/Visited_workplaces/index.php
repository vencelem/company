<div class="container margin">
    <div class="panel panel-default">
        <div class="panel-heading">Visited workplaces</div>
        <div class="panel-body">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Workplace</th>
                    <th>Ride</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($visited_workplaces as $visited_workplaces){
                    ?>
                    <tr>
                        <td><?php  echo $visited_workplaces->ID; ?></td>
                        <td><?php  echo $visited_workplaces->workplaces_ID; ?></td>
                        <td><?php  echo $visited_workplaces->rides_ID; ?></td>
                        <td><a href="<?php echo base_url('index.php/Visited_workplaces/zmen/'.$visited_workplaces->ID); ?>"><button type="submit" class="btn btn-info">Zmeniť</button></a>
                            <a href="<?php echo base_url('index.php/Visited_workplaces/vymaz/'.$visited_workplaces->ID); ?>"><button type="submit" class="btn btn-danger">Vymazať</button></a></td></td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
    <center><a href="<?php echo base_url('index.php/Visited_workplaces/pridaj'); ?>"><button type="submit" class="btn btn-primary">Pridať záznam</button></a></center>
</div>