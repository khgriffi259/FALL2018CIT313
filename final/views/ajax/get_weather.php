<?php 

    echo '<h1> Weather for ' . $response->request->query . '</h1>';
    echo '<h4>Today\'s High '. $response->weather->maxtempF . '</h4>';
    echo '<h4>Today\'s Low ' . $response->weather->mintempF . '</h4>';
?>