<?php

class HomeController extends Controller{
  
	public function index(){
		// $feed = 'http://fox59.com/feed';
		$feed = 'https://abcnews.go.com/abcnews/topstories';
		$rss = new RssDisplay($feed);

		$feed_data = $rss->getFeedItems();
		$this->set('feed_data',$feed_data);
		// $items = $rss->getFeedItems();
		// $this->set('items',$feed_data);

		// channel info
		$channel_info=$rss->getChannelInfo();
		$this->set('rss_title',$channel_info);


	}
	
}

?>