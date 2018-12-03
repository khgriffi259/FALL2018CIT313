<?php include('views/elements/header.php');?>

<div class="container">
	<div class="page-header">
   <h1>Edit Category</h1>
  </div>
  
  <?php if($message){?>
    <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
    	<?php echo $message?>
    </div>
  <?php }?>
  
  <form action="<?php echo BASE_URL?>categories/<?php echo $task?>/<?php echo $value?>" method="POST">
    <label for="editCagory">Edit Category</label>
		<input type="text" name="categoryname" class="input" id="editCategory" value="<?php echo $category['name'];?>">
    <input type="hidden" name="categoryID" value="<?php echo $category['categoryID'];?>">
    <br>
		<input type="submit" class='btn btn-primary' value="Submit">
	 </form>		
  
  

        
      </div>
    </div>
</div>
<?php include('views/elements/footer.php');?>

