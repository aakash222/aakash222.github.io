<section id="publications" class="mt-5">
          <h3 class="display-5">Publications</h3>
          <hr>
	    <?php foreach($publications as $publicationItem) {?>
	    <div class="row mb-4" >
		<div class="col-sm-12 col-md-12 mb-2"> <?php echo nl2br($publicationItem['title']);?></div>
		<?php if($publicationItem['slide'] != "" || $publicationItem['paper'] !="" ) { ?>
		<div class="col-sm-12 col-md-12 mb-2"> 
			<?php if($publicationItem['paper'] != "") { ?><a class="mr-5" href="<?php echo $publicationItem['paper'];?>"><i class="fas fa-file"></i> Paper</a> <?php } ?>
			<?php if($publicationItem['slide'] != "") { ?><a href="<?php echo $publicationItem['slide'];?>"><i class="far fa-file-powerpoint"></i> Slides</a><?php } ?>
		</div>
		<?php } ?>
	    </div>
            <?php } ?>
</section>

