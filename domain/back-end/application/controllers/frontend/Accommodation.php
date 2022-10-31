<?php


defined('BASEPATH') or exit('No direct script access allowed');


class Accommodation extends CI_Controller
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

            $data['slider'] =$this->db->where(['status'=>'Active','domain'=>DOMAIN])->order_by('id','desc')->get('slider')->result_array();

            $data['accommodation']=$this->db->select('id,name, image, old_daily_amount, daily_amount,  old_weekly_amount,  weekly_amount, old_monthly_amount,  monthly_amount, description, shift')->where(['status'=>'Active','domain'=>DOMAIN])->order_by('id','desc')->limit(3)->get('accommodation')->result_array();
            $data['caccommodation'] =$this->db->where(['domain'=>DOMAIN])->get('accommodation_customize')->result_array();

            $data['facility'] =$this->db->where(['status'=>'Active','domain'=>DOMAIN])->order_by('id','desc')->get('footer_facility')->result_array();
            $data['package'] =$this->db->select('name')->where(['status'=>'Active','domain'=>DOMAIN])->order_by('id','desc')->get('package')->result_array();
            $data['amenities'] =$this->db->select('name')->where(['status'=>'Active','domain'=>DOMAIN])->order_by('id','desc')->get('amenities')->result_array();

            $data['cabout'] =$this->db->where(['domain'=>DOMAIN])->order_by('id','desc')->get('about_customize')->result_array();
            $data['point_word'] =$this->db->where(['status'=>'Active','domain'=>DOMAIN])->order_by('id','desc')->get('about_point_word')->result_array();

            $data['seo_tags'] =$this->db->where(['page_name'=>'Accommodation','domain'=>DOMAIN])->get('seo_tags')->row_array();
            $data['title'] = $data['caccommodation'][0]['webpage_title'];
            $data['keywords'] = $data['seo_tags']['meta_keywords'];
            $data['description'] = $data['seo_tags']['meta_description'];
            $this->load->view('frontend/accommodation', $data);
        }catch (Exception $e){
            echo "Error : ". $e->getMessage();
        }

    }

    public function singleRoom($id = ''){
        try {
            $data['textHome']=$this->db->where('domain', DOMAIN)->get('home_customize')->row_array();

            $data['single_room'] =$this->db->where(['id'=>$id, 'domain'=>DOMAIN])->get('accommodation')->result_array();
            $data['caccommodation'] =$this->db->where(['domain'=>DOMAIN])->get('accommodation_customize')->result_array();
            $data['room_slider_photo'] =$this->db->where(['accommodation_id'=>$id, 'domain'=>DOMAIN])->order_by('id','desc')->get('room_preview_photo')->result_array();
            $data['room_facility'] =$this->db->where(['accommodation_id'=>$id,'domain'=>DOMAIN])->order_by('id','desc')->get('room_facility')->result_array();
            $data['room_overview'] =$this->db->where(['accommodation_id'=>$id,'domain'=>DOMAIN])->order_by('id','desc')->get('room_overview')->result_array();



            $data['facility'] =$this->db->where(['status'=>'Active','domain'=>DOMAIN])->order_by('id','desc')->get('footer_facility')->result_array();



            $data['package'] =$this->db->select('name')->where(['status'=>'Active','domain'=>DOMAIN])->order_by('id','desc')->get('package')->result_array();
            $data['amenities'] =$this->db->select('name')->where(['status'=>'Active','domain'=>DOMAIN])->order_by('id','desc')->get('amenities')->result_array();

            $data['cabout'] =$this->db->where(['domain'=>DOMAIN])->order_by('id','desc')->get('about_customize')->result_array();
            $data['point_word'] =$this->db->where(['status'=>'Active','domain'=>DOMAIN])->order_by('id','desc')->get('about_point_word')->result_array();

            $this->load->view('frontend/single_room', $data);

        }catch (Exception $e){
            echo "Error : ". $e->getMessage();
        }

    }



}
