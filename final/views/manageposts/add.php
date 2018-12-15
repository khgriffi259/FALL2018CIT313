<?php include('views/elements/header.php');?>
<!-- <div id="background"> -->
<div id="background">
<div class="container">
	<div class="page-header">
   <h1>Add Post</h1>
  </div>
  
  <?php if($message){?>
    <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
    	<?php echo $message?>
    </div>
  <?php }?>
  
          <!-- error messages div -->
          <div id="fields_with_errors"></div>


  <div class="row">
      <div class="span8">
        <form action="<?php echo BASE_URL?>manageposts/<?php echo $task?>" id="addpost" method="post" onsubmit="return validate_form() && editor.post()">
          <label>Title</label>
          <input type="text" class="span6" id="title" name="title" value="<?php echo $title?>" >
     	  
          <label for="date">Date</label>
          <?php // set timezone
date_default_timezone_set('America/Indiana/Indianapolis');?>
          <input name="date" id="date" size="16" type="date" value="<?php echo $date = date('Y-m-d H:i:s'); ?>" >
          
          <label for="category">Category</label>
          <select class="input-sm" name="category" id="category">
          <option value="">-- Select Category --</option>
          
          <?php
            foreach($categories as $key => $value){
              if($category == $key){
				  echo "<option selected value='".$key."'>".$value."</option>" . "\n";
              }
              else {
				  echo "<option value='".$key."'>".$value."</option>" . "\n";
              }
			 
			}
          ?>
          
          </select>
        
          <label>Content</label>
          <!-- there is something wrong with the tiny editor field. i changed it to standard text area -->
          <textarea id="postentry" name="content" style="width:556px;height: 200px" ><?php echo $content?></textarea>
    			<br/>
          <input type="hidden" name="pID" value="<?php echo $pID?>"/>
          
          <button id="submit" type="submit" class="btn btn-primary" >Submit</button>
        </form>

        
      </div>
    </div>
  </div>
</div>
<!-- </div> -->

<?php include('views/elements/footer.php');?>

