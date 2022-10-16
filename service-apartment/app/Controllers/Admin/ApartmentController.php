<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ApartmentModel;
use App\Models\ApartmentStateModel;
use App\Models\HighlightApartmentModel;


class ApartmentController extends BaseController
{
    public function index()
    {
        $result_number  = 5;
        if($this->request->getPostGet()){
            $result_number = $this->request->getVar("result_number");
        }
        $apartmentModel = new ApartmentModel();
        $apartment = $apartmentModel->orderBy("id","desc")->paginate($result_number);

        $data = array(
            "apartment"=>"active",
            "data"=>$apartment,
            'pager' =>$apartmentModel->pager,
            'apartmentCount'=>count($apartmentModel->findAll())
        );
//        return $apartmentModel->pager->getPerPage();

        return view("admin/apartment/index", $data);
    }

    public function addApartment(){
        if($this->request->getPostGet()){
            $session = session();
            $apartment = new ApartmentModel();
            try {
                /*check image is valid or not*/
                $validationRule = [
                    'image' => [
                        'label' => 'Apartment Image',
                        'rules' => 'uploaded[image]'
                            . '|is_image[image]'
                            . '|mime_in[image,image/jpg,image/jpeg,image/gif,image/png,image/webp]'
                    ],
                ];
                if (! $this->validate($validationRule)) {
                    $session->setFlashdata("err","Please uploaded valid image");
                }else {
                    $realName = pathinfo($_FILES['image']['name'], PATHINFO_FILENAME);
//                    $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);

                    $file = $this->request->getFile("image");
                    $randomName = $file->getRandomName();
                    $name = $realName."_".$randomName;

                    /*compress image*/
                    $image = \Config\Services::image()
                        ->withFile($file)
                        ->withResource()
                        ->save('backend/img/apartment/compress/' .$name,50);

                    /*after save compress image, save also origin file*/
                    $file->move("backend/img/apartment/original/", $name);
                    $_POST['image'] =  $name;
                    $data = array_map("strtolower", $_POST);


                    $apartment->save($data);
                    $session->setFlashdata("msg","Apartment add successfully");
                    return redirect()->route("admin/apartment");
                }
            }catch (\Exception $e){
                $session->setFlashdata("err","Error : ".$e->getMessage());
            }
            return redirect()->route("admin/apartment/add");
        }
        $apartment = new ApartmentModel();
        $state = new ApartmentStateModel();
        $data = array(
            "apartment"=>"active",
            'apartmentCount'=>count($apartment->findAll()),
            "states"=>$state->orderBy("id","DESC")->findAll()
        );
        return view("admin/apartment/add", $data);
    }

    public function updateApartment($id){
        if($id!==null){
            $session = session();
            $apartment = new ApartmentModel();
            $apartmentData= $apartment->find($id);
            if($this->request->getPostGet()){
                try {
                    if($_FILES['image']['name']!==""){
                        /*check image is valid or not*/
                        $validationRule = [
                            'image' => [
                                'label' => 'Slider Image',
                                'rules' => 'uploaded[image]'
                                    . '|is_image[image]'
                                    . '|mime_in[image,image/jpg,image/jpeg,image/gif,image/png,image/webp]'
                            ],
                        ];
                        if (!$this->validate($validationRule)) {
                            $session->setFlashdata("err","Please uploaded valid image");
                        }else {
                            $realName = pathinfo($_FILES['image']['name'], PATHINFO_FILENAME);
                            $file = $this->request->getFile("image");
                            $randomName = $file->getRandomName();
                            $name = $realName."_".$randomName;

                            /*compress image*/
                            $image = \Config\Services::image()
                                ->withFile($file)
                                ->withResource()
                                ->save('backend/img/apartment/compress/' .$name,50);

                            /*after save compress image, save also origin file*/
                            $file->move("backend/img/apartment/original/", $name);
                            $_POST['image'] =  $name;
                        }
                    }else {
                        $_POST['image'] = $apartmentData['image'];
                    }
                    $data = array_map("strtolower", $_POST);
                    $apartment->update($id, $data);
                    $session->setFlashdata("msg","Apartment updated successfully");
                    return redirect()->route("admin/apartment");

                }catch (\Exception $e){
                    $session->setFlashdata("err","Error : ".$e->getMessage());
                }
                return redirect()->route("admin/apartment/".$id);
            }
            $state = new ApartmentStateModel();
            $data = array(
                "apartment"=>"active",
                "data"=>$apartmentData,
                "apartmentCount"=>count($apartment->findAll()),
                "states"=>$state->orderBy("id","DESC")->findAll()
            );
            return view("admin/apartment/edit", $data);
        }
    }

    public function deleteApartment($id){
        $session = session();
        try {
            $apartment = new ApartmentModel();
            $apartment->delete($id);
            $session->setFlashdata("err","Apartment has been Deleted");
            return redirect()->route("admin/apartment");
        }catch(\Exception $e){
            $session->setFlashdata("err","Error : ".$e->getMessage());
            return redirect()->route("admin/apartment");
        }
    }

    public function viewApartment($id, $highlight_id)
    {
        $apartmentModel = new ApartmentModel();
        $apartment = $apartmentModel->find($id);
//        $model = new HighlightApartmentModel();
//        $highlight_id = $model->where("service_apartment_id", $id)->find();

        $data = array(
            "apartment"=>"active",
            "data"=>$apartment,
            'apartmentCount'=>count($apartmentModel->findAll()),
            "highlight_id"=>$highlight_id
        );
        return view("admin/apartment/view", $data);
    }


}
