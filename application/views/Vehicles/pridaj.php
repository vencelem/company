<div class="container">
    <center><h3>Pridaj záznam</h3></center>
    <form action="<?php echo base_url('index.php/Vehicles/potvrd') ?>" method="post">
        <div class="form-group">
            <label for="pwd">Brand:</label>
            <input type="text" class="form-control" name="brand">
        </div>

        <div class="form-group">
            <label for="pwd">Model:</label>
            <input type="text" class="form-control" name="model">
        </div>

        <div class="form-group">
            <label for="pwd">Average consumption:</label>
            <input type="text" class="form-control" name="avgc">
        </div>

        <center>
            <a href="<?php echo base_url('index.php/Vehicles/index'); ?>"<button type="submit" class="btn btn-warning">Späť</button></a>
            <button type="submit" class="btn btn-success">Odoslať</button></a>
        </center>
    </form>
</div>