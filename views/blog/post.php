
<?php include('views/elements/header.php');?>
<?php
if( is_array($post) ) {
    extract($post);

}?>

<div class="container">
    <div class="page-header">
       <h1><?php echo $title;?></h1>
    </div>
<p><?php echo $content;?></p>
<hr>
<sub><?php echo 'Posted on ' . $date . ' by <a href="'.BASE_URL.'members/users/'. $uid.'">'. $first_name . ' ' . $last_name . '</a> in <a href="'.BASE_URL.'blog/category/'. $categoryid.'">' . $name .'</a>'; ?>
</sub>
<hr>
<br>
<br>
  <div class="comment-body">
    <h3>Comments:</h3>
    <?php foreach ($comments as $c) {?>
      <div class="well">
        <p><?php echo $c['commentText']; ?></p>
         Comment by:<?php echo $c['first_name'];?> <?php echo $c['last_name'];?><br>
         Posted:<?php echo $c['date'];?><br>

         <?php if ($u->isAdmin()) { ?>
           <a id="delete" class="btn btn-primary" href="<?php echo BASE_URL?>blog/delete/<?php echo $c['commentID'];?>/">Delete Comment</a>
         <?php }?>
      </div>
    <?php } ?>

<?php if($u->isRegistered()) { ?>
 
<form id="comment_form" action="<?php echo BASE_URL;?>blog/add" method="post">
    <input type="hidden" id="pID" name="pID" value="<?php echo $pID ?>" />
    <input type="hidden" id="uID" name="uID" value="<?php echo $u->uID ?>" />

    <label for="comment">Comment:</label>
    <textarea id="comment" name="comment" style="width: 654px; height: 60px" required></textarea>
    <br />

    <button id="submit" type="submit" class="btn btn-primary" >Add Comment</button>
</form>
<?php } else { ?>
    <a href="<?php echo BASE_URL?>login/" class="btn btn-primary">Login to Comment.</a>
<?php } ?>
<hr >

  </div>
</div>

<?php include('views/elements/footer.php');?>
