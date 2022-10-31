<?php
class Pagi{

    public function __construct()
    {

       
        $CI =& get_instance();
       $CI->load->helper('url');
       $CI->load->library('session');
       $CI->load->database();
       $CI->load->library('pagination');
    }

    public function pagination1($url='',$num_rows='',$perpage='')
    {
        if($url!='')
        {
        $config['enable_query_strings']=TRUE;
        $config['page_query_string'] = TRUE;
        $config['query_string_segment'] = 'page';
        $config['reuse_query_string'] = true;
        $config['base_url'] = base_url($url);
        $config['total_rows'] = $num_rows;
        $config['per_page'] = $perpage;
        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';



        $config['prev_link'] = '<i class="fa fa-long-arrow-left"></i>Previous Page';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';


        $config['next_link'] = 'Next Page<i class="fa fa-long-arrow-right"></i>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $CI =& get_instance();

        $CI->load->library('pagination');
        $CI->pagination->initialize($config); 

        return $CI->pagination->create_links(); 
        }
        
    }
}