<div class="container">
    <center><h3>Pridaj záznam</h3></center>
    <form action="<?php echo base_url('index.php/Employees/potvrd') ?>" method="post">
        <div class="form-group">
            <label for="pwd">Name:</label>
            <input type="text" class="form-control" name="name">
        </div>

        <div class="form-group">
            <label for="pwd">Surname:</label>
            <input type="text" class="form-control" name="surname">
        </div>

        <div class="form-group">
            <label for="pwd">Email:</label>
            <input type="text" class="form-control" name="email">
        </div>

        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="text" class="form-control" name="pasword">
        </div>

        <div class="form-group">
            <label for="pwd">Number:</label>
            <input type="text" class="form-control" name="number">
        </div>

        <div class="form-group">
            <label for="pwd">Address:</label>
            <input type="text" class="form-control" name="adress">
        </div>

        <center>
            <a href="<?php echo base_url('index.php/Employees/index'); ?>"<button type="submit" class="btn btn-warning">Späť</button></a>
            <button type="submit" class="btn btn-success">Odoslať</button></a>
        </center>
    </form>
</div>