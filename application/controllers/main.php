<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	
	public function index()
	{
            echo 'Hello Intranet';
	}
        
        public function test(){
            echo 'test OK!';
        }
        
        public function hi(){
            echo 'hi';
        }
        
}

/* End of file main.php */
/* Location: ./application/controllers/main.php */