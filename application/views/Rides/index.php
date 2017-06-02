<div class="container margin">
    <div class="panel panel-default">
        <div class="panel-heading">Rides</div>
        <div class="panel-body">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Employee</th>
                    <th>Start</th>
                    <th>End</th>
                    <th>Distance</th>
                    <th>Vehicle</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($rides as $rides){
                    ?>
                    <tr>
                        <td><?php  echo $rides->ID; ?></td>
                        <td><?php  echo $rides->employees_ID; ?></td>
                        <td><?php  echo $rides->start; ?></td>
                        <td><?php echo $rides->end;?></td>
                        <td><?php  echo $rides->distance; ?></td>
                        <td><?php echo $rides->vehicles_ID;?></td>
                        <td><a href="<?php echo base_url('index.php/Rides/zmen/'.$rides->ID); ?>"><button type="submit" class="btn btn-info">Zmeniť</button></a>
                            <a href="<?php echo base_url('index.php/Rides/vymaz/'.$rides->ID); ?>"><button type="submit" class="btn btn-danger">Vymazať</button></a></td></td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
            <center>
                <?php echo $this->pagination->create_links() ?>
            </center>
        </div>
    </div>
    <center><a href="<?php echo base_url('index.php/Rides/pridaj'); ?>"><button type="submit" class="btn btn-primary">Pridať záznam</button></a></center>
</div>

