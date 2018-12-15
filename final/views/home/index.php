<?php
include('views/elements/header.php');?>
<div id="background">
    <div class="container">
        <div class="page-header">
        <!-- <h1>Latest News from <?php echo $rss_title ?></h1> -->
            <h1 class="text">IUPUI CIT313 Final Project</h1>
        </div>
        <!-- <div class="alert alert-success">      
            <?php echo $message;?>
        </div> -->
        
        <!-- <img src="views/img/pacers.jpg" class="img-fluid" alt=""> -->
        <?php  
        echo '<div class="pull-left" style="width:75%;">';
        foreach ($feed_data->channel->item as $item) {
            echo '<div class="well">';
                echo '<a href="'.$item->link.'">'.$item->title.'</a> <br/>';
                echo $item->description.'<br/>';
                echo $item->pubDate;
            echo '</div>';
        }
        echo '</div>';
        ?>
    <!-- <form method="post" action="<?php echo BASE_URL?>weather/getResults" class="pull-right"> -->
    <form method="post" action="<?php echo BASE_URL?>ajax/get_weather" class="pull-right weather-loader">
      
      <label for="zip">Enter Your Zip Code</label>
      <input type="text" name="zip" id="zip" required="zip">
      <br>
      <button type="submit" class="btn btn-primary">Load Results</button>

    </form>
        </div>

    </div>
<?php include('views/elements/footer.php');?>