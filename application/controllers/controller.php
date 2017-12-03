<?php

class Controller {

  public $view;
	public $data = array();
  protected $access;

	function __construct($view, $method = null, $parameters = null){

    $this->view = new View();
		new Model();
    $u = new Users();

    if($this->access == 1 && !$u->isAdmin()) {
      $_SESSION['redirect'] = $view;
      header('Location: '.BASE_URL.'login/');
    }
    else {
      if($method){
        $this->runTask($method, $parameters);
            }
            else{
              $this->index();
              $method = 'index';
            }

            if(file_exists('views/'.strtolower($view).'/'.strtolower($method).'.php')) {
              $this->view->load($view,$method,$this->data);
            }
            else {
              $this->view->load($view,'index',$this->data);
            }
          }
        }

  public function runTask($method, $parameters = null){

    if($method && method_exists($this, $method)) {
      if(!is_array($parameters)){
        $parameters = array();
					}
          call_user_func_array(array($this, $method), $parameters);
        	}
        }

  public function index(){

	}

  public function set($key, $value){

    $this->data[$key] = $value;
  }
  
}

?>
