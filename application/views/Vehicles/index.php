<div class="container margin">
    <div class="panel panel-default">
        <div class="panel-heading">Vehicles</div>
        <div class="panel-body">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Brand</th>
                    <th>Model</th>
                    <th>Avarage consumption</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($vehicles as $vehicles){
                    ?>
                    <tr>
                        <td><?php  echo $vehicles->ID; ?></td>
                        <td><?php  echo $vehicles->brand; ?></td>
                        <td><?php  echo $vehicles->model; ?></td>
                        <td><?php echo $vehicles->average_consumption;?></td>
                        <td><a href="<?php echo base_url('index.php/Vehicles/zmen/'.$vehicles->ID); ?>"><button type="submit" class="btn btn-info">Zmeniť</button></a>
                            <a href="<?php echo base_url('index.php/Vehicles/vymaz/'.$vehicles->ID); ?>"><button type="submit" class="btn btn-danger">Vymazať</button></a></td></td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
    <center><a href="<?php echo base_url('index.php/Vehicles/pridaj'); ?>"><button type="submit" class="btn btn-primary">Pridať záznam</button></a></center>
</div>