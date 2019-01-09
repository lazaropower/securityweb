<?php defined('BASEPATH') OR exit('No direct script access allowed');

class General extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //Helpers
        $this->load->helper('url');
        //Libraries
        $this->load->library('Bbdd');
        $this->load->library('parser');

        $data = array ('url' => base_url());
        $this->parser->parse('header', $data);

    }

	public function index()
	{
        $data = array ('url' => base_url());
	    $this->parser->parse('general/index', $data);
	}

    public function results()
    {
        $data = array ('url' => base_url());
        $this->parser->parse('general/results', $data);
    }

    public function test()
    {
       $array = array ('brand' => 'Asus');
       $result = $this->bbdd->getRowsWhere('routers', $array);

       foreach ($result as $res)
       {
           echo $res->id;

       }
    }

    private function validateForm($form)
    {
        //We obtain the data from the form and validate it
        if (empty($form['max-price'])) //No max price entered
            $maxPrice = 400;
        else $maxPrice = $form['max-price'];

        if (empty($form['bandsSelect']))
            $bands = 1;
        else $bands = $form['bandsSelect'][0]; //To take only the first char of the string

        if (empty($form['antennasSelect']))
            $antennas = 2;
        else $antennas = $form['antennasSelect'];

        if (empty($form['portsSelect']))
            $ports = 3;
        else $ports = $form['portsSelect'];

        if ($form['macAclRadios'] == 'no') //Search for the ones who have it and don't have it
            $MAC_ACL = 0;
        else $MAC_ACL = 1;  //Search for the ones who only have it

        if ($form['muMimoRadios'] == 'no')
            $MU_MIMO = 0;
        else $MU_MIMO = 1;

        if ($form['radiusRadios'] == 'no')
            $radius = 0;
        else $radius = 1;

        $array = array (
            'band >=' => $bands,
            'price <=' => $maxPrice,
            'numAntennas >=' => $antennas,
            'numLANPorts >=' => $ports,
            'MAC_ACL >=' => $MAC_ACL,
            'MU_MIMO >=' => $MU_MIMO,
            'radius >=' => $radius
        );

        return $array;
    }

    public function search()
    {
        $array = $this->validateForm($_POST);

        //We select the routers from database according to array
        $result = $this->bbdd->getRowsWhere('routers', $array);

        foreach ($result as $res){
            echo $res->id;
            echo "\n";
        }
    }

	public function example()
    {
        for ($i = 1; $i <= 5; $i++){
            $result = $this->bbdd->getRowWhereId('test', $i);
            echo $result->model;
            echo "\n";
        }
    }


   function _output($output){
        $data = array ('url' => base_url());
        echo $output.$this->parser->parse('footer', $data, true) . "</body></html>";
    }
}