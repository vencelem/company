<body xmlns="http://www.w3.org/1999/html">

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand">Som tu</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="<?php echo base_url() ?>">Home</a></li>
                <li class="active"><a href="<?php echo site_url('Home/jazdy/') ?>">Jazdy</a></li>
                <li><a href="<?php echo site_url('Home/zamestnanci') ?>">Zamestnanci</a></li>
                <li><a href="<?php echo site_url('Home/vozidla/') ?>">Vozidlá</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>

</nav>




<div class="container margin">
    <div class="panel panel-default">
        <div class="panel-heading">Rides</div>
        <div class="panel-body">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Surname</th>
                    <th>Car - brand</th>
                    <th>Car - model</th>
                    <th>Start</th>
                    <th>End</th>
                    <th>Distance</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($rides as $ride){
                    ?>
                    <tr>
                        <td><?php  echo $ride['name']; ?></td>
                        <td><?php  echo $ride['surname']; ?></td>
                        <td><?php  echo $ride['brand']; ?></td>
                        <td><?php echo $ride['model'];?></td>
                        <td><?php  echo $ride['start']; ?></td>
                        <td><?php  echo $ride['end']; ?></td>
                        <td><?php  echo $ride['distance']; ?></td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>



