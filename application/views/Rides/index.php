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
                        <td>Edit, delete</td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>