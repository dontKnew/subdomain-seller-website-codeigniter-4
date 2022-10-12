<?php


defined('BASEPATH') or exit('No direct script access allowed');


class Package extends CI_Controller

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

        $query = $this->db->select('package.*')->from('package')->order_by('id', 'desc')->limit(20, ($page))->get();
        $num_rows = $this->db->order_by('id', 'desc')->get('package')->num_rows();

        $data['package'] = $query->result_array();
        $data['links'] = $this->pagi->pagination1('admin/package', $num_rows, 20);

        $this->load->view('admin/package/index', $data);

    }


    public function add()

    {

        if ($this->input->server('REQUEST_METHOD') == 'POST') {

            $this->load->helper(array('form'));

            $this->load->library('form_validation');


            $this->form_validation->set_rules('status', 'Status', 'required');


            if ($this->form_validation->run() == FALSE) {

                $this->load->view('admin/package/add');

            } else {


                if ($_FILES['image']['name'] != '') {

                    $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
                    $config['file_name'] = strtolower("package_" . time() . "." . $ext);

                    $config['upload_path'] = './uploads/package/';

                    $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG|jpeg';

                    $this->upload->initialize($config);

                    $this->upload->do_upload('image');

                    $_POST['image'] = $config['file_name'];

                }


                if ($this->db->insert('package', $_POST)) {

                    $this->session->set_flashdata('msg', 'package Successfully Added');

                    return redirect(base_url('admin/package'), 'refresh');

                } else {

                    $this->session->set_flashdata('err', 'Please try Again After SomeTimes');

                    return redirect(base_url('admin/package/add'), 'refresh');

                }

            }

        } else {
            $this->load->view('admin/package/add');

        }

    }


    public function edit($id = '')

    {

        if ($this->input->server('REQUEST_METHOD') == 'POST') {

            $cat = $this->db->where('id', $id)->get('package')->row_array();
            $this->load->helper(array('form'));

            $this->load->library('form_validation');

            $this->form_validation->set_rules('status', 'Status', 'required');


            if ($this->form_validation->run() == FALSE) {

                $data['package'] = $this->db->where('id', $id)->get('package')->row_array();

                $this->load->view('admin/package/edit', $data);

            } else {

                $data = $this->db->where('id', $id)->get('package')->row_array();
                if ($_FILES['image']['name'] != '') {

                    $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
                    $config['file_name'] = strtolower("package_" . time() . "." . $ext);

                    $config['upload_path'] = './uploads/package/';

                    $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG|jpeg|mp4';

                    $this->upload->initialize($config);

                    $this->upload->do_upload('image');

                    $_POST['image'] = $config['file_name'];
                    unlink("./uploads/package/".$data['image']);

                }else {
                    $_POST['image'] = $data['image'];
                }



                if ($this->db->where('id', $id)->update('package', $_POST)) {

                    $this->session->set_flashdata('msg', 'package Successfully Added');

                    return redirect(base_url('admin/package'), 'refresh');

                } else {

                    $this->session->set_flashdata('err', 'Please try Again After SomeTimes');

                    return redirect(base_url('admin/package/edit/' . $id), 'refresh');

                }

            }

        } else {

            $data['package'] = $this->db->where('id', $id)->get('package')->row_array();

            $this->load->view('admin/package/edit', $data);

        }

    }


    public function view($id = '')

    {

        $data['package'] = $this->db->where('id', $id)->get('package')->row_array();

        $this->load->view('admin/package/view', $data);

    }


    public function delete($id = '')

    {

        if ($this->db->where('id', $id)->delete('package')) {

            $this->session->set_flashdata('msg', 'Success Deleted package');

        } else {

            $this->session->set_flashdata('err', 'Please try After Sometimes...');

        }

        return redirect(base_url('admin/package'), 'refresh');

    }


    public function getPackageData()
    {
        if ($this->input->server('REQUEST_METHOD') == 'GET') {
            try {
                $data = $this->db->where("domain", strtolower($this->session->sessionDomain))->get("package_customize");
                if ($data) {
                    $this->load->view('admin/package/customize', array("data" => $data->result()));
                } else {
                    $this->session->set_flashdata('err', 'could not fetch data from database');
                    redirect(base_url() . "admin/package/customize");
                }
            } catch (\Exception $e) {
                $this->session->set_flashdata('err', $e->getMessage());
                redirect(base_url() . "admin/package/customize");
            }
        } else {
            $this->session->set_flashdata('err', 'http verbs method is invalid');
            redirect(base_url() . "admin/package/customize");
        }

    }

    public function updatePackageData()
    {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $db = $this->db->where("domain", strtolower($this->session->sessionDomain))->get("package_customize");
            $result = $db->result();
            if ($_FILES['package_photo']['name'] != '') {
                $ext = pathinfo($_FILES['package_photo']['name'], PATHINFO_EXTENSION);
                $config['file_name'] = strtolower("package_page_" . time() . "." . $ext);
                $config['upload_path'] = './uploads/package/';
                $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG|jpeg';
                $this->upload->initialize($config);
                try {
                    $this->upload->do_upload('package_photo');
                    $_POST['package_photo'] = $config['file_name'];
//                    unlink("./uploads/package/".$result[0]->package_photo);
                } catch (Exception $e) {
                    echo "Error " . $e->getMessage();
                }
            } else {
                $_POST['package_photo'] = $result[0]->package_photo;
            }

            try {
                $db = $this->db->where("domain", strtolower($this->session->sessionDomain))->update("package_customize", $_POST);
                if ($db) {
                    $this->session->set_flashdata('err', 'package Data successfully updated');
                } else {
                    $this->session->set_flashdata('err', 'package : Please try Again After SomeTimes');
                }
                redirect(base_url() . "admin/package/customize");
            } catch (\Exception $e) {
                $this->session->set_flashdata('err', $e->getMessage());
            }
        } else {
            $this->session->set_flashdata('err', 'http verbs method is invalid');
        }
        redirect(base_url() . "admin/package/customize");
    }

