<div class="container margin">
    <div class="panel panel-default">
        <div class="panel-heading">Employees</div>
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