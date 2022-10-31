<?php


defined('BASEPATH') or exit('No direct script access allowed');

class AccommodationType extends CI_Controller

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
            $page =(isset($_GET['page'])) ? $_GET['page'] : 0;
            $domain = $this->session->sessionDomain;
            $this->db->where("domain", strtolower($domain));
            $query=$this->db->select('room_facility.*')->from('room_facility')->order_by('id','desc')->limit(20,($page))->get();
            $num_rows=$this->db->order_by('id', 'desc')->get('room_facility')->num_rows();
            $data['room_facility']=$query->result_array();
            $data['links']=$this->pagi->pagination1('admin/room-facility',$num_rows,20);

            $this->load->view('admin/accommodation/room-facility/index', $data);
        }catch (Exception $e){
            echo 'Error : '. $e->getMessage();
            exit;
        }
    }

    public function addFacility()
    {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            try {
                $this->load->helper(array('form'));
                $this->load->library('form_validation');
                $this->form_validation->set_rules('facility_name', 'Name', 'required');
                if ($this->form_validation->run() == FALSE) {
                    $this->load->view('admin/room-facility/add');
                } else {
                    $domain = strtolower($this->session->sessionDomain);
                    $_POST['domain'] = $domain;
                    if ($this->db->insert('room_overview', $_POST)) {
                        $this->session->set_flashdata('msg', 'Room Facility Successfully Added');
                        return redirect(base_url('admin/room-facility'), 'refresh');
                    } else {
                        $this->session->set_flashdata('err', 'Please try Again After SomeTimes');
                        return redirect(base_url('admin/room-facility/add'), 'refresh');
                    }
                }
            }catch (Exception $e){
                $this->session->set_flashdata('err', 'Error : '. $e->getMessage());
                return redirect(base_url('admin/room-facility/add'), 'refresh');
            }
        } else {
            try {
                $domain = strtolower($this->session->sessionDomain);
                $query = $this->db->select('footer_facility.name')->from('footer_facility')->where("domain",$domain)->order_by('id', 'desc')->get();
                $data['all_facility'] = $query->result_array();

                $query1 = $this->db->select('accommodation.name, accommodation.id')->from('accommodation')->where("domain",$domain)->order_by('id', 'desc')->get();
                $data['accommodation'] = $query1->result_array();
                $this->load->view('admin/accommodation/room-facility/add',$data);
            }catch (Exception $e){
                echo 'Error : '. $e->getMessage();
                exit;
            }
        }

    }

    public function deleteFacility($id = '')
    {
        try {
            if ($this->db->where('id', $id)->delete('room_overview')) {
                $this->session->set_flashdata('msg', 'Success Deleted facility');
            } else {
                $this->session->set_flashdata('err', 'Please try After Sometimes...');
            }
            return redirect(base_url('admin/room-facility'), 'refresh');
        }catch (Exception $e){
            echo 'Error : '. $e->getMessage();
            exit;
        }
    }


//ROOM OVERVIEW START
    public function RoomOverview()
    {
        try {

            $page =(isset($_GET['page'])) ? $_GET['page'] : 0;
            $domain = $this->session->sessionDomain;
            $this->db->where("domain", strtolower($domain));
            $query=$this->db->select('room_overview.*')->from('room_overview')->order_by('id','desc')->limit(20,($page))->get();
            $num_rows=$this->db->order_by('id', 'desc')->get('room_overview')->num_rows();
            $data['room_overview']=$query->result_array();
            $data['links']=$this->pagi->pagination1('admin/room-overview',$num_rows,20);

            $this->load->view('admin/accommodation/room-overview/index', $data);
        }catch (Exception $e){
            echo 'Error : '. $e->getMessage();
            exit;
        }
    }

    public function addRoomOverview()
    {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            try {
                $this->load->helper(array('form'));
                $this->load->library('form_validation');
                $this->form_validation->set_rules('service_name', 'Name', 'required');
                if ($this->form_validation->run() == FALSE) {
                    $this->load->view('admin/room_overview/add');
                } else {
                    if ($this->db->insert('room_overview', $_POST)) {
                        $this->session->set_flashdata('msg', 'Room Facility Successfully Added');
                        return redirect(base_url('admin/room-overview'), 'refresh');
                    } else {
                        $this->session->set_flashdata('err', 'Please try Again After SomeTimes');
                        return redirect(base_url('admin/room-overview/add'), 'refresh');
                    }
                }
            }catch (Exception $e){
                $this->session->set_flashdata('err', 'Error : '. $e->getMessage());
                return redirect(base_url('admin/room-overview/add'), 'refresh');
            }
        } else {
            try {
                $domain = strtolower($this->session->sessionDomain);
                $query1 = $this->db->select('accommodation.name, accommodation.id')->from('accommodation')->where("domain",$domain)->order_by('id', 'desc')->get();
                $data['accommodation'] = $query1->result_array();
                $this->load->view('admin/accommodation/room-overview/add',$data);
            }catch (Exception $e){
                echo 'Error : '. $e->getMessage();
                exit;
            }
        }
    }
    public function deleteRoomOverview($id = '')
    {
        try {
            if ($this->db->where('id', $id)->delete('room_overview')) {
                $this->session->set_flashdata('msg', 'Success Deleted facility');
            } else {
                $this->session->set_flashdata('err', 'Please try After Sometimes...');
            }
            return redirect(base_url('admin/room-overview'), 'refresh');
        }catch (Exception $e){
            echo 'Error : '. $e->getMessage();
            exit;
        }
    }
