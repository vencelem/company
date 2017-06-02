<div class="container">
    <center><h3>Pridaj záznam</h3></center>
    <form action="<?php echo base_url('index.php/Rides/potvrd') ?>" method="post">
        <div class="form-group">
            <label>Employee:</label>
            <select name="employees_ID">
                <?php
                if($employee){
                    foreach($employee as $employee){
                        ?>
                        <option value="<?php echo $employee->ID; ?>"><?php echo $employee->ID; ?></option>
                        <?php
                    }
                }
                ?>
            </select>
        </div>

        <div class="form-group">
            <label for="pwd">Start:</label>
            <input type="text" class="form-control" placeholder="YYYY-MM-DD HH:MM:SS" name="start">
        </div>

        <div class="form-group">
            <label for="pwd">End:</label>
            <input type="text" class="form-control" placeholder="YYYY-MM-DD HH:MM:SS" name="end">
        </div>

        <div class="form-group">
            <label for="pwd">Distance:</label>
            <input type="text" class="form-control" name="distance">
        </div>

        <div class="form-group">
            <label>Vehicle:</label>
            <select name="vehicles_ID">
                <?php
                if($vehicle){
                    foreach($vehicle as $vehicle){
                        ?>
                        <option value="<?php echo $vehicle->ID; ?>"><?php echo $vehicle->ID; ?></option>
                        <?php
                    }
                }
                ?>
            </select>
        </div>


        <center>
            <a href="<?php echo base_url('index.php/Rides/index'); ?>"<button type="submit" class="btn btn-warning">Späť</button></a>
            <button type="submit" class="btn btn-success">Odoslať</button></a>
        </center>
    </form>
</div>