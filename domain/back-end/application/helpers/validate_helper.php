<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


if (!function_exists('check_login')) {

    function check_login($var = '')
    {
        $ci =& get_instance();
        if (empty($ci->session->userdata('iletsadmin'))) {
            return 0;
        } else {
            return 1;
        }
    }

}

function generateRandomString($length = 6)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
