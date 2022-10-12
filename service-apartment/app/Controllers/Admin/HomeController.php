<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\HomeSliderModel as Slider;
use CodeIgniter\Files\File;

class HomeController extends BaseController
{
    public function index()
    {
        $result_number  = 5;
        if($this->request->getPostGet()){
            $result_number = $this->request->getVar("result_number");
        }
        $sliderModel = new Slider();
        $slider = $sliderModel->orderBy("id","desc")->paginate($result_number);

        $data = array(
            "home_slider"=>"active",
            "data"=>$slider,
            'pager' =>$sliderModel->pager,
            'sliderCount'=>count($sliderModel->findAll())
        );
//        return $sliderModel->pager->getPerPage();

        return view("admin/home_slider/index", $data);
    }

    public function addSlider(){
        if($this->request->getPostGet()){
            $session = session();
            $slider = new Slider();
            try {
                /*check image is valid or not*/
                $validationRule = [
                    'image' => [
                        'label' => 'Slider Image',
                        'rules' => 'uploaded[image]'
                            . '|is_image[image]'
                            . '|mime_in[image,image/jpg,image/jpeg,image/gif,image/png,image/webp]'
                    ],
                ];
                if (! $this->validate($validationRule)) {
                    $session->setFlashdata("err","Please uploaded valid image");
                }else {
                    $realName = pathinfo($_FILES['image']['name'], PATHINFO_FILENAME);
                    $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);

                    $file = $this->request->getFile("image");
                    $randomName = $file->getRandomName();
                    $name = $realName."_".$randomName;

                    /*compress image*/
                    $image = \Config\Services::image()
                        ->withFile($file)
                        ->withResource()
                        ->save('backend/img/slider/compress/' .$name,10);

                    /*after save compress image, save also origin file*/
                    $file->move("backend/img/slider/original/", $name);
                    $_POST['image'] =  $name;
                    $data = array_map("strtolower", $_POST);
                    $slider->save($data);
                    $session->setFlashdata("msg","Slider add successfully");
                   return redirect()->route("admin/home-slider");
                }
            }catch (\Exception $e){
                $session->setFlashdata("err","Error : ".$e->getMessage());
            }
            return redirect()->route("admin/home-slider/add");
        }
        $slider = new Slider();
        $data = array(
            "home_slider"=>"active",
            'count'=>count($slider->findAll())
        );
        return view("admin/home_slider/add", $data);
    }

    public function updateSlider($id){
        if($id!==null){
            $session = session();
            $slider = new Slider();
            $sliderData= $slider->find($id);
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
                            $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);

                            $file = $this->request->getFile("image");
                            $randomName = $file->getRandomName();
                            $name = $realName."_".$randomName;

                            /*compress image*/
                            $image = \Config\Services::image()
                                ->withFile($file)
                                ->withResource()
                                ->save('backend/img/slider/compress/' .$name,10);

                            /*after save compress image, save also origin file*/
                            $file->move("backend/img/slider/original/", $name);
                            $_POST['image'] =  $name;
                        }
                    }else {
                        $_POST['image'] = $sliderData['image'];
                    }
                    $data = array_map("strtolower", $_POST);
                    $slider->update($id, $data);
                    $session->setFlashdata("msg","Slider updated successfully");
                    return redirect()->route("admin/home-slider");

                }catch (\Exception $e){
                    $session->setFlashdata("err","Error : ".$e->getMessage());
                }
                return redirect()->route("admin/home-slider/".$id);
            }
            $data = array(
                "home_slider"=>"active",
                "data"=>$sliderData,
                "count"=>count($slider->findAll())
        );
            return view("admin/home_slider/edit", $data);
        }
    }

    public function deleteSlider($id){
        $session = session();
        try {
            $slider = new Slider();
            $slider->delete($id);
            $session->setFlashdata("err","Slider has been Deleted");
            return redirect()->route("admin/home-slider");
        }catch(\Exception $e){
            $session->setFlashdata("err","Error : ".$e->getMessage());
            return redirect()->route("admin/home-slider");
        }
}

    private function modelFields($data){
        foreach ($data as $key=>$value){
                return "'$key',";
        }
    }

}
