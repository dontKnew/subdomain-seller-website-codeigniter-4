<?php


defined('BASEPATH') or exit('No direct script access allowed');


class Amenities extends CI_Controller

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

        $domain = $this->session->sessionDomain;
        $this->db->where("domain", strtolower($domain));

        $query = $this->db->select('amenities.*')->from('amenities')->order_by('id', 'desc')->limit(20, ($page))->get();

        $num_rows = $this->db->order_by('id', 'desc')->get('amenities')->num_rows();

        $data['amenities'] = $query->result_array();

        $data['links'] = $this->pagi->pagination1('admin/amenities', $num_rows, 20);
        $this->load->view('admin/amenities/index', $data);

    }

    public function view($id = '')

    {

        $data['amenities'] = $this->db->where('id', $id)->get('amenities')->row_array();

        $this->load->view('admin/amenities/view', $data);

    }

    public function add()

    {

        if ($this->input->server('REQUEST_METHOD') == 'POST') {

            $this->load->helper(array('form'));

            $this->load->library('form_validation');


            $this->form_validation->set_rules('status', 'Status', 'required');


            if ($this->form_validation->run() == FALSE) {

                $this->load->view('admin/amenities/add');

            } else {


                if ($_FILES['image']['name'] !== '') {
                    $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
                    $config['file_name'] = strtolower("amenities_" . time() . "." . $ext);

                    $config['upload_path'] = './uploads/amenities/';
                    $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG|jpeg';
                    $this->upload->initialize($config);
                    $this->upload->do_upload('image');
                    $_POST['image'] = $config['file_name'];
                } else {
                    $this->session->set_flashdata('msg', 'Accommodation Successfully Added');
                    return redirect(base_url('admin/accommodation'), 'refresh');
                }


                if ($this->db->insert('amenities', $_POST)) {

                    $this->session->set_flashdata('msg', 'amenities Successfully Added');

                    return redirect(base_url('admin/amenities'), 'refresh');

                } else {

                    $this->session->set_flashdata('err', 'Please try Again After SomeTimes');

                    return redirect(base_url('admin/amenities/add'), 'refresh');

                }

            }

        } else {

            $this->load->view('admin/amenities/add');

        }

    }

    public function edit($id = '')

    {

        if ($this->input->server('REQUEST_METHOD') == 'POST') {

            $cat = $this->db->where('id', $id)->get('amenities')->row_array();
            $this->load->helper(array('form'));

            $this->load->library('form_validation');

            $this->form_validation->set_rules('status', 'Status', 'required');


            if ($this->form_validation->run() == FALSE) {

                $data['amenities'] = $this->db->where('id', $id)->get('amenities')->row_array();

                $this->load->view('admin/amenities/edit', $data);

            } else {

                $data = $this->db->where('id', $id)->get('amenities')->row_array();

                if ($_FILES['image']['name'] != '') {

                    $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
                    $config['file_name'] = strtolower("amenities_" . time() . "." . $ext);

                    $config['upload_path'] = './uploads/amenities/';

                    $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG|jpeg|mp4';

                    $this->upload->initialize($config);

                    $this->upload->do_upload('image');

                    $_POST['image'] = $config['file_name'];
                    unlink("./uploads/amenities/".$data['image']);
                }else {
                    $_POST['image'] = $data['image'];
                }



                if ($this->db->where('id', $id)->update('amenities', $_POST)) {

                    $this->session->set_flashdata('msg', 'amenities Successfully Added');

                    return redirect(base_url('admin/amenities'), 'refresh');

                } else {

                    $this->session->set_flashdata('err', 'Please try Again After SomeTimes');

                    return redirect(base_url('admin/amenities/edit/' . $id), 'refresh');

                }

            }

        } else {

            $data['amenities'] = $this->db->where('id', $id)->get('amenities')->row_array();

            $this->load->view('admin/amenities/edit', $data);

        }

    }

    public function delete($id = '')

    {

        if ($this->db->where('id', $id)->delete('amenities')) {

            $this->session->set_flashdata('msg', 'Success Deleted amenities');

        } else {

            $this->session->set_flashdata('err', 'Please try After Sometimes...');

        }

        return redirect(base_url('admin/amenities'), 'refresh');

    }

    public function getAmenitiesData()
    {
        if ($this->input->server('REQUEST_METHOD') == 'GET') {
            try {
                $data = $this->db->where("domain", strtolower($this->session->sessionDomain))->get("amenities_customize");
                if ($data) {
                    $this->load->view('admin/amenities/customize', array("data" => $data->result()));
                } else {
                    $this->session->set_flashdata('err', 'could not fetch data from database');
                    redirect(base_url() . "admin/amenities/customize");
                }
            } catch (\Exception $e) {
                $this->session->set_flashdata('err', $e->getMessage());
                redirect(base_url() . "admin/amenities/customize");
            }
        } else {
            $this->session->set_flashdata('err', 'http verbs method is invalid');
            redirect(base_url() . "admin/amenities/customize");
        }

    }

    public function updateAmenitiesData()
    {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $result = $this->db->where("domain", strtolower($this->session->sessionDomain))->get("amenities_customize")->result();

            if ($_FILES['amenties_photo']['name'] != '') {
                $ext = pathinfo($_FILES['amenties_photo']['name'], PATHINFO_EXTENSION);
                $config['file_name'] = strtolower("amenities_page_" . time() . "." . $ext);
                $config['upload_path'] = './uploads/amenities/';
                $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG|jpeg';
                $this->upload->initialize($config);
                try {
                    $this->upload->do_upload('amenties_photo');
                    $_POST['amenties_photo'] = $config['file_name'];
                } catch (Exception $e) {
                    echo "Error " . $e->getMessage();
                }
            } else {
                $_POST['amenties_photo'] = $result[0]->amenties_photo;
            }

            if ($_FILES['sidebar_photo']['name'] != '') {
                $ext = pathinfo($_FILES['sidebar_photo']['name'], PATHINFO_EXTENSION);
                $config['file_name'] = strtolower("amenities_sidebar_page_" . time() . "." . $ext);
                $config['upload_path'] = './uploads/amenities/';
                $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG|jpeg';
                $this->upload->initialize($config);
                try {
                    $this->upload->do_upload('sidebar_photo');
                    $_POST['sidebar_photo'] = $config['file_name'];
                } catch (Exception $e) {
                    echo "Error " . $e->getMessage();
                }
            } else {
                $_POST['sidebar_photo'] = $result[0]->sidebar_photo;
            }

            if($_FILES['sidebar_1photo']['name'] != '') {
                $ext = pathinfo($_FILES['sidebar_1photo']['name'], PATHINFO_EXTENSION);
                $config['file_name'] = strtolower("amenities_sidebar1_page_" . time() . "." . $ext);
                $config['upload_path'] = './uploads/amenities/';
                $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG|jpeg';
                $this->upload->initialize($config);
                try {
                    $this->upload->do_upload('sidebar_1photo');
                    $_POST['sidebar_1photo'] = $config['file_name'];
                } catch (Exception $e) {
                    echo "Error " . $e->getMessage();
                }
            } else {
                $_POST['sidebar_1photo'] = $result[0]->sidebar_1photo;
            }

            if($_FILES['sidebar_2photo']['name'] != '') {
                $ext = pathinfo($_FILES['sidebar_2photo']['name'], PATHINFO_EXTENSION);
                $config['file_name'] = strtolower("amenities_sidebar12_page_" . time() . "." . $ext);
                $config['upload_path'] = './uploads/amenities/';
                $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG|jpeg';
                $this->upload->initialize($config);
                try {
                    $this->upload->do_upload('sidebar_2photo');
                    $_POST['sidebar_2photo'] = $config['file_name'];
                } catch (Exception $e) {
                    echo "Error " . $e->getMessage();
                }
            } else {
                $_POST['sidebar_2photo'] = $result[0]->sidebar_2photo;
            }

                try {
                $db = $this->db->where("domain", strtolower($this->session->sessionDomain))->update("amenities_customize", $_POST);
                if ($db) {
                    $this->session->set_flashdata('err', 'Amenity  Data successfully updated');
                } else {
                    $this->session->set_flashdata('err', ' Please try Again After SomeTimes');
                }
                redirect(base_url()."admin/amenities/customize");
            } catch (\Exception $e) {
                $this->session->set_flashdata('err', $e->getMessage());
            }
        } else {
            $this->session->set_flashdata('err', 'http verbs method is invalid');
        }
        redirect(base_url() . "admin/amenities/customize");
    }

}
