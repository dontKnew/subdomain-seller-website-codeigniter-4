<?php


defined('BASEPATH') or exit('No direct script access allowed');


class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('text');
    }

    public function index(){
        $data['textHome']=$this->db->where('domain', DOMAIN)->get('home_customize')->row_array();

        $data['slider'] =$this->db->where(['status'=>'Active','domain'=>DOMAIN])->order_by('id','desc')->get('slider')->result_array();
        $data['accommodation']=$this->db->select('id,name, image, old_daily_amount, daily_amount,  old_weekly_amount,  weekly_amount, old_monthly_amount,  monthly_amount, description, shift')->where(['status'=>'Active','domain'=>DOMAIN])->order_by('id','desc')->limit(3)->get('accommodation')->result_array();
        $data['facility'] =$this->db->where(['status'=>'Active','domain'=>DOMAIN])->order_by('id','desc')->get('footer_facility')->result_array();
        $data['package'] =$this->db->select('name')->where(['status'=>'Active','domain'=>DOMAIN])->order_by('id','desc')->limit(10)->get('package')->result_array();
        $data['amenities'] =$this->db->select('name')->where(['status'=>'Active','domain'=>DOMAIN])->order_by('id','desc')->limit(10)->get('amenities')->result_array();
        $data['seo_tags'] =$this->db->where(['page_name'=>'Home','domain'=>DOMAIN])->get('seo_tags')->row_array();
        $data['title'] = $data['textHome']['webpage_title'];
        $data['keywords'] = $data['seo_tags']['meta_keywords'];
        $data['description'] = $data['seo_tags']['meta_description'];

        $this->load->view('frontend/index', $data);
    }

}
