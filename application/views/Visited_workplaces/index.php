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