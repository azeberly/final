<?php
include('views/elements/header.php');?>
<div class="container">
	<div class="page-header">
    <h1>Alex Eberly CIT31300 Final Project </h1>
	<h2>Latest News from <?php echo $title;?></h2>
	<img src="sports.jpg" alt="Sports!!!" style="width:1100px;height:250px;">
  </div>
    <?php
    echo $data;
    ?>
</div>
<?php include('views/elements/footer.php');?>