<?php



defined('BASEPATH') OR exit('No direct script access allowed');



class Seotools extends CI_Controller

{

	 function __construct()

	 {

        parent::__construct();

        $this->load->database();

        $x=$this->session->userdata('iletsadmin');
        if(empty($x))
        {
            return redirect('welcome', 'refresh');
        }

    }

    public function index(){
         $this->load->view("admin/seotools/index");
    }


}
