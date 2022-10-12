<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\HomeSliderModel;

class SearchController extends BaseController
{
    public function index($table=null, $input=null)
    {
        if($table!==null && $input !==null){

            $slider = new HomeSliderModel();
            switch($table){
                case "homeslider":
                    $data =  $slider->orLike("id", $input, "both");
                    $data =  $slider->orLike("title", $input, "both");
                    $data = $slider->orLike("sub_title", $input, "both");
                    $data = $slider->orLike("youtube_url", $input, "both");
                    $data = $slider->orLike("yt_video_title", $input, "both");
                    $data = $slider->orLike("status", $input, "both");
                    $data = $slider->orLike("sub_title", $input, "both");
                    $data = $data->findAll();
                    if($data){
                           echo'
                        <div class="table-responsive">
                            <table class="table table-head-bg-primary table-striped table-hover">
                                <thead>
                                <tr>';
                            unset($data[0]['created_at']);
                            unset($data[0]['updated_at']);
                            foreach ($data[0] as $key => $value){
                                    echo '<th>'.ucwords($key).'</th>';
                            }
                            echo '<th>Action</th>
                                </tr>
                                </thead>
                                <tbody>';
                                 foreach ($data as $value){
                                    echo '
                                      <tr>
                                        <td>'.$value['id'].'</td>
                                        <td>'.$value['title'].'</td>
                                        <td>'.$value['sub_title'].'</td>
                                        <td>'.$value['youtube_url'].'</td>
                                        <td>'.$value['yt_video_title'].'</td>
                                        <td>
                                            <img src="'.base_url()."/backend/img/slider/compress/".$value['image'].'"
                                                 alt="'.$value['title'].'" width="100" height="auto">
                                        </td>
                                        <td>'.$value['status'].'</td>
                                        <td>
                                            <a href="'.base_url()."/admin/home-slider/delete/".$value['id'].'" class="btn btn-sm btn-danger">
                                                <i class="la la-trash"></i> Delete
                                            </a>
                                            <a href="'.base_url()."/admin/home-slider/".$value['id'].'"
                                               class="btn btn-sm btn-success">
                                                <i class="la la-pencil-square"></i>EDIT
                                            </a>
                                        </td>

                                    </tr>';
                                    }
                                echo '
                                </tbody>
                            </table>
                    </div>';
                    }
                    break;

                default:
                    echo "table not found";
            }
        }

    }
}
