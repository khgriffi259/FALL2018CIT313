<?php
include('views/elements/header.php');?>
<div class="container">
	<div class="page-header">
    <h1>Latest News from <?php echo $rss_title ?></h1>
  </div>
    <div class="alert alert-success">      
        <?php echo $message;?>
    </div>
    
    <?php  
    foreach ($feed_data->channel->item as $item) {
        echo '<a href="'.$item->link.'">'.$item->title.'</a> <br/>';
        echo $item->description.'<br/>';
        echo $item->pubDate;
        echo '<hr>';
    }
    // foreach ($items as $item) {
    //     echo '<a href="'.$item->link.'">'.$item->title.'</a> <br/>';
    //     echo $item->description.'<br/>';
    //     echo $item->pubDate;
    //     echo '<hr>';
    // }
    ?>
  
</div>
<?php include('views/elements/footer.php');?>