<?php defined('BASEPATH') OR exit('No direct script access allowed');

class General extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //Helpers
        $this->load->helper('url');
        //Libraries
        //$this->load->library("Bbdd");
        $this->load->library('parser');

        $data = array ('url' => base_url());
        $this->parser->parse('header', $data);

    }

	public function index()
	{
        $data = array ('url' => base_url());
	    $this->parser->parse('general/index', $data);
	}

	public function example()
    {
        $i = 0;
        for($i < 3; $i++;){
            $name = Bbdd::getRowWhere('test', $i);
            echo $name;
        }
    }

    function _output($output){
        $data = array ('url' => base_url());
        echo $output.$this->parser->parse('footer', $data, true) . "</body></html>";
    }
}