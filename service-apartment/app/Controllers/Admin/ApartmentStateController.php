<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ApartmentStateModel;
use App\Models\HomeStateModel as State;


class ApartmentStateController extends BaseController
{
    public function index()
    {
        $result_number  = 10;
        if($this->request->getPostGet()){
            $result_number = $this->request->getVar("result_number");
        }
        $model = new ApartmentStateModel();
        $state = $model->orderBy("id","desc")->paginate($result_number);

        $data = array(
            "apartment_state"=>"active",
            "data"=>$state,
            'pager' =>$model->pager,
            'stateCount'=>count($model->findAll())
        );
//        return $model->pager->getPerPage();

        return view("admin/apartment_state/index", $data);
    }

    public function addState(){
        if($this->request->getPostGet()){
            $session = session();
            $state = new ApartmentStateModel();
            try {
                $data = array_map("strtolower", $_POST);
                $state->save($data);
                $session->setFlashdata("msg","State added successfully");
                return redirect()->route("admin/apartment-state");
            }catch (\Exception $e){
                $session->setFlashdata("err","Error : ".$e->getMessage());
            }
            return redirect()->route("admin/apartment-state/add");
        }
        $state = new ApartmentStateModel();
        $data = array(
            "apartment_state"=>"active",
            'stateCount'=>count($state->findAll())
        );
        return view("admin/apartment_state/add", $data);
    }

    public function deleteState($id){
        $session = session();
        try {
            $state = new ApartmentStateModel();
            $state->delete($id);
            $session->setFlashdata("err","State has been Deleted");
            return redirect()->route("admin/apartment-state");
        }catch(\Exception $e){
            $session->setFlashdata("err","Error : ".$e->getMessage());
            return redirect()->route("admin/apartment-state");
        }
    }

}
