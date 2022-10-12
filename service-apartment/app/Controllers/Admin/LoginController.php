<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

use App\Models\AdminModel;

class LoginController extends BaseController
{
    public function index()
    {
        return view('admin/login');
    }

    public function adminLogin(){
        $session = session();
        $model = new AdminModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $data = $model->where('email', $email)->first();

        if($data){
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);
            if($verify_pass){
                $ses_data = [
                    'id'       => $data['id'],
                    'name'     => $data['name'],
                    'email'    => $data['email'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('admin/dashboard');
            }else{
                $session->setFlashdata('msg', 'Please enter the correct Password');
                return redirect()->to('admin/login');
            }
        }else{
            $session->setFlashdata('msg', 'This Email is not registered us');
            return redirect()->to('admin/login');
        }
    }

    public function changePassword(){
        if($this->request->getMethod()=="post"){
            $session = session();
            $id = $session->get('id');
            $password = $this->request->getVar('password');
            $cpassword = $this->request->getVar('cpassword');

            if($password == $cpassword){
                $password = password_hash($password, PASSWORD_DEFAULT);
                $model = new AdminModel();
                try {
                    if($model->update($id, array("password"=>$password))){
                        $session->setFlashdata('msg', 'Password has been changed');
                    }else {
                        $session->setFlashdata('msg', 'Password could not change');
                    }
                    return redirect()->to('change-password');
                }catch(Exception $e){
                    $session->setFlashdata('msg', 'Error :'.$e->getMessage());
                    return redirect()->to('change-password');
                }

            }else {
                $session->setFlashdata('msg', 'Please enter same password');
                return redirect()->to('change-password');
            }

        }

        return view("change-password");
    }

    public function adminProfile(){
        $session = session();
        $id = $session->get('id');
        $admin = new AdminModel();
        $data = $admin->find($id);
        return view("admin-profile",["data"=>$data]);
    }

    public function adminLogout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('admin/login');
    }
}
