<div class="container">
    <center><h3>Pridaj záznam</h3></center>
    <form action="<?php echo base_url('index.php/Visited_workplaces/potvrd') ?>" method="post">
        <div class="form-group">
            <label>Workplaces:</label>
            <select name="workplaces_ID">
                <?php
                if($workplace){
                    foreach($workplace as $workplace){
                        ?>
                        <option value="<?php echo $workplace->ID; ?>"><?php echo $workplace->ID; ?></option>
                        <?php
                    }
                }
                ?>
            </select>
        </div>

        <div class="form-group">
            <label>Rides:</label>
            <select name="rides_ID">
                <?php
                if($ride){
                    foreach($ride as $ride){
                        ?>
                        <option value="<?php echo $ride->ID; ?>"><?php echo $ride->ID; ?></option>
                        <?php
                    }
                }
                ?>
            </select>
        </div>

        <center>
            <a href="<?php echo base_url('index.php/Visited_workplaces/index'); ?>"<button type="submit" class="btn btn-warning">Späť</button></a>
            <button type="submit" class="btn btn-success">Odoslať</button></a>
        </center>
    </form>
</div>