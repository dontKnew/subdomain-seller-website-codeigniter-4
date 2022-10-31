<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Slider extends CI_Controller

{

    function __construct()

    {

        parent::__construct();

        $this->load->database();

        $x = $this->session->userdata('iletsadmin');

        if ($x['role'] != 1) {
            return redirect('welcome', 'refresh');
        }
    }



    public function index()
    {
        $page = (isset($_GET['page'])) ? $_GET['page'] : 0;
        $domain = strtolower($this->session->sessionDomain);

        $query = $this->db->select('*')->from('slider')->where("domain", $domain)->order_by('id', 'desc')->limit(20, ($page))->get();
        $num_rows = $this->db->order_by('id', 'desc')->where("domain", $domain)->get('slider')->num_rows();
        $data['links'] = $this->pagi->pagination1('admin/slider', $num_rows, 20);

        $data['slider'] = $query->result_array();
        $this->load->view('admin/slider/index', $data);
    }



    public function add($id = '')
    {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $this->load->helper(array('form'));
            $this->load->library('form_validation');
            $this->form_validation->set_rules('status', 'Status', 'required');
            if ($this->form_validation->run() == FALSE) {
                $this->load->view('admin/slider');
            } else {
                try {
                    $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
                    $config['file_name'] = strtolower("slider_" . time() . "." . $ext);
                    $config['upload_path'] = './uploads/slider/';
                    $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG|jpeg|mp4';
                    $this->upload->initialize($config);
                    $this->upload->do_upload('image');
                    $_POST['image'] = $config['file_name'];

                    if($this->db->insert('slider', $_POST)) {
                        $this->session->set_flashdata('msg', 'slider Successfully Added');
                    } else {
                        $this->session->set_flashdata('err', 'Please try Again After SomeTimes');
                    }
                    return redirect(base_url('admin/slider'), 'refresh');

                }catch (Exception $e){
                    $this->session->set_flashdata('err', 'Error '.$e->getMessage());
                    return redirect(base_url('admin/slider'), 'refresh');
                }

            }
        } else {
            $this->load->view('admin/slider/add');
        }
    }



    public function edit($id = '')

    {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            try {
                $data = $this->db->where('id', $id)->get('slider')->row_array();
                if ($_FILES['image']['name'] != '') {
                    $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
                    $config['file_name'] = strtolower("package_" . time() . "." . $ext);

                    $config['upload_path'] = './uploads/slider/';
                    $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG|jpeg';
                    $this->upload->initialize($config);
                    $this->upload->do_upload('image');
                    $_POST['image'] = $config['file_name'];
                    unlink("./uploads/slider/".$data['image']);
                }else {
                    $_POST['image'] = $data['image'];
                }
                if ($this->db->where('id', $id)->update('slider', $_POST)) {
                    $this->session->set_flashdata('msg', 'slider Successfully update');
                    return redirect(base_url('admin/slider'), 'refresh');
                } else {
                    $this->session->set_flashdata('err', 'Please try Again After SomeTimes');
                    return redirect(base_url('admin/slider/edit/' . $id), 'refresh');
                }
            }catch (Exception $e){
                $this->session->set_flashdata('err', 'Error : '. $e->getMessage());
                return redirect(base_url('admin/slider/edit/' . $id), 'refresh');
            }
        } else {
            $data['slider'] = $this->db->where('id', $id)->get('slider')->row_array();
            $this->load->view('admin/slider/edit', $data);
        }
    }


    public function view($id = '')
    {
        try {
            $data['slider'] = $this->db->where('id', $id)->get('slider')->row_array();
            $this->load->view('admin/slider/view', $data);
        }catch (Exception $e){
            $this->session->set_flashdata('err', 'Error : '. $e->getMessage());
            $this->load->view('admin/slider/view');
        }
    }

    public function delete($id = '')
    {
        if ($this->db->where('id', $id)->delete('slider')) {
            $this->session->set_flashdata('msg', 'Success Deleted slider');
        } else {
            $this->session->set_flashdata('err', 'Please try After Sometimes...');
        }
        return redirect(base_url('admin/slider'), 'refresh');
    }

    public function getHomeData()
    {
        if($this->input->server('REQUEST_METHOD') == 'GET') {
            try {
                $data = $this->db->where("domain", strtolower($this->session->sessionDomain))->get("home_customize");
                if ($data) {
                    $this->load->view('admin/slider/customize',array("data"=>$data->result()));
                } else {
                    $this->session->set_flashdata('err', 'could not fetch data from database');
                    redirect(base_url()."admin/home/customize");
                }
            }catch (\Exception $e){
                $this->session->set_flashdata('err', $e->getMessage());
                redirect(base_url()."admin/home/customize");
            }
        } else {
            $this->session->set_flashdata('err', 'http verbs method is invalid');
            redirect(base_url()."admin/home/customize");
        }
    }

    public function updateHomeData()
    {
        if($this->input->server('REQUEST_METHOD') == 'POST') {
            unset($_POST['files']); // i dont knew where this key coming from
            try {
                $db = $this->db->where("domain", strtolower($this->session->sessionDomain))->update("home_customize", $_POST);
                if($db) {
                    $this->session->set_flashdata('err', 'Home Data successfully updated');
                } else {
                    $this->session->set_flashdata('err', 'Please try Again After SomeTimes');
                }
                redirect(base_url()."admin/home/customize");
            }catch (\Exception $e){
                $this->session->set_flashdata('err', $e->getMessage());
            }
        } else {
            $this->session->set_flashdata('err', 'http verbs method is invalid');
        }
        redirect(base_url()."admin/home/customize");
    }

    //    room-facility start
    public function Facility()
    {
        try {
            $page = (isset($_GET['page'])) ? $_GET['page'] : 0;
            $domain = strtolower($this->session->sessionDomain);
            $query = $this->db->select('*')->from('footer_facility')->where("domain", $domain)->order_by('id', 'desc')->limit(20,($page))->get();
            $num_rows = $this->db->order_by('id', 'desc')->where("domain", $domain)->get('footer_facility')->num_rows();
            $data['links'] = $this->pagi->pagination('admin/facility', $num_rows, 20);
            $data['facility'] = $query->result_array();
            $this->load->view('admin/slider/facility/index', $data);
        }catch (Exception $e){
            echo "Error".$e->getMessage();
        }
    }


    public function addFacility()
    {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
                try {
                    unset($_POST['domain']);
                    $data = array_map("ucwords", $_POST);
                    $data['domain'] = strtolower($this->session->sessionDomain);
                    if($this->db->insert('footer_facility', $data)) {
                        $this->session->set_flashdata('msg', 'facility Successfully Added');
                        return redirect(base_url('admin/facility'), 'refresh');
                    } else {
                        $this->session->set_flashdata('err', 'Please try Again After SomeTimes');
                        return redirect(base_url('admin/facility/add'), 'refresh');
                    }
                }catch (Exception $e){
                    $this->session->set_flashdata('err', 'Error '.$e->getMessage());
                    return redirect(base_url('admin/facility/add'), 'refresh');
                }
        } else {
            $this->load->view('admin/slider/facility/add');
        }
    }


    public function deleteFacility($id = '')
    {
        try {
            if ($this->db->where('id', $id)->delete('footer_facility')) {
                $this->session->set_flashdata('msg', 'Success Deleted facility');
            } else {
                $this->session->set_flashdata('err', 'Please try After Sometimes...');
            }
            return redirect(base_url('admin/facility'), 'refresh');
        }catch (Exception $e){
            echo 'Error : '. $e->getMessage();
        }
    }

//room-facility end
}
