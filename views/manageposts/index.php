<?php include('views/elements/header.php');?>

<div class="container">
	<div class="page-header">
   <h1>Manage Posts</h1>
  </div>

  <?php if($message){?>
    <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
    	<?php echo $message?>
    </div>
  <?php }?>

  <div class="row">
      <div class="span8">

        <a href="<?php echo BASE_URL;?>manageposts/add" class="btn btn-primary">Add Post</a>
				<a href="<?php echo BASE_URL; ?>managecategories/" class="btn btn-primary">Manage Categories</a>
				<hr>
				<?php foreach ($posts as $p) { ?>
							 <div>
									 <h4><a href="<?php echo BASE_URL ?>blog/post/<?php echo $p['pID']; ?>"
													title="<?php echo $p['title']; ?>"><?php echo $p['title']; ?></a></h4>
									 <sub><?php echo 'Posted on ' . $p[date] . ' by <a href="' . BASE_URL . 'members/users/' . $p[uid] . '">' . $p[first_name] . ' ' . $p[last_name] . '</a> in <a href="' . BASE_URL . 'category/view/' . $p[categoryid] . '">' . $p[name] . '</a>' ?></sub>
									 <?php if($u->isAdmin()){?>
									 <div style="margin-top: 20px;">
											 <a href="<?php echo BASE_URL . 'blog/post/' . $p['pID'] ?>" class="btn btn-primary">View Post</a>
											 <a href="<?php echo BASE_URL . 'manageposts/edit/' . $p['pID'] ?>" class="btn btn-success">Edit Post</a>
											 <a href="<?php echo BASE_URL . 'manageposts/delete/' . $p['pID'] ?>" class="btn btn-warning">Delete Post</a>

										<?php }?>
									 </div>
							 </div>
					 <?php } ?>

			 </div>
	 </div>
</div>
<?php include('views/elements/footer.php');?>
