
<?php include('views/elements/header.php');?>
<?php
if( is_array($post) ) {
    extract($post);
 }
 ?>
<div id="background">
    <div class="container">
        
        <div class="page-header">
            <h1><?php echo $title;?></h1>
        </div>
        
        <p><?php echo $content;?></p>
        <sub>
            <?php echo 'Posted on ' . $date . ' by <a href="'.BASE_URL.'members/view/'. $uid.'">'. $first_name . ' ' . $last_name . '</a> in <a href="'.BASE_URL.'category/view/'. $categoryid.'">' . $name .'</a>'; ?>
        </sub>
        
        <h2>View Comments</h2>
       <?php if ($u->isRegistered()){?>
            <a href="#commentToggle" class="btn btn-primary" data-toggle="collapse">Add Comment</a>
            <br>
            <br>
            <div id="commentToggle" class="collapse">
                <form action="<?php echo BASE_URL;?>blog/addComment" method="post">
                    <textarea class="form-control" name="commentText" id="commentText" rows="3"></textarea>
                    <input type="hidden" name="uID" id="uID" value="<?php echo $u->getUserID();?>">
                    <input type="hidden" name="pID" id="pID" value="<?php echo $pID;?>">
                    <br>
                    <input type="submit" id="submitComment" class="btn btn-primary pull-right" value="Comment">
                </form>
            </div>
            <?php foreach($comments as $c){?>
                <div class="well">
                    <div class="row">
                        <div class="span11">
                            <p><?php echo $c['commentText'];?></p>
                            <p>Posted by <?php echo $c['first_name'] .' ' . $c['last_name'];?></p>
                            <p><?php echo $c['date'];?></p>

                        </div>
                        <div class="span1">
                            <?php if ($u->isAdmin()){?>
                                <form action="<?php echo BASE_URL?>blog/removeComment" method="post">
                                    <input type="submit" id="deleteComment" class="btn btn-danger" value="Delete"> 
                                    <input type="hidden" name="commentID" value="<?php echo $c['commentID'];?>"> 
                                </form>
                            <?php } ?>
                        </div>
                    </div>
                </div>                            
            <?php }?> 
        
        <?php } else {?>
            <a href="<?php echo BASE_URL;?>login" class="btn btn-primary">Login</a>
        <?php } ?>

    </div>
</div>

<?php include('views/elements/footer.php');?>