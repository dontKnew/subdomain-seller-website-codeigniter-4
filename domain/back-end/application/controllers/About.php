<?php


defined('BASEPATH') or exit('No direct script access allowed');


class About extends CI_Controller

{

    function __construct()
    {

        parent::__construct();

        $this->load->database();
        $this->load->library('user_agent');
        $this->session->set_userdata('previous_url', current_url());

        $x = $this->session->userdata('iletsadmin');

        if ($x['role'] != 1) {

            return redirect('welcome', 'refresh');
        }

    }


    public function index()
    {
        try {
            $domain = strtolower($this->session->sessionDomain);
            $query = $this->db->select('about_point_word.*')->from('about_point_word')->where("domain",$domain)->order_by('id', 'desc')->get();
            $data['about'] = $query->result_array();
            $this->load->view('admin/about/index', $data);
        }catch (Exception $e){
            echo 'Error : '. $e->getMessage();
            exit;
        }
    }

    public function addPointWord()
    {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            try {
                $this->load->helper(array('form'));
                $this->load->library('form_validation');
                $this->form_validation->set_rules('point_word', 'Name', 'required');
                if ($this->form_validation->run() == FALSE) {
                    $this->load->view('admin/about/add');
                } else {
                    $domain = strtolower($this->session->sessionDomain);
                    $_POST['domain'] = $domain;
                    if ($this->db->insert('about_point_word', $_POST)) {
                        $this->session->set_flashdata('msg', ' Point Word  Successfully Added');
                        return redirect(base_url('about/point-word'), 'refresh');
                    } else {
                        $this->session->set_flashdata('err', 'Please try Again After SomeTimes');
                        return redirect(base_url('about/point-word/add'), 'refresh');
                    }
                }
            }catch (Exception $e){
                $this->session->set_flashdata('err', 'Error : '. $e->getMessage());
                return redirect(base_url('about/point-word/add'), 'refresh');
            }
        } else {
            $this->load->view('admin/about/add');
        }

    }

    public function deletePointWord($id = '')
    {
        try {
            if ($this->db->where('id', $id)->delete('about_point_word')) {
                $this->session->set_flashdata('msg', 'Success Deleted point_word');
            } else {
                $this->session->set_flashdata('err', 'Please try After Sometimes...');
            }
            return redirect(base_url('about/point-word'), 'refresh');
        }catch (Exception $e){
            echo 'Error : '. $e->getMessage();
            exit;
        }
    }

    public function getAboutData()
    {
        if($this->input->server('REQUEST_METHOD') == 'GET') {
            try {
                $data['about'] = $this->db->where("domain", strtolower($this->session->sessionDomain))->get("about_customize")->result_array();
                if ($data) {
                    $this->load->view('admin/about/customize',$data);
                } else {
                    $this->session->set_flashdata('err', 'could not fetch data from database');
                    return redirect(base_url()."admin/about/customize");
                }
            }catch (\Exception $e){
                echo 'Error :'. $e->getMessage();
            }
        } else {
            $this->session->set_flashdata('err', 'http verbs method is invalid');
            redirect(base_url()."admin/about/customize");
        }
    }

    public function updateAboutData()
    {
        if($this->input->server('REQUEST_METHOD') == 'POST') {
            unset($_POST['files']); // i dont knew where this key coming from
            try {
                $data = $this->db->where('domain', strtolower($this->session->sessionDomain))->get('about_customize')->row_array();

                if ($_FILES['about_photo']['name'] !== '') {
                    $ext = pathinfo($_FILES['about_photo']['name'], PATHINFO_EXTENSION);
                    $config['file_name'] = strtolower("about_page_" . time() . "." . $ext);

                    $config['upload_path'] = './uploads/about/';
                    $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG|jpeg';
                    $this->upload->initialize($config);
                    $this->upload->do_upload('about_photo');
                    $_POST['about_photo'] = $config['file_name'];
                    unlink("uploads/about/".$data['about_photo']);
                }else {
                    $_POST['about_photo'] = $data['about_photo'];
                }
                $db = $this->db->where("domain", strtolower($this->session->sessionDomain))->update("about_customize", $_POST);
                if($db) {
                    $this->session->set_flashdata('err', 'About Data successfully updated');
                } else {
                    $this->session->set_flashdata('err', 'Please try Again After SomeTimes');
                }
                redirect(base_url()."admin/about/customize");
            }catch (\Exception $e){
                $this->session->set_flashdata('err', $e->getMessage());
            }
        } else {
            $this->session->set_flashdata('err', 'http verbs method is invalid');
        }
        redirect(base_url()."admin/about/customize");
    }

}
