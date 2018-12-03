
<?php include('views/elements/header.php');?>
<?php if(is_array($categories) ) {?>
<div id="background">
    <div class="container">
        
        <div class="page-header">
            <h1><?php echo $title;?></h1>
        </div>
        
        <?php if($message){?>
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <?php echo $message?>
            </div>
        <?php }?>

        <?php foreach($categories as $key => $value){?>
             <div class="well">
                <h3 display="inline"><?php echo $value; ?></h3>
                <form action="<?php echo BASE_URL?>categories/edit/<?php echo $key?>" method="post" style="display:inline;"> 
                    <input type="hidden" name="categoryID" value="<?php echo $key?>">
                    
                    <button type="submit" class="btn btn-warning">Edit</button>
                </form>    
                <form action="<?php echo BASE_URL?>categories/delete" method="post" style="display:inline;"> 
                    <input type="hidden" name="categoryID" value="<?php echo $key?>">
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>    
             </div>
             <?php } ?>
    <?php } ?>
    <br>
    <br>
    <form action="<?php echo BASE_URL?>categories/add" method="POST">
	 	<label for="newCategory">Add A New Category</label>
		<input type="text" name="newCategory" class="input" id="newCategory">
		<br>
		<input type="submit" class='btn btn-primary' value="Submit">
	 </form>		 
    </div>
</div>
        
<?php include('views/elements/footer.php');?>