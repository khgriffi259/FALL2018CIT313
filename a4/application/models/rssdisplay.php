<?php

class RssDisplay extends Model {

    protected $feed_url;
    protected $num_items;

    public function __construct($url){

        parent::__construct();

        $this->feed_url = $url;
    }

    public function getFeedItems(){
        // $this->num_items = $num_feed_items;
        $items = simplexml_load_file($this->feed_url);
        
        return $items;
    }
    // public function getFeedItems($num_feed_items){
        
    //     $this->num_items = $num_feed_items;
    //     $feed_data = simplexml_load_file($this->feed_url);
    //     $items = array();
        
    //     for($n = 0; $n < $this->num_items; $n++) {
    //         // $item = array(
    //         //     'title'=> $feed_data->$item[$n]->title,
    //         //     'link'=> $feed_data->$item[$n]->link,
    //         //     'description'=> $feed_data->$item[$n]->description,
    //         //     'pub'=> $feed_data->$item[$n]->pubDate
    //         // );

    //         $item = $feed_data->item[$n];
    //         array_push($items,$item);
    //     }
    //     return $items;
    // }

    public function getChannelInfo(){
        $feed_data = $this->getFeedItems();
        return $feed_data->channel->title;
    }
}
