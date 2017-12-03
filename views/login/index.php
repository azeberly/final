<?php include('views/elements/header.php');?>

<div class="container">
	<div class="page-header">
   <h1>Login</h1>

   <?php if(isset($error)) { ?>
        <div class="alert alert-danger">
            <?php echo $error;?>
        </div>
        <?php
		}
        ?>

   <?php include('views/elements/login_form.php');
	 echo '<p><a href="'.BASE_URL.'">Back to home page</a></p>';
	 ?>

  </div>
</div>

<?php include('views/elements/footer.php');?>
