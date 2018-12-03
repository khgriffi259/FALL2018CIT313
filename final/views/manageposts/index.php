<?php include('views/elements/header.php');?>

<div class="container">
    <div class="page-header">
        <h1><?php echo $title; ?></h1>
    </div>
  
    <?php if($message){?>
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <?php echo $message?>
    </div>
    <?php }?>
  

    <div>
        <a href="<?php echo BASE_URL?>manageposts/add/" class="btn btn-primary">Add Post</a>
        <a href="<?php echo BASE_URL?>categories/" class="btn btn-primary">Manage Categories</a>
    </div> 

    <br>
    <br>

    <?php foreach($posts as $p){?>
       
    <div class="well">
        <h3><a href="<?php echo BASE_URL?>blog/post/<?php echo $p['pID'];?>" title="<?php echo $p['title'];?>"><?php echo $p['title'];?></a></h3>
        <!-- <p><?php echo $p['content'];?></p> -->        
        <sub><?php echo 'Posted on ' . $p[date] . ' by <a href="'.BASE_URL.'members/view/'. $p[uid]. '">' . $p[first_name] . ' ' . $p[last_name] . '</a> in <a href="'.BASE_URL.'category/view/'. $p[categoryid].'">' . $p[name] .'</a>' ?></sub>
        
        <div style="margin-top: 15px;">
            <a href="<?php echo BASE_URL?>blog/post/<?php echo $p['pID'];?>" class="btn btn-primary">View Post</a>

            <form action="<?php echo BASE_URL?>manageposts/edit/<?php echo $p['pID'];?>" method="post" style="display:inline"> 
                <input type="hidden" name="pID" value="<?php echo $p['pID'];?>">
                <button type="submit" class="btn btn-warning">Edit</button>
            </form>    

            <form action="<?php echo BASE_URL?>manageposts/delete/" method="post" style="display:inline"> 
                <input type="hidden" name="pID" value="<?php echo $p['pID'];?>">
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>    
        </div>
    </div>
        
    <?php }?>

    </div>
    
<?php include('views/elements/footer.php');?>

