<div class="container margin">
    <div class="panel panel-default">
        <div class="panel-heading">Workplaces</div>
        <div class="panel-body">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Workplace</th>
                    <th>City</th>
                    <th>Country</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($workplaces as $workplaces){
                    ?>
                    <tr>
                        <td><?php  echo $workplaces->ID; ?></td>
                        <td><?php  echo $workplaces->workplace; ?></td>
                        <td><?php  echo $workplaces->city; ?></td>
                        <td><?php echo $workplaces->country;?></td>
                        <td><a href="<?php echo base_url('index.php/Workplaces/zmen/'.$workplaces->ID); ?>"><button type="submit" class="btn btn-info">Zmeniť</button></a>
                            <a href="<?php echo base_url('index.php/Workplaces/vymaz/'.$workplaces->ID); ?>"><button type="submit" class="btn btn-danger">Vymazať</button></a></td></td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
    <center><a href="<?php echo base_url('index.php/Workplaces/pridaj'); ?>"><button type="submit" class="btn btn-primary">Pridať záznam</button></a></center>
</div>