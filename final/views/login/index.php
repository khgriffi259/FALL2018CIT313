<?php
include('views/elements/header.php')
;?>
<div id="background">
    <div class="container">
        <div class="page-header">
            <h1>Login</h1> 
            <?php if(isset($error)) { ?>
                <div class="alert alert-danger">
                    <?php echo $error;?>
                </div>
            <?php };?>   
        </div>
        
        <!-- error messages div -->
        <div id="fields_with_errors"></div>

        <?php include('views/elements/login_form.php');?>
    </div>
</div>

<?php include('views/elements/footer.php');?>

