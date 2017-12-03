<?php

class WeatherController extends Controller{

	public function index(){

		$this->set('result',false);
	}

	public function getresults() {

	$xml = simplexml_load_file("http://api.worldweatheronline.com/free/v2/weather.ashx?q=".$_POST['zip']."&format=xml&num_of_days=2&key=d11aad8dc3cac2c7db9b3d6e99c84");
    $this->set('result',true);
    $this->set('weather',$xml);
	}
}

?>
