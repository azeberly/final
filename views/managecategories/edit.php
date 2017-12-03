<?php include('views/elements/header.php'); ?>

<div class="container">
    <div class="page-header">
        <h1>Edit Category Name</h1>
    </div>

    <?php if ($message) { ?>
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <?php echo $message ?>
        </div>
    <?php } ?>

    <div class="row">
        <div class="span8">
            <form action="<?php echo BASE_URL?>managecategories/<?php echo $task?>" method="post" onsubmit="editor.post()">
                <input type="hidden" name="categoryID" value="<?php echo $categoryID ?>" />
                <label>Edited Category Name:<?php REQFIELD ?></label>
                <input type="text" class="span6" name="name" required="name">
                <button id="submit" type="submit" class="btn btn-primary">Submit Edit!</button>
            </form>


        </div>
    </div>
</div>
<?php include('views/elements/footer.php'); ?>
