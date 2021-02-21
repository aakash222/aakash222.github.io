<section id="projects" class="mt-5">
          <h3 class="display-5">Projects</h3><hr>
          <ul class="timelinelist">
          <?php foreach($projects as $project) {?>
	    <li><a href="<?php echo $project['projectUrl']; ?>"><?php echo $project['title']; ?></a> <span class="badge badge-primary"><?php echo $project['technologiesUsed']; ?></span> 
	    <br>
	    <?php echo nl2br(trim($project['description'])); ?>
	   </li>
          <?php }?>
          </ul>
</section>

