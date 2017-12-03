<?php include('views/elements/header.php');?>

<div class="container">
	<div class="page-header">
		<h1>Manage Categories</h1>

  		<?php if($message){?>
    <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
    	<?php echo $message?>
    </div>
		<?php }?>
	</div>
		<?php foreach($categories as $c){?>
	            <h3><?php echo $c['name'];?></h3>
	            <a id="edit" class="btn btn-primary" href="<?php echo BASE_URL?>managecategories/edit/<?php echo
	            $c['categoryID'];
	            ?>/">Edit Category</a>
	            <a id="delete" class="btn btn-primary" href="<?php echo BASE_URL?>managecategories/delete/<?php echo
	            $c['categoryID'];
	            ?>/">Delete Category</a>
	        <?php }?>
	<br>
	<hr>
	<br>
	 <form action="<?php echo BASE_URL ?>managecategories/add" method="post">
	 	<label for="category">New Category</label>
		<input type="text" name="category" class="input-sm" id="category" required="category">
		<input type="submit" class='btn btn-primary'></button>
	 </form>

</div>

<?php include('views/elements/footer.php');?>
