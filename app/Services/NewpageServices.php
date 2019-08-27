<?php
namespace App\Services;

use App\Models\Newpage;
use Carbon\Carbon;
use phpDocumentor\Reflection\Types\Null_;

class NewpageServices{

    /**
     * Получаем все новости
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function SelestAll(){
        $datas=Newpage::where('published_at','<=',Carbon::now())
                    ->orderBy('published_at', 'asc')
                    ->get();
        return $datas;
    }

    /**
     * Получаем значение из запроса, если такого значения нету то возрошаем ошибку 404
     * @param $id
     * @return mixed
     */
    public function SelectId($id){
        $data=Newpage::find($id);
        if($data==null){
            abort(404);
        }
        return $data;
    }

    public function InsertRecord($array){
        $model=new Newpage();
        $model->title=$array['title'];
        $model->published_at=$array['published_at'];
        $model->content=$array['content'];
        $model->save();
        return $model->id;
    }

}