//    PACKAGE INCLUSION

    public function inclusions()
    {
        try {
            $domain = strtolower($this->session->sessionDomain);
            $query = $this->db->select('package_inclusions.*')->from('package_inclusions')->where("domain", $domain)->order_by('id', 'desc')->get();
            $data['package_inclusions'] = $query->result_array();
            $this->load->view('admin/package/inclusions/index', $data);
        } catch (Exception $e) {
            echo 'Error : ' . $e->getMessage();
            exit;
        }
    }

    public function addInclusions()
    {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            try {
                $this->load->helper(array('form'));
                $this->load->library('form_validation');
                $this->form_validation->set_rules('name', 'Name', 'required');
                if ($this->form_validation->run() == FALSE) {
                    $this->load->view('admin/package/inclusions/add');
                } else {
                    $domain = strtolower($this->session->sessionDomain);
                    $_POST['domain'] = $domain;
                    $package_name = $this->db->select('package.name')->from('package')->where("id", $_POST['package_id'])->get()->result_array();
                    $_POST['package_name'] = $package_name[0]['name'];
                    if ($this->db->insert('package_inclusions', $_POST)) {
                        $this->session->set_flashdata('msg', 'Room Facility Successfully Added');
                        return redirect(base_url('admin/inclusions'), 'refresh');
                    } else {
                        $this->session->set_flashdata('err', 'Please try Again After SomeTimes');
                        return redirect(base_url('admin/inclusions/add'), 'refresh');
                    }
                }
            } catch (Exception $e) {
                $this->session->set_flashdata('err', 'Error : ' . $e->getMessage());
                return redirect(base_url('admin/inclusions/add'), 'refresh');
            }
        } else {
            try {
                $domain = $this->session->sessionDomain;
                $query = $this->db->select('package.name,package.id ')->from('package')->where("domain", $domain)->order_by('id', 'desc')->get();
                $data['all_package'] = $query->result_array();
                $this->load->view('admin/package/inclusions/add', $data);
            } catch (Exception $e) {
                echo 'Error : ' . $e->getMessage();
                exit;
            }
        }

    }

    public function deleteInclusions($id = '')
    {
        try {
            if ($this->db->where('id', $id)->delete('package_inclusions')) {
                $this->session->set_flashdata('msg', 'Success Deleted facility');
            } else {
                $this->session->set_flashdata('err', 'Please try After Sometimes...');
            }
            return redirect(base_url('admin/inclusions'), 'refresh');
        } catch (Exception $e) {
            echo 'Error : ' . $e->getMessage();
            exit;
        }
    }


}
