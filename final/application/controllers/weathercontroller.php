<?php

class WeatherController extends Controller{
	
	public $result;

	public function index(){
		
		$this->set(result,false);
	}
	
	public function getResults(){
		$xml = simplexml_load_file("http://api.worldweatheronline.com/premium/v1/weather.ashx?key=973bc37c41e94239a26221305181811&q=".$_POST['zip']."&format=xml&num_of_days=2");
		// $xml = simplexml_load_file("http://api.worldweatheronline.com/premium/v1/weather.ashx?key=973bc37c41e94239a26221305181811&q=46063&format=xml&num_of_days=2");
		$this->set(result,true);
		$this->set('weather',$xml);

	}

}

?>

