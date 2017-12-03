<?php include('views/elements/header.php');?>

<?php if(!$result) {?>
<div class="container" id="wx">
    <div class="page-header">

       <h1>Weather</h1>
    </div>
    <form method="post" action="<?php echo BASE_URL?>weather/getresults">

        <label for "zip">Enter Your Zip Code</label>
        <input type="text" name="zip" id="zip" required="zip" />
        <br/>
        <button type="submit" class="btn">Load Results</button>
    </form>
    <?php
    }
    else {
    ?>
</div>

<div class="container">
	<div class="page-header">
     <h1>Weather for <?php echo $weather->request->query;?></h1>
    </div>
  <h4>Today's High: <?php echo $weather->weather->maxtempF;?></h4>
  <h4>Today's Low: <?php echo $weather->weather->mintempF;?></h4>
</div>

<?php } ?>

<?php include('views/elements/footer.php');?>
