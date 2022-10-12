<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');

    }
    public function index()
    {

       $this->load->view('login');
    }

    public function domain(){

        if ($this->input->server('REQUEST_METHOD') == 'POST') {

            if(isset($_POST['domain'])){
                $output = "";
                $domain = $this->db->order_by("name", "asc")->get('company')->result_array();
                $output = '<ul class="list-unstyled text-center">';
                if($this->db->get('company')->num_rows() > 0 ){
                    foreach($domain as $row){
                        $output .= '<li> '.ucwords($row['domain']).'</li>';
                    }
                }else {
                    $output .= '<li> No Domain Available </li>';
                }
                $output .= '</ul>';
                echo $output;
            }else if(isset($_POST['domain1'])){
                $output = "";
                $this->db->like('domain', trim($_POST['domain1']));
                $domain = $this->db->order_by("name", "asc")->where("status","active")->get('company')->result_array();
                $output = '<ul class="list-unstyled text-center">';

                if($this->db->get('company')->num_rows() > 0 ){
                    foreach($domain as $row){
                        $output .= '<li> '.ucwords($row['domain']).'</li>';
                    }
                }else {
                    $output .= '<li> No Domain Available </li>';
                }
                $output .= '</ul>';
                echo $output;
            }else if(isset($_POST['setDomain'])){
                $domain = trim($_POST['setDomain']);
                try {
                    $this->session->set_userdata("sessionDomain", strtoupper($domain));

                    if($this->session->has_userdata('sessionDomain')){
                        echo 200;

                    }else {
                        echo 404;
                    }
                }catch (\Exception $e){
                    echo "Server Error :  ".$e->getMessage();
                }
            }
        }
    }

    public function login()
    {
        if ($this->input->server('REQUEST_METHOD') == 'POST')
        {
            $_POST['password']=md5($_POST['password']);
            $row=$this->db->where($_POST)->get('users')->num_rows();
            if($row==0)
            {
                $this->session->set_flashdata('err', 'Please Enter Correct Credentials');
                return redirect(base_url('admin'),'refresh');
            }
            else
            {
                $data=$this->db->where($_POST)->get('users')->row_array();
                $array = array(
                    'iletsadmin' => $data
                );

                $this->session->set_userdata($array);
                return redirect(base_url('admin/dashboard'),'refresh');
            }
        }
        else
        {
            $this->session->set_flashdata('err', 'Please Try Again');
            return redirect(base_url('admin'),'refresh');
        }
    }
    public function logout() {
        $this->session->unset_userdata('logged');
        $this->session->unset_userdata('sessionDomain');
        $this->session->sess_destroy();
        return redirect('Admin/index', 'refresh');
    }
    public function dashboard()
    {
        if(!check_login())
        {
            return redirect('admin', 'refresh');
        }
        $data=$this->session->userdata('iletsadmin');
        if($data['role']==1)
        {
            $this->load->view('dashboard');
        }

    }
    public function profile() {
        if(!check_login())
        {
            return redirect('admin', 'refresh');
        }
        $data['admin'] = $this->session->userdata('iletsadmin');
        $this->load->view('profile', $data);
    }
    public function change_pass() {
        if(!check_login())
        {
            return redirect('admin', 'refresh');
        }
        $this->load->view('change_pass');
    }
    public function save_password() {
        $x = $this->session->userdata('iletsadmin');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('change_pass');
        } else {
            $password = md5($this->input->post('password'));
            if ($this->db->where('email', $x['email'])->update('users', array('password' => $password))) {
                $this->session->set_flashdata('msg', 'Password Updated Successfully');
                return redirect(base_url('profile'), 'refresh');
            } else {
                $this->session->set_flashdata('err', 'Password Not Updated Please Try Again');
                return redirect(base_url('profile'), 'refresh');
            }
        }
    }


}
