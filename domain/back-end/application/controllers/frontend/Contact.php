<?php


defined('BASEPATH') or exit('No direct script access allowed');


class Contact extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('text');
    }

    public function index(){
        $data['textHome']=$this->db->where('domain', DOMAIN)->get('home_customize')->row_array();
        $data['accommodation']=$this->db->select('id,name, image, old_daily_amount, daily_amount,  old_weekly_amount,  weekly_amount, old_monthly_amount,  monthly_amount, description, shift')->where(['status'=>'Active','domain'=>DOMAIN])->order_by('id','desc')->limit(3)->get('accommodation')->result_array();
        $data['package'] =$this->db->select('name')->where(['status'=>'Active','domain'=>DOMAIN])->order_by('id','desc')->limit(10)->get('package')->result_array();
        $data['amenities'] =$this->db->select('name')->where(['status'=>'Active','domain'=>DOMAIN])->order_by('id','desc')->limit(10)->get('amenities')->result_array();
        $data['company']=$this->db->where('domain', DOMAIN)->get('company')->row_array();
        $data['seo_tags'] =$this->db->where(['page_name'=>'Contact','domain'=>DOMAIN])->get('seo_tags')->row_array();

        $data['title'] = "Resort-Contact";
        $this->load->view('frontend/contact', $data);
    }

    public function thanks()
    {
        if($_SERVER['REQUEST_METHOD']=='POST'){

            try {
                $comp = $this->db->where('status', 'Active')->where('domain', DOMAIN)->get('company')->row_array();
                $config = array(
                    'mailtype' => 'html',
                    'charset' => 'iso-8859-1',
                    'wordwrap' => true,
                );

                $config['newline'] = "\r\n";

                $message = "<table>";

                foreach ($_POST as $key => $value) {

                    $message .= "<tr><th>" . $key . "</th><td>" . $value . "</td></tr>";
                }

                $message .= "</table>";
                try {

                    // note : mail config. in localhost xampp server has been set
                    $this->load->library('email');

                    $this->email->initialize($config);

                    $this->email->from($_POST['email'], $_POST['name']); // mail can be your or customer mail ok

                    $this->email->to($comp['email']); // send to email; contact form so our company email

                    $this->email->subject($comp['name']);

                    $this->email->message($message);

                    if($this->email->send()){
                        // $this->session->set_flashdata('msg', 'Your Request Succeessfully Submiited');
                        return redirect(base_url('thanksme'), 'refresh');
                    }else {
                        echo print_r($this->email->print_debugger());
                        exit;
                        // $this->session->set_flashdata('err', 'Mail Could not sent, Please try againi later');
                        // return redirect(base_url('contact'), 'refresh');
                    }
                }catch(Exception $e){
                    echo $e->getMessage();
                    exit;
                }

            }catch (Exception $e){
                 echo $e->getMessage();
                 exit;
            }
        }else {
            return $this->load->view('frontend/thanks');

        }

    }


}
