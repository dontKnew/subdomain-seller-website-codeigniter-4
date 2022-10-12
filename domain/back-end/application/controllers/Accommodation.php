<?php


defined('BASEPATH') or exit('No direct script access allowed');


class accommodation extends CI_Controller

{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('text');
        $x = $this->session->userdata('iletsadmin');
        if ($x['role'] != 1) {
            return redirect('welcome');
            // return redirect(bae_url("login"));
        }

    }

    public function index()
    {
        $page = (isset($_GET['page'])) ? $_GET['page'] : 0;

        $domain = $this->session->sessionDomain;
        $this->db->where("domain", strtolower($domain));

        $query = $this->db->select('accommodation.*')->from('accommodation')->order_by('id', 'desc')->limit(20, ($page))->get();

        $num_rows = $this->db->order_by('id', 'desc')->get('accommodation')->num_rows();

        $data['accommodation'] = $query->result_array();

        $data['links'] = $this->pagi->pagination1('admin/accommodation', $num_rows, 20);
//
//        echo "<pre>";
//        print_r($data);
//        echo "</pre>";

        $this->load->view('admin/accommodation/index', $data);

    }

    public function view($id = '')
    {
        $data['accommodation'] = $this->db->where('id', $id)->get('accommodation')->row_array();
        $this->load->view('admin/accommodation/view', $data);
    }

    public function add()
    {

        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            try {
                $this->load->helper(array('form'));

                $this->load->library('form_validation');

                $this->form_validation->set_rules('status', 'Status', 'required');

                if ($this->form_validation->run() == FALSE) {

                    $this->load->view('admin/accommodation/add');

                } else {
                    if ($_FILES['image']['name'] !== '') {
                        $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
                        $config['file_name'] = strtolower("accommodation_" . time() . "." . $ext);
                        $config['upload_path'] = './uploads/acomodation/';
                        $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG|jpeg';

                        $this->upload->initialize($config);

                        $this->upload->do_upload('image');

                        $_POST['image'] = $config['file_name'];
                    }else {
                        $this->session->set_flashdata('err', 'Accommodation photo is required');
                        return redirect(base_url('admin/accommodation/add'), 'refresh');
                    }


                    if ($this->db->insert('accommodation', $_POST)) {

                        $this->session->set_flashdata('msg', 'Accommodation Successfully Added');

                        return redirect(base_url('admin/accommodation'), 'refresh');

                    } else {

                        $this->session->set_flashdata('err', 'Please try Again After SomeTimes');

                        return redirect(base_url('admin/accommodation/add'), 'refresh');

                    }

                }

            }catch (Exception $e) {
                $this->session->set_flashdata('err', 'Error : ' . $e->getMessage());
                return redirect(base_url('admin/accommodation/add'), 'refresh');
            }

        } else {

            $this->load->view('admin/accommodation/add');

        }

    }

    public function edit($id = '')

    {

        if ($this->input->server('REQUEST_METHOD') == 'POST') {

            try {
//                $cat = $this->db->where('id', $id)->get('accommodation')->row_array();
                $this->load->helper(array('form'));
                $this->load->library('form_validation');
                $this->form_validation->set_rules('status', 'Status', 'required');
                $data = $this->db->where('id', $id)->get('accommodation')->row_array();
                if ($this->form_validation->run() == FALSE) {
                    $data['accommodation'] = $this->db->where('id', $id)->get('accommodation')->row_array();
                    $this->load->view('admin/accommodation/edit', $data);
                } else {
                    if ($_FILES['image']['name'] != '') {
                        $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
                        $config['file_name'] = strtolower("accommodation_" . time() . "." . $ext);

                        $config['upload_path'] = './uploads/acomodation/';
                        $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG|jpeg';
                        $this->upload->initialize($config);
                        $this->upload->do_upload('image');
                        $_POST['image'] = $config['file_name'];
                        unlink("./uploads/acomodation/".$data['image']);
                    }else {
                        $_POST['image'] = $data['image'];
                    }
                    if ($this->db->where('id', $id)->update('accommodation', $_POST)) {
                        $this->session->set_flashdata('msg', 'Accommodation Successfully updated');
                        return redirect(base_url('admin/accommodation'), 'refresh');
                    } else {
                        $this->session->set_flashdata('err', 'Please try Again After SomeTimes');
                        return redirect(base_url('admin/accommodation/edit/' . $id), 'refresh');
                    }
                }
            }catch (Exception $e){
                $this->session->set_flashdata('err', 'Error : '. $e->getMessage());
                return redirect(base_url('admin/accommodation/edit/' . $id), 'refresh');
            }

        } else {
            $data['accommodation'] = $this->db->where('id', $id)->get('accommodation')->row_array();
            $this->load->view('admin/accommodation/edit', $data);
        }
    }

    public function delete($id = '')

    {

        if ($this->db->where('id', $id)->delete('accommodation')) {

            $this->session->set_flashdata('msg', 'Success Deleted accommodation');

        } else {

            $this->session->set_flashdata('err', 'Please try After Sometimes...');

        }

        return redirect(base_url('admin/accommodation'), 'refresh');

    }

    public function getAccommodationData()
    {
        if ($this->input->server('REQUEST_METHOD') == 'GET') {
            try {
                $data = $this->db->where("domain", strtolower($this->session->sessionDomain))->get("accommodation_customize");
                if ($data) {
                    $this->load->view('admin/accommodation/customize', array("data" => $data->result()));
                } else {
                    $this->session->set_flashdata('err', 'could not fetch data from database');
                    return redirect(base_url() . "admin/accommodation/customize");
                }
            } catch (Exception $e) {
                $this->session->set_flashdata('err', $e->getMessage());
                return redirect(base_url() . "admin/accommodation/customize");
            }

        } else {
            $this->session->set_flashdata('err', 'http verbs method is invalid');
            return redirect(base_url() . "admin/accommodation/customize");
        }
    }

    public function updateAccommodationData()
    {

        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $db = $this->db->where("domain", strtolower($this->session->sessionDomain))->get("accommodation_customize");
            $result = $db->result();
            if ($_FILES['accommodation_photo']['name'] != '') {
                $ext = pathinfo($_FILES['accommodation_photo']['name'], PATHINFO_EXTENSION);
                $config['file_name'] = strtolower("accommodation_page_" . time() . "." . $ext);

                $config['upload_path'] = './uploads/acomodation/';
                $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG|jpeg';
                $this->upload->initialize($config);
                try {
                    $this->upload->do_upload('accommodation_photo');
                    $_POST['accommodation_photo'] = $config['file_name'];
                    unlink("'./uploads/acomodation/".$result[0]->accommodation_photo);
                } catch (Exception $e) {
                    echo "Error " . $e->getMessage();
                }

            } else {
                $_POST['accommodation_photo'] = $result[0]->accommodation_photo;
            }

            try {
                $db = $this->db->where("domain", strtolower($this->session->sessionDomain))->update("accommodation_customize", $_POST);
                if ($db) {
                    $this->session->set_flashdata('err', ' Data successfully updated');
                } else {
                    $this->session->set_flashdata('err', 'Please try Again After SomeTimes');
                }
                redirect(base_url() . "admin/accommodation/customize");
            } catch (Exception $e) {
                $this->session->set_flashdata('err', $e->getMessage());
                redirect(base_url() . "admin/accommodation/customize");
            }
        } else {
            $this->session->set_flashdata('err', 'http verbs method is invalid');
            redirect(base_url() . "admin/accommodation/customize");
        }
    }

    private function set_upload_options()
    {

        //upload an image options

        $config = array();

        $config['upload_path'] = base_url() . 'public/images/uploads/accommodation/';

        $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG|jpeg';

        $config['max_size'] = '0';

        $config['overwrite'] = FALSE;

        return $config;

    }

}
