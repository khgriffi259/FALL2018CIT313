<?php
include('views/elements/header.php');?>
<div id="background">
    <div  class="container">
        <div class="page-header">
        <!-- <h1>Latest News from <?php echo $rss_title ?></h1> -->
            <h1 class="text">IUPUI CIT313 Final Project</h1>
        </div>
        <!-- <div class="alert alert-success">      
            <?php echo $message;?>
        </div> -->
        
        <!-- <img src="views/img/pacers.jpg" class="img-fluid" alt=""> -->
        <?php  
        foreach ($feed_data->channel->item as $item) {
            echo '<div class="well">';
                echo '<a href="'.$item->link.'">'.$item->title.'</a> <br/>';
                echo $item->description.'<br/>';
                echo $item->pubDate;
            echo '</div>';
            // echo '<hr>';
        }
        // foreach ($items as $item) {
        //     echo '<a href="'.$item->link.'">'.$item->title.'</a> <br/>';
        //     echo $item->description.'<br/>';
        //     echo $item->pubDate;
        //     echo '<hr>';
        // }
        ?>
    </div>
</div>
<?php include('views/elements/footer.php');?>