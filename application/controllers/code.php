<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Code extends CI_Controller {

	public function index()
	{
        $this->lists();
	}
    
    public function lists(){
        $this->load->view('welcome_message');
    }
}

/* End of file code.php */
/* Location: ./application/controllers/code.php */

?>