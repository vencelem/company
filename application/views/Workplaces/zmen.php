<div class="container">
    <center><h3>Pridaj záznam</h3></center>
    <form action="<?php echo base_url('index.php/Workplaces/aktualizuj') ?>" method="post">
        <input type="hidden" name="txt_hidden" value="<?php echo $workplaces->ID; ?>">
        <div class="form-group">
            <label for="pwd">Workplace:</label>
            <input type="text" value="<?php echo $workplaces->workplace; ?>" class="form-control" name="workplace">
        </div>

        <div class="form-group">
            <label for="pwd">City:</label>
            <input type="text" value="<?php echo $workplaces->city; ?>" class="form-control" name="city">
        </div>

        <div class="form-group">
            <label for="pwd">Country:</label>
            <input type="text" value="<?php echo $workplaces->country; ?>" class="form-control" name="country">
        </div>

        <center>
            <a href="<?php echo base_url('index.php/Workplaces/index'); ?>"<button type="submit" class="btn btn-warning">Späť</button></a>
            <button type="submit" class="btn btn-success">Odoslať</button></a>
        </center>
    </form>
</div>