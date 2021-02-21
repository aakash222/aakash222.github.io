      <!-- Fixed navbar -->
        <nav class="navbar navbar-expand-md fixed-top bg-light text-dark">
        <div class="container">
          <a class="navbar-brand" href="./index.php">
                <?php echo $name;?>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars" style="color:black;"></i></button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <?php foreach($order as $currentItem) {?>
                 <li class="nav-item">
                   <a class="nav-link" href="<?php echo $menuItems[$currentItem]['link'];?>"><?php echo $menuItems[$currentItem]['name'];?></a>
                </li>
              <?php }?>
            </ul>
          </div>
            <div class="navbar-brand" style="float:right;"><a href="http://csl.csa.iisc.ac.in">Computer Systems Lab @ CSA, IISc</a></div>
        </div>
        </nav>

