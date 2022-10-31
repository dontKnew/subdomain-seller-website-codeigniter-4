<?php


defined('BASEPATH') or exit('No direct script access allowed');


class Package extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('text');
    }

    public function index(){
        try {
            $data['textHome']=$this->db->where('domain', DOMAIN)->get('home_customize')->row_array();

            $data['accommodation']=$this->db->select('id,name, image, old_daily_amount, daily_amount,  old_weekly_amount,  weekly_amount, old_monthly_amount,  monthly_amount, description, shift')->where(['status'=>'Active','domain'=>DOMAIN])->order_by('id','desc')->limit(3)->get('accommodation')->result_array();

            $data['package'] =$this->db->select('*')->where(['status'=>'Active','domain'=>DOMAIN])->order_by('id','desc')->get('package')->result_array();
            $data['inclusions'] =$this->db->select('*')->where(['domain'=>DOMAIN])->order_by('id','desc')->get('package_inclusions')->result_array();
            $data['cpackage'] =$this->db->where(['domain'=>DOMAIN])->get('package_customize')->result_array();

            $data['seo_tags'] =$this->db->where(['page_name'=>'Package','domain'=>DOMAIN])->get('seo_tags')->row_array();
            $data['title'] = $data['cpackage'][0]['webpage_title'];
            $data['keywords'] = $data['seo_tags']['meta_keywords'];
            $data['description'] = $data['seo_tags']['meta_description'];
            $this->load->view('frontend/package', $data);

        }catch (Exception $e){
            echo "Error : ". $e->getMessage();
        }

    }

}
