
    <?php include 'includes/header.php'; ?>
        <?php $favorites = array('name'=> 'Kyle', 'color' => 'blue', 'movie'=>'Super Troopers', 'book'=> 'How to be a 3% Man','website'=> 'www.youtube.com' );?>
            <h1> <?php echo $favorites['name'];?> </h1> 
            <ul>
                <?php 
                    
                    //exclude name key
                    $favorites_no_name = arrayExclude($favorites, array('name'));

                    printFavorites($favorites_no_name);

                    function printFavorites($array){
                        foreach($array as $key=>$value):
                            // if($favorite = 'name'){
                                echo '<li>' . $key . ': ' . $value . '</li>';
                            // }    
                        endforeach;
                    }

                    function arrayExclude($array, $excludeKeys){
                        foreach($excludeKeys as $key):
                            unset($array[$key]);
                        endforeach;
                        return $array;
                    }

                ?>
            </ul>

    <?php include 'includes/footer.php'; ?>

