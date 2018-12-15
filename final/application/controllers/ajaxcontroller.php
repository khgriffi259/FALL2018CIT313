<?php

class AjaxController extends Controller{
	
	protected $postObject;
	protected $userObject;
	protected $categoryObjet;
	protected $rssObject;
	
	public function index(){
		$this->set('response','Invalid Request');
	}
	
	public function get_post_content() {
		$this->postObject = new Post();
		$post = $this->postObject->getPost($_GET['pID']);
		$this->set('response',$post['content']);
	}

	public function get_weather(){
		$xml = simplexml_load_file("http://api.worldweatheronline.com/premium/v1/weather.ashx?key=973bc37c41e94239a26221305181811&q=".$_POST['zip']."&format=xml&num_of_days=2");
		$this->set('response',$xml);
	}


}

?>