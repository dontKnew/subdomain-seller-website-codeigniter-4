<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


if (!function_exists('send_mail')) {
    function send_mail()
    {
        $ci =& get_instance();
        $config = array(
            // change it to yours
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'wordwrap' => TRUE
        );

        $ci->email->initialize($config);
        $ci->email->set_newline("\r\n");
        $ci->email->from("israfil123.sa@gmail.com"); // change it to yours
        $ci->email->to("israfil123.sa@gmail.com");// change it to yours
        $ci->email->subject("Subject");
        $ci->email->message("message");
        if (!$ci->email->send()) {
            echo $ci->email->print_debugger();
            exit;
        }
    }

}
