<?php
include('views/elements/header.php');
?>

<div id="background">
  <div class="container">
    
    <div class="page-header">
      <h1>Update Profile</h1>
    </div>
   
    <?php if($message){?>
      <div class="alert alert-success">
      <button type="button" class="close" data-dismiss="alert">×</button>
        <?php echo $message?>
      </div>
    <?php }?>

      <!-- error messages div -->
    <div id="fields_with_errors"></div>

    <?php include ('views/elements/update_profile_form.php');
    echo '<p><a href="'.BASE_URL.'">Back to home page</a></p>';
    ?>

  </div>
</div>

<?php include('views/elements/footer.php');?>