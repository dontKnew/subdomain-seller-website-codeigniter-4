<?php


defined('BASEPATH') or exit('No direct script access allowed');


class Testimonials extends CI_Controller
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

            $data['ctestimonial'] =$this->db->where(['domain'=>DOMAIN])->get('testinomial_customize')->row_array();
            $data['testimonial'] =$this->db->select('*')->where(['status'=>'Active','domain'=>DOMAIN])->order_by('id','desc')->get('testinomial')->result_array();

            $data['seo_tags'] =$this->db->where(['page_name'=>'Testimonials','domain'=>DOMAIN])->get('seo_tags')->row_array();
            $data['title'] = $data['ctestimonial']['webpage_title'];
            $data['keywords'] = $data['seo_tags']['meta_keywords'];
            $data['description'] = $data['seo_tags']['meta_description'];
            $this->load->view('frontend/testimonials', $data);

        }catch (Exception $e){
            echo "Error : ". $e->getMessage();
        }

    }

}
