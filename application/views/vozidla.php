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
            <a class="navbar-brand" >Som tu</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="<?php echo base_url() ?>">Home</a></li>
                <li><a href="<?php echo site_url('Home/jazdy/') ?>">Jazdy</a></li>
                <li><a href="<?php echo site_url('Home/zamestnanci') ?>">Zamestnanci</a></li>
                <li class="active"><a href="<?php echo site_url('Home/vozidla/') ?>">Vozidlá</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>

</nav>




<div class="container margin">
    <div class="panel panel-default">
        <div class="panel-heading">Vehicles</div>
        <div class="panel-body">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Brand</th>
                    <th>Model</th>
                    <th>Average consumption</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($vozidla as $vozidlo){

                    ?>
                    <tr>
                        <td><?php  echo $vozidlo['brand']; ?></td>
                        <td><?php  echo $vozidlo['model']; ?></td>
                        <td><?php  echo $vozidlo['average_consumption']; ?></td>
                    </tr>
                    <?php
                }
                ?>
        </div>
    </div>
</div>