// ROOM OVERVIEW END



//ROOM PHOTO START
    public function RoomPhoto()
    {
        try {
            $page =(isset($_GET['page'])) ? $_GET['page'] : 0;
            $domain = $this->session->sessionDomain;
            $this->db->where("domain", strtolower($domain));
            $query=$this->db->select('room_preview_photo.*')->from('room_preview_photo')->order_by('id','desc')->limit(20,($page))->get();
            $num_rows=$this->db->order_by('id', 'desc')->get('room_preview_photo')->num_rows();
            $data['room_preview_photo']=$query->result_array();
            $data['links']=$this->pagi->pagination1('admin/room-photo',$num_rows,20);

            $this->load->view('admin/accommodation/room-photo/index', $data);
        }catch (Exception $e){
            echo 'Error : '. $e->getMessage();
            exit;
        }
    }

    public function addRoomPhoto()
    {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            try {
                $this->load->helper(array('form'));
                $this->load->library('form_validation');
                $this->form_validation->set_rules('portion_name', 'Name', 'required');
                if ($this->form_validation->run() == FALSE) {
                    $this->load->view('admin/room-photo/add');
                } else {

                    if ($_FILES['preview_photo']['name'] !== '') {
                        $ext = pathinfo($_FILES['preview_photo']['name'], PATHINFO_EXTENSION);
                        $config['file_name'] = strtolower("room_preview_photo_" . time() . "." . $ext);

                        $config['upload_path'] = './uploads/acomodation/room/';
                        $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG|jpeg';
                        $this->upload->initialize($config);
                        $this->upload->do_upload('preview_photo');
                        $_POST['preview_photo'] = $config['file_name'];
                    }else {
                        $this->session->set_flashdata('err', 'Room photo is required');
                        return redirect(base_url('admin/room-photo/add'), 'refresh');
                    }

                    if ($this->db->insert('room_preview_photo', $_POST)) {
                        $this->session->set_flashdata('msg', 'Room Photo Successfully Added');
                        return redirect(base_url('admin/room-photo'), 'refresh');
                    } else {
                        $this->session->set_flashdata('err', 'Please try Again After SomeTimes');
                        return redirect(base_url('admin/room-photo/add'), 'refresh');
                    }
                }
            }catch (Exception $e){
                $this->session->set_flashdata('err', 'Error : '. $e->getMessage());
                return redirect(base_url('admin/room-photo/add'), 'refresh');
            }
        } else {
            try {
                $domain = strtolower($this->session->sessionDomain);
                $query1 = $this->db->select('accommodation.name, accommodation.id')->from('accommodation')->where("domain",$domain)->order_by('id', 'desc')->get();
                $data['accommodation'] = $query1->result_array();
                $this->load->view('admin/accommodation/room-photo/add',$data);
            }catch (Exception $e){
                echo 'Error : '. $e->getMessage();
                exit;
            }
        }
    }
    public function deleteRoomPhoto($id = '')
    {
        try {
            if ($this->db->where('id', $id)->delete('room_preview_photo')) {
                $this->session->set_flashdata('msg', 'photo  Deleted succesfully ');
            } else {
                $this->session->set_flashdata('err', 'Please try After Sometimes...');
            }
            return redirect(base_url('admin/room-photo'), 'refresh');
        }catch (Exception $e){
            echo 'Error : '. $e->getMessage();
            exit;
        }
    }
// ROOM PHOTO END


}
