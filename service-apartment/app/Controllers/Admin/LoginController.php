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
                    'profile'    => $data['profile'],
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
                        $session->setFlashdata('err', 'Password could not change');
                    }
                    return redirect()->to('admin/change-password');
                }catch(Exception $e){
                    $session->setFlashdata('err', 'Error :'.$e->getMessage());
                    return redirect()->to('admin/change-password');
                }

            }else {
                $session->setFlashdata('err', 'Please enter same password');
                return redirect()->to('admin/change-password');
            }

        }
        return view("admin/profile/change_password");
    }

    public function adminProfile(){
        $session = session();
        $id = $session->get('id');
        $admin = new AdminModel();
        $data = $admin->find($id);
        return view("admin/profile/profile",["data"=>$data]);
    }

    public function updateProfile(){
        if($this->request->getMethod()=="post"){
            $session = session();
            $id = $session->get('id');
            $model = new AdminModel();
            $oldData  =$model->find($id);
            try {
                $data = $this->request->getVar();
                $image = $this->updateImage("profile", $oldData['profile'], "backend/img/admin_profile/" );
                $data['profile'] = $image;
                $_SESSION['profile'] = $image;
                $_SESSION['name'] = $data['name'];
                $_SESSION['email'] = $data['email'];
                if($model->update($id, $data)){
                    $session->setFlashdata('msg', 'Your profile is updated');
                }else {
                    $session->setFlashdata('msg', 'Profile could not update');
                }
                return redirect()->to('admin/profile');

            }catch(Exception $e){
                $session->setFlashdata('msg', 'Error :'.$e->getMessage());
                return redirect()->to('admin/profile');
            }
        }
    }

    public function adminLogout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('admin/login');
    }

    public function updateImage(string $input_name, $old_image_name, $path){
        if($_FILES[$input_name]['name']!==""){
            /*check image is valid or not*/
            $validationRule = [
                $input_name => [
                    'rules' => 'uploaded['.$input_name.']'
                        . '|is_image['.$input_name.']'
                        . '|mime_in['.$input_name.',image/jpg,image/jpeg,image/gif,image/png,image/webp]'
                ],
            ];
            if (!$this->validate($validationRule)) {
                echo "Please uploaded valid image";
                exit;
            }else {
                $realName = pathinfo($_FILES[$input_name]['name'], PATHINFO_FILENAME);
                $file = $this->request->getFile($input_name);
                $randomName = $file->getRandomName();
                $name = $realName."_".$randomName;
                $file->move($path, $name);
                if(file_exists($path."/".$old_image_name)){
                    unlink($path."/".$old_image_name);
                }
                return  $name;
            }
        }else {
            return  $old_image_name;
        }
    }
}
