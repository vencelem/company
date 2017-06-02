<div class="container margin">
    <div class="panel panel-default">
        <div class="panel-heading">Workplaces</div>
        <div class="panel-body">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Surename</th>
                    <th>Email</th>
                    <th>Number</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($employees as $employees){
                    ?>
                    <tr>
                        <td><?php  echo $employees->ID; ?></td>
                        <td><?php  echo $employees->name; ?></td>
                        <td><?php  echo $employees->Surname; ?></td>
                        <td><?php echo $employees->email;?></td>
                        <td><?php  echo $employees->number; ?></td>
                        <td><?php  echo $employees->adress; ?></td>
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