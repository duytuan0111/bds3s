<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class PostNews extends CI_Controller
{
	protected $_data;

	function __construct()
	{
		parent::__construct();
		$this->load->helper('cookie');
        $this->load->model('M_PostNews');
	}
	public function PostNewsAfterLogin() {
		$this->_data['canonical']				= base_url();
		$this->load->view('site/PostAfterLogin', $this->_data);
	}
    public function PostHomeDesignBeforeLogin() {
		$this->_data['canonical']				= base_url();
		$this->load->view('site/PostHomeDesignBeforeLogin', $this->_data);
	}
    public function PostNewsBeforeLogin() {
		$this->_data['canonical']				= base_url();
		$this->load->view('site/PostNewsBeforeLogin', $this->_data);
	}
    public function PostProjectBeforeLogin() {
		$this->_data['canonical']				= base_url();
		$this->load->view('site/PostProjectBeforeLogin', $this->_data);
	}
    public function PostRoomDesignBeforeLogin() {
		$this->_data['canonical']				= base_url();
		$this->load->view('site/PostRoomDesignBeforeLogin', $this->_data);
	}
    public function PostTypeAfterLogin() {
		$this->_data['canonical']				= base_url();
		$this->load->view('site/PostTypeAfterLogin', $this->_data);
	}
}
?>