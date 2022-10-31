<?php


defined('BASEPATH') or exit('No direct script access allowed');


class Seotools extends CI_Controller

{

    function __construct()
    {

        parent::__construct();

        $this->load->database();
        $this->load->library('user_agent');
        $this->session->set_userdata('previous_url', current_url());

        $x = $this->session->userdata('iletsadmin');

        if ($x['role'] != 1) {

            return redirect('home', 'refresh');
        }

    }


    public function index()
    {
        try {
            $domain = strtolower($this->session->sessionDomain);
            $query = $this->db->select('seo_tags.*')->from('seo_tags')->where("domain",$domain)->order_by('page_name', 'asc')->get();
            $data['seotags'] = $query->result_array();
            $this->load->view('admin/seotools/index', $data);
        }catch (Exception $e){
            echo 'Error : '. $e->getMessage();
            exit;
        }
    }

    public function add()
    {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            try {
                $this->load->helper(array('form'));
                $this->load->library('form_validation');
                $this->form_validation->set_rules('page_name', 'Name', 'required');
                if ($this->form_validation->run() == FALSE) {
                    $this->load->view('admin/seotools/add');
                } else {
                    $domain = strtolower($this->session->sessionDomain);
                    $_POST['domain'] = $domain;
                    if ($this->db->insert('seo_tags', $_POST)) {
                        $this->session->set_flashdata('msg', ' SEO Tags  Successfully Added');
                        return redirect(base_url('admin/seotags'), 'refresh');
                    } else {
                        $this->session->set_flashdata('err', 'Please try Again After SomeTimes');
                        return redirect(base_url('admin/seotags/add'), 'refresh');
                    }
                }
            }catch (Exception $e){
                $this->session->set_flashdata('err', 'Error : '. $e->getMessage());
                return redirect(base_url('admin/seotags/add'), 'refresh');
            }
        } else {
            $this->load->view('admin/seotools/add');
        }

    }

    public function edit($id = '')

    {

        if ($this->input->server('REQUEST_METHOD') == 'POST') {

            try {
                $this->form_validation->set_rules('page_name', 'Name', 'required');
                if ($this->form_validation->run() == FALSE) {
                    $data['seotag'] = $this->db->where('id', $id)->get('seo_tags')->row_array();
                    $this->load->view('admin/seotools/edit', $data);
                } else {
                    $data = array_map("trim", $_POST);
                    if ($this->db->where('id', $id)->update('seo_tags', $data)) {
                        $this->session->set_flashdata('msg', 'SEO Tags is Successfully updated');
                        return redirect(base_url('admin/seotags'), 'refresh');
                    } else {
                        $this->session->set_flashdata('err', 'Please try Again After SomeTimes');
                        return redirect(base_url('admin/seotags/edit/' . $id), 'refresh');
                    }
                }
            }catch (Exception $e){
                $this->session->set_flashdata('err', 'Error : '. $e->getMessage());
                return redirect(base_url('admin/seotags/edit/' . $id), 'refresh');
            }

        } else {
            $data['seotag'] = $this->db->where('id', $id)->get('seo_tags')->row_array();
//            $this->load->view('admin/seotools/edit', $data);
            $this->load->view("admin/seotools/edit", $data);
        }
    }

    public function delete($id = '')
    {
        try {
            if ($this->db->where('id', $id)->delete('seo_tags')) {
                $this->session->set_flashdata('msg', 'Success Deleted SEO Tag');
            } else {
                $this->session->set_flashdata('err', 'Please try After Sometimes...');
            }
            return redirect(base_url('admin/seotags'), 'refresh');
        }catch (Exception $e){
            echo 'Error : '. $e->getMessage();
            exit;
        }
    }


}
