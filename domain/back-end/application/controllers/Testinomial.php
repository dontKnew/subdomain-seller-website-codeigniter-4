<?php

defined('BASEPATH') or exit('No direct script access allowed');


class Testinomial extends CI_Controller

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
        $query = $this->db->select('testinomial.*')->from('testinomial')->order_by('id', 'desc')->limit(20, ($page))->get();

        $num_rows = $this->db->order_by('id', 'desc')->get('testinomial')->num_rows();
        $data['testinomial'] = $query->result_array();

        $data['links'] = $this->pagi->pagination1('admin/testinomial', $num_rows, 20);

        $this->load->view('admin/testinomial/index', $data);
    }



    public function add()
    {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {

            if ($_FILES['profile']['name'] != '') {
                $ext = pathinfo($_FILES['profile']['name'], PATHINFO_EXTENSION);
                $config['file_name'] = strtolower("profile_" . time() . "." . $ext);

                $config['upload_path'] = './uploads/testinomial/profile';
                $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG|jpeg';
                $this->upload->initialize($config);
                try {
                    $this->upload->do_upload('profile');
                    $_POST['profile'] = $config['file_name'];

//                    save to database
                    $this->load->helper(array('form'));
                    $this->load->library('form_validation');
                    $this->form_validation->set_rules('status', 'status', 'required');
                    if ($this->form_validation->run() == FALSE) {
                        $this->load->view('admin/testinomial/add');
                    } else {

                        if ($this->db->insert('testinomial', $_POST)) {
                            $this->session->set_flashdata('msg', 'testinomial Successfully Added');
                            return redirect(base_url('admin/testinomial'), 'refresh');

                        } else {

                            $this->session->set_flashdata('err', 'Please try Again After SomeTimes');
                            return redirect(base_url('admin/testinomial/add'), 'refresh');
                        }
                    }
//                    end save to database
                } catch (Exception $e) {
                    echo "Error " . $e->getMessage();
                }
            }else {
                $this->session->set_flashdata('err', 'profile does not exists');
                return redirect(base_url('admin/testinomial/add'), 'refresh');
            }

        } else {
            $this->load->view('admin/testinomial/add');
        }
    }



    public function edit($id)
    {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
        try {
            $this->load->helper(array('form'));
            $this->load->library('form_validation');
            $this->form_validation->set_rules('status', 'status', 'required');

            if ($this->form_validation->run() == FALSE) {
                $data = $this->db->where('id', $id)->get('testinomial');
                $this->load->view('admin/testinomial/edit/', ["data"=>$data->result()]);
            } else {
                $db = $this->db->where("domain", strtolower($this->session->sessionDomain))->get("testinomial");
                $result = $db->result();
//                check profile exist or not
                if($_FILES['profile']['name']!='')
                {
                    $ext = pathinfo($_FILES['profile']['name'], PATHINFO_EXTENSION);
                    $config['file_name'] = strtolower("profile_" . time() . "." . $ext);;
                    $config['upload_path'] = './uploads/testinomial/profile';
                    $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG|jpeg';
                    $this->upload->initialize($config);
                    try {
                        $this->upload->do_upload('profile');
                        $_POST['profile'] = $config['file_name'];
                        unlink("./uploads/testinomial/profile".$result[0]->profile);
                    }catch(Exception $e){
                        echo "Error ".$e->getMessage();
                        return false;
                    }
                }else {

                    $_POST['profile'] = $result[0]->profile;
                }

                if ($this->db->where('id', $id)->update('testinomial', $_POST)) {
                    $this->session->set_flashdata('msg','Testinomial Successfully updated');
                    return redirect(base_url('admin/testinomial'), 'refresh');
                } else {
                    $this->session->set_flashdata('err', 'Testinomial Please try Again After SomeTimes');
                    return redirect(base_url('admin/testinomial/edit/').$id, 'refresh');
                }
            }
        }catch(Exception $e){
            $this->session->set_flashdata('err', 'Error : '.$e->getMessage());
            return redirect(base_url('admin/testinomial/edit/').$id, 'refresh');
        }
        } else {
            $data = $this->db->where('id', $id)->get('testinomial');
            $this->load->view('admin/testinomial/edit', ["data"=>$data->result()]);
        }
    }

    public function delete($id = '')
    {
        if ($this->db->where('id', $id)->delete('testinomial')) {
            $this->session->set_flashdata('msg', 'Success Deleted testinomial');
        } else {
            $this->session->set_flashdata('err', 'Please try After Sometimes...');
        }
        return redirect(base_url('admin/testinomial'), 'refresh');
    }


    public function getTestinomialData()
    {
        try {
            $data = $this->db->where("domain", strtolower($this->session->sessionDomain))->get("testinomial_customize");
            if ($data) {
                $this->load->view('admin/testinomial/customize', array("data" => $data->result()));
            } else {
                $this->session->set_flashdata('err', 'could not fetch data from database');
                redirect(base_url() . "admin/testinomial/customize");
            }
        } catch (\Exception $e) {
            $this->session->set_flashdata('err', $e->getMessage());
            redirect(base_url() . "admin/testinomial/customize");
        }
    }

    public function updateTestinomialData()
    {

        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            if ($_FILES['testinomial_photo']['name'] != '') {
                $ext = pathinfo($_FILES['testinomial_photo']['name'], PATHINFO_EXTENSION);
                $config['file_name'] = strtolower("testinomial_page_" . time() . "." . $ext);
                $config['upload_path'] = './uploads/testinomial/';
                $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG|jpeg';
                $this->upload->initialize($config);
                try {
                    $this->upload->do_upload('testinomial_photo');
                    $_POST['testinomial_photo'] = $config['file_name'];
                } catch (Exception $e) {
                    echo "Error " . $e->getMessage();
                }
            } else {
                $db = $this->db->where("domain", strtolower($this->session->sessionDomain))->get("testinomial_customize");
                $result = $db->result();
                $_POST['testinomial_photo'] = $result[0]->testinomial_photo;
            }
            try {
                $db = $this->db->where("domain", strtolower($this->session->sessionDomain))->update("testinomial_customize", $_POST);
                if ($db) {
                    $this->session->set_flashdata('err', ' testinomial Data successfully updated');
                } else {
                    $this->session->set_flashdata('err', 'testinomial : Please try Again After SomeTimes');
                }
            } catch (\Exception $e) {
                $this->session->set_flashdata('err', $e->getMessage());
            }
            redirect(base_url() . "admin/testinomial/customize");
        } else {
            $this->session->set_flashdata('err', 'http verbs method is invalid');
            redirect(base_url() . "admin/testinomial/customize");
        }
    }
}
