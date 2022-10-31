<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Company extends CI_Controller

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

        $query = $this->db->select('company.*')->from('company')->order_by('id', 'desc')->limit(10, ($page))->get();

        $num_rows = $this->db->order_by('id', 'desc')->get('company')->num_rows();

        $data['company'] = $query->result_array();
        $data['links'] = $this->pagi->pagination1('admin/company', $num_rows, 20);

        $this->load->view('admin/company/index', $data);
    }

    public function view($id = '')

    {

        $data['company'] = $this->db->where('id', $id)->get('company')->row_array();

        $this->load->view('admin/company/view', $data);
    }

    public function add()

    {

        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $this->load->helper(array('form'));

            $this->load->library('form_validation');


            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('domain', 'domain', 'required|is_unique[company.domain]');
            $this->form_validation->set_rules('email', 'email', 'required|is_unique[company.email]');
            $this->form_validation->set_rules('mobile', 'mobile', 'required');
            $this->form_validation->set_rules('address', 'address', 'required');

            if (!$this->form_validation->run()) {

                $this->load->view('admin/company/add');
            } else {
                $time = time();
                if ($_FILES['logo']['name'] != '') {
                    $ext = pathinfo($_FILES['logo']['name'], PATHINFO_EXTENSION);
                    $config['file_name'] = strtolower("logo_".$time."." .$ext);

                    $config['upload_path'] = './uploads/company/';
                    $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG|jpeg';
                    $this->upload->initialize($config);
                    $this->upload->do_upload('logo');
                    $_POST['logo'] = $config['file_name'];
                }
                if ($_FILES['favicon']['name'] != '') {
                    $ext = pathinfo($_FILES['favicon']['name'], PATHINFO_EXTENSION);
                    $config['file_name'] = strtolower("favicon_".$time."." .$ext);

                    $config['upload_path'] = './uploads/company/';
                    $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG|jpeg';
                    $this->upload->initialize($config);
                    $this->upload->do_upload('favicon');
                    $_POST['favicon'] = $config['file_name'];
                }
                try {

                    $data = array_map("strtolower", $_POST); // return all array to lower case

                    $myhost = strtolower(trim(DOMAIN));
                    $count = substr_count($myhost, '.');
                    if($count === 2){
                        if(strlen(explode('.', $myhost)[1]) > 3) $myhost = explode('.', $myhost, 2)[1];
                    } else if($count > 2){
                        $myhost = get_domain(explode('.', $myhost, 2)[1]);
                    }

                    $data['domain'] = $data['domain'].".".$myhost;

                    $this->db->trans_start();

                    $this->db->insert("home_customize", array("domain" => $data['domain']));
//                    $this->db->insert("slider", array("domain" => $data['domain']));
//                    $this->db->insert("footer_facility", array("domain" => $data['domain']));


                    $this->db->insert("accommodation_customize", array("domain" => $data['domain']));
//                    $this->db->insert("accommodation", array("domain" => $data['domain']));
//                    $this->db->insert("room_facility", array("domain" => $data['domain']));
//                    $this->db->insert("room_overview", array("domain" => $data['domain']));
//                    $this->db->insert("room_facility", array("domain" => $data['domain']));
//                    $this->db->insert("room_preview_photo", array("domain" => $data['domain']));

                    $this->db->insert("amenities_customize", array("domain" => $data['domain']));
//                    $this->db->insert("amenities", array("domain" => $data['domain']));

                    $this->db->insert("package_customize", array("domain" => $data['domain']));
//                    $this->db->insert("package", array("domain" => $data['domain']));
//                    $this->db->insert("package_inclusions", array("domain" => $data['domain']));

                    $this->db->insert("gallery_customize", array("domain" => $data['domain']));
//                    $this->db->insert("gallary", array("domain" => $data['domain']));
//                    $this->db->insert("gallery_type", array("domain" => $data['domain']));

                    $this->db->insert("testinomial_customize", array("domain" => $data['domain']));
//                    $this->db->insert("testinomial", array("domain" => $data['domain']));

                    $this->db->insert("about_customize", array("domain" => $data['domain']));
//                    $this->db->insert("about_point_word", array("domain" => $data['domain']));

                    $this->db->insert('company', $data);

                    $this->db->trans_complete();

                    if ($this->db->trans_status() !== FALSE) {
                        $this->session->set_flashdata('msg', 'company Successfully added');
                        return redirect(base_url('admin/company'), 'refresh');
                    } else {
                        $this->session->set_flashdata('err', 'Company Could not add');
                        return redirect(base_url("admin/company/add"));
                    }
                } catch (Exception $e) {
                    $this->session->set_flashdata('err', $e->getMessage());
                }
                redirect(base_url('admin/company/add'), 'refresh');
            }
        } else {
            $this->load->view('admin/company/add');
        }
    }

    public function edit($id = '')
    {

        if ($this->input->server('REQUEST_METHOD') == 'POST') {

            $this->load->helper(array('form'));
            $this->load->library('form_validation');
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('domain', 'domain', 'required');
            $this->form_validation->set_rules('email', 'email', 'required');
            $this->form_validation->set_rules('mobile', 'mobile', 'required');
            $this->form_validation->set_rules('address', 'address', 'required');

            if ($this->form_validation->run() == FALSE) {

                $data['company'] = $this->db->where('id', $id)->get('company')->row_array();

                $this->load->view('admin/company/edit', $data);
            } else {
                try {
                    $data1 = $this->db->where('id', $id)->get('company')->row_array();
                    if ($_FILES['logo']['name'] != '') {

                        $ext = pathinfo($_FILES['logo']['name'], PATHINFO_EXTENSION);
                        $config['file_name'] = strtolower("logo_".$time."." .$ext);

                        $config['upload_path'] = 'uploads/company/';
                        $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG|jpeg';
                        $this->upload->initialize($config);
                        $this->upload->do_upload('logo');
                        if(file_exists("./uploads/company/" . $data1['logo'])){
                            unlink("./uploads/company/" . $data1['logo']);
                        }
                        $_POST['logo'] = $config['file_name'];

                    } else {
                        $_POST['logo'] = $data1['logo'];
                    }
                    if ($_FILES['favicon']['name'] != '') {

                        $ext = pathinfo($_FILES['favicon']['name'], PATHINFO_EXTENSION);
                        $config['file_name'] = strtolower("favicon_".$time."." .$ext);

                        $config['upload_path'] = 'uploads/company/';
                        $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG|jpeg';
                        $this->upload->initialize($config);
                        $this->upload->do_upload('favicon');
                        if(file_exists("./uploads/company/" . $data1['favicon'])){
                            unlink("./uploads/company/" . $data1['favicon']);
                        }
                        $_POST['favicon'] = $config['file_name'];
                    } else {
                        $_POST['favicon'] = $data1['favicon'];
                    }

                    $data = array_map("strtolower", $_POST); // return all array to lower case

                    $myhost = strtolower(trim(DOMAIN));
                    $count = substr_count($myhost, '.');
                    if($count === 2){
                        if(strlen(explode('.', $myhost)[1]) > 3) $myhost = explode('.', $myhost, 2)[1];
                    } else if($count > 2){
                        $myhost = get_domain(explode('.', $myhost, 2)[1]);
                    }

                    $data['domain'] = $data['domain'].".".$myhost;

                    $this->db->trans_start();

                    $this->db->where('domain', $data1['domain'])->update("home_customize", array("domain" => $data['domain']));
                    $this->db->where('domain', $data1['domain'])->update("slider", array("domain" => $data['domain']));
                    $this->db->where('domain', $data1['domain'])->update("footer_facility", array("domain" => $data['domain']));


                    $this->db->where('domain', $data1['domain'])->update("accommodation_customize", array("domain" => $data['domain']));
                    $this->db->where('domain', $data1['domain'])->update("accommodation", array("domain" => $data['domain']));
                    $this->db->where('domain', $data1['domain'])->update("room_facility", array("domain" => $data['domain']));
                    $this->db->where('domain', $data1['domain'])->update("room_overview", array("domain" => $data['domain']));
                    $this->db->where('domain', $data1['domain'])->update("room_facility", array("domain" => $data['domain']));
                    $this->db->where('domain', $data1['domain'])->update("room_preview_photo", array("domain" => $data['domain']));

                    $this->db->where('domain', $data1['domain'])->update("amenities_customize", array("domain" => $data['domain']));
                    $this->db->where('domain', $data1['domain'])->update("amenities", array("domain" => $data['domain']));

                    $this->db->where('domain', $data1['domain'])->update("package_customize", array("domain" => $data['domain']));
                    $this->db->where('domain', $data1['domain'])->update("package", array("domain" => $data['domain']));
                    $this->db->where('domain', $data1['domain'])->update("package_inclusions", array("domain" => $data['domain']));

                    $this->db->where('domain', $data1['domain'])->update("gallery_customize", array("domain" => $data['domain']));
                    $this->db->where('domain', $data1['domain'])->update("gallary", array("domain" => $data['domain']));
                    $this->db->where('domain', $data1['domain'])->update("gallery_type", array("domain" => $data['domain']));

                    $this->db->where('domain', $data1['domain'])->update("testinomial_customize", array("domain" => $data['domain']));
                    $this->db->where('domain', $data1['domain'])->update("testinomial", array("domain" => $data['domain']));

                    $this->db->where('domain', $data1['domain'])->update("about_customize", array("domain" => $data['domain']));
                    $this->db->where('domain', $data1['domain'])->update("about_point_word", array("domain" => $data['domain']));

                    $this->db->where('id', $id)->update('company', $data);
                    $this->db->trans_complete();

                    if ($this->db->trans_status() !== FALSE) {
                        if (strtolower($this->session->sessionDomain) == $data['domain']) {
                            $this->session->set_userdata("sessionDomain", strtoupper($data['domain']));
                        }
                        $this->session->set_flashdata('msg', 'company Successfully updated');
                        return redirect(base_url('admin/company'), 'refresh');
                    } else {
                        $this->session->set_flashdata('err', 'Company Could not modified');
                        return redirect(base_url('admin/company/edit/' . $id), 'refresh');
                    }
                } catch (Exception $e) {
                    $this->session->set_flashdata('err', 'Error : ' . $e->getMessage());
                    return redirect(base_url('admin/company'), 'refresh');
                }
            }
        } else {
            $data['company'] = $this->db->where('id', $id)->get('company')->row_array();
            $this->load->view('admin/company/edit', $data);
        }
    }

    public function delete($id = '')
    {
        try {
            $data = $this->db->where('id', $id)->get('company')->row_array();
            $this->db->trans_start();

            $this->db->where('domain', $data['domain'])->delete("home_customize");
            $this->db->where('domain', $data['domain'])->delete("slider");
            $this->db->where('domain', $data['domain'])->delete("footer_facility");


            $this->db->where('domain', $data['domain'])->delete("accommodation_customize");
            $this->db->where('domain', $data['domain'])->delete("accommodation");
            $this->db->where('domain', $data['domain'])->delete("room_facility");
            $this->db->where('domain', $data['domain'])->delete("room_overview");
            $this->db->where('domain', $data['domain'])->delete("room_facility");
            $this->db->where('domain', $data['domain'])->delete("room_preview_photo");

            $this->db->where('domain', $data['domain'])->delete("amenities_customize");
            $this->db->where('domain', $data['domain'])->delete("amenities");

            $this->db->where('domain', $data['domain'])->delete("package_customize");
            $this->db->where('domain', $data['domain'])->delete("package");
            $this->db->where('domain', $data['domain'])->delete("package_inclusions");

            $this->db->where('domain', $data['domain'])->delete("gallery_customize");
            $this->db->where('domain', $data['domain'])->delete("gallary");
            $this->db->where('domain', $data['domain'])->delete("gallery_type");

            $this->db->where('domain', $data['domain'])->delete("testinomial_customize");
            $this->db->where('domain', $data['domain'])->delete("testinomial");

            $this->db->where('id', $id)->delete('company');
            $this->db->trans_complete();

            if ($this->db->trans_status() !== FALSE) {
                $this->session->set_flashdata('msg', 'Company and whole website successfully deleted');
                return redirect(base_url('admin/company'), 'refresh');
            } else {
                $this->session->set_flashdata('err', 'Please try After Sometimes...');
                return redirect(base_url('admin/company/edit/' . $id), 'refresh');
            }
            return redirect(base_url('admin/company'), 'refresh');

        } catch (Exception $e) {
            $this->session->set_flashdata('err', 'Error :' . $e->getMessage());
        }
    }
}
