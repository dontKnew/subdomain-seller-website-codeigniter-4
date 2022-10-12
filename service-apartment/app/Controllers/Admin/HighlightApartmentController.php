<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\HighlightApartmentModel;
use App\Models\ApartmentModel;


class HighlightApartmentController extends BaseController
{
    public function index()
    {
        $result_number  = 5;
        if($this->request->getPostGet()){
            $result_number = $this->request->getVar("result_number");
        }
        $model = new HighlightApartmentModel();
        $highlight = $model->orderBy("id","desc")->paginate($result_number);

        foreach ($highlight as $key=>$v){
            $m = new ApartmentModel();
            $apartment = $m->select("title, id")->find($v['service_apartment_id']);
            if($apartment['id']==$v['service_apartment_id']){
              $highlight[$key]["title"] = $apartment['title'];
            }
    }
//        echo "<pre>";
//        echo  print_r($highlight);
//        echo "</pre>";
//        exit;

        $data = array(
            "highlight_apartment"=>"active",
            "data"=>$highlight,
            'pager' =>$model->pager,
            'highlightCount'=>count($model->findAll())
        );
//        return $model->pager->getPerPage();

        return view("admin/highlight_apartment/index", $data);
    }

    public function addHighlight(){
        if($this->request->getPostGet()){
            $session = session();
            $highlight = new HighlightApartmentModel();
            try {
                $id = $this->request->getVar("service_apartment_id");
                if($highlight->where("service_apartment_id", $id)->find()){
                    $session->setFlashdata("err","That's Apartment is already added");
                }else {
                    $data = array_map("strtolower", $_POST);
                    $highlight->save($data);
                    $session->setFlashdata("msg","Highlight Apartment added successfully");
                }
                return redirect()->route("admin/highlight-apartment");
            }catch (\Exception $e){
                $session->setFlashdata("err","Error : ".$e->getMessage());
            }
            return redirect()->route("admin/highlight-apartment/add");
        }

        $highlight = new HighlightApartmentModel();

        $apartment = new ApartmentModel();
        $apartment = $apartment->findAll();

        $uniqueApartment = [];

        foreach($apartment as $key=>$value){
            if($highlight->where("service_apartment_id", $value['id'])->find()){
            }else {
                $uniqueApartment[$key]= $value;
            }
        }

        $data = array(
            "highlight_apartment"=>"active",
            'highlightCount'=>count($highlight->findAll()),
            "data"=>$uniqueApartment,
        );
        return view("admin/highlight_apartment/add", $data);
    }

    public function deleteHighlight($id){
        $session = session();
        try {
            $highlight = new HighlightApartmentModel();
            $highlight->delete($id);
            $session->setFlashdata("err","Highlight Apartment has been Deleted");
            return redirect()->route("admin/highlight-apartment");
        }catch(\Exception $e){
            $session->setFlashdata("err","Error : ".$e->getMessage());
            return redirect()->route("admin/highlight-apartment");
        }
    }



}
