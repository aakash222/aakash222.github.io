<section id="education" class="mt-5">
          <h3 class="display-5">Education</h3>
          <hr>
	    <?php foreach($education as $trajectoryItem) {?>
	    <div class="row mb-4" >
		<div class="col-sm-12 col-md-7" style="font-weight: bold;  font-size: 1rem;"> <?php echo $trajectoryItem['title'];?> | <?php echo $trajectoryItem['stream'];?></div>
		<div class="col-sm-12 col-md-5" style="text-align:right; font-size: 1rem;"><i class="fas fa-calendar-alt"></i> <?php echo $trajectoryItem['duration'];?></div>
		<div class="col-sm-12 col-md-12 mb-2" style="font-size: 1.2rem;"> <?php echo $trajectoryItem['institute'];?></div>
		<div class="col-sm-12 col-md-12 mb-2" style="font-size: 1rem;">  <?php if($trajectoryItem['scoreText'] != "" ) { echo $trajectoryItem['scoreText'] . " : "; } ?> <span class="badge badge-primary" style="font-size: 1rem;"> <?php echo $trajectoryItem['score'];?></span></div>
		<div class="col-sm-12 col-md-12 mb-2"> <?php echo nl2br($trajectoryItem['description']);?></div>
		<div class="col-sm-12 col-md-12">
			<?php foreach($trajectoryItem['notable_mentions'] as $notable_mentions) {?>
        	          <i class="fas fa-trophy"></i> <?php echo $notable_mentions;?> <br/>
	                <?php } ?>
		</div>
	    </div>
            <?php } ?>
</section>

