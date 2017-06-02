<div class="container margin">
    <div class="panel panel-default">
        <div class="panel-heading">Employees</div>
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