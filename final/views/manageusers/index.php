
<?php
include('views/elements/header.php');?>
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


    <?php foreach($users as $u){?>
      <div class="well">
        <h3><?php echo $u['first_name'];?> <?php echo $u['last_name'];?></h3>  
        
        <!-- if user is not an admin and is not approved -->
        <?php if($u['user_type'] != 1 AND $u['active'] != 1) {?>
        
        <form action="<?php echo BASE_URL?>manageusers/approve/<?php echo $u['uID'];?>" method="post" style="display:inline"> 
          <input type="hidden" name="uID" value="<?php echo $u['uID'];?>">
          <button type="submit" class="btn btn-primary">Approve</button>
        </form>    
      
      <?php }?>
      
        <!-- if user is not an admin, show the delete button -->
      <?php if($u['user_type'] != 1) {?>
        
        <form action="<?php echo BASE_URL?>manageusers/delete/" method="post" style="display:inline"> 
            <input type="hidden" name="uID" value="<?php echo $u['uID'];?>">
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>    
      
      <?php }?>

      </div>
    <?php }?>
      
    </div>
  </div>

<?php include('views/elements/footer.php');?>