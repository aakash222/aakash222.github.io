<!DOCTYPE html>
<!--
 - File              : index.html
 - Author            : Marcos Horro <marcos.horro@udc.gal>
 - Last Modified Date: Mar 18 Set 2018 15:46:32 CEST
-->
<?php 
include "./config.php";
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?php echo $name;?></title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/custom.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/jpswalsh/academicons@1/css/academicons.min.css">
  </head>

  <body>
    <!-- header -->
    <header>
	<?php include("menu.php");?>
    </header>

    <!-- Begin page content -->
    <main role="main" class="container">
    <div class="row">
      <div class="col-md-4 col-sm-12 mx-auto d-block">
        <div class="row mt-5 mx-auto d-block text-center">
	<img src="<?php echo $profileImg;?>" class="img-fluid rounded-circle mb-3" style="max-width: 200px" alt="Profile picture">
	  <h4><?php echo $name;?></h4>
	  <p class="lead mb-0"><?php echo $currentdesignation;?></p>
	  <?php if(!empty($currentTeam)) {?>
	  <p class="font-weight-light mb-0"><?php if($currentTeam['link'] != "") { ?><a href="<?php echo $currentTeam['link'];?>"><?php }?><?php echo $currentTeam['name']; ?><?php if($currentTeam['link'] != "") { ?></a><?php }?></p>
	  <?php }?>
	  <?php if(!empty($currentAssociation)) {?>
          <p class="font-weight-light mb-0"><?php if($currentAssociation['link'] != "") { ?><a href="<?php echo $currentAssociation['link'];?>"><?php }?><?php echo $currentAssociation['name']; ?><?php if($currentAssociation['link'] != "") { ?></a><?php }?></p>
          <?php }?>
        </div>
        <hr>
        <div class="row mx-auto d-block">
	<p class="lead text-center "><a href="mailto: <?php echo $workemail;?>"><i class="far fa-envelope"></i></a> <?php echo $workemail;?></p>
	<ul class="social-icons text-center">
			
		<?php if($socialLinks['googlescholar']) {?>
			<li><a href="<?php echo $socialLinks['googlescholar'];?>"><i class="ai ai-google-scholar-square"></i></a></li>
                <?php }?>
		<?php if($socialLinks['linkedin']) {?>
			<li><a href="<?php echo $socialLinks['linkedin'];?>"><i class="fab fa-linkedin"></i></a></li>
		<?php }?>
		<?php if($socialLinks['facebook']) {?>
			<li><a href="<?php echo $socialLinks['facebook'];?>"><i class="fab fa-facebook"></i></a></li>
		<?php }?>
		<?php if($socialLinks['twitter']) {?>
			 <li><a href="<?php echo $socialLinks['twitter'];?>"><i class="fab fa-twitter"></i></a></li>
		<?php }?>
		<?php if($socialLinks['instagram']) {?>
			<li><a href="<?php echo $socialLinks['instagram'];?>"><i class="fab fa-instagram"></i></a></li>
		<?php }?>
        </ul>
        <hr>
	<p class="text-monospace">
		<?php echo nl2br($address);?>
	</p>
	<hr/>
      </div>
      </div>
      <div class="col-md-8 col-sm-12">
	<?php foreach($order as $item) {
		include($filename[$item]);
	} ?>
      </div>
    </div>
    </main>

<?php include('footer.php');?>

<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-slim.min.js"><\/script>')</script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
</script>
  </body>
</html>
