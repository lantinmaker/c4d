<?php
/**
 * Created by PhpStorm.
 * User: Maker <maker68@163.com>
 * GITHUB: HerbCollins <http://github.com/herbcollins>
 * Date: 2018/5/26 0026
 * Time: 22:48
 */

namespace App\Repositories\Eloquent;


use App\Models\Model;
use App\Repositories\Contracts\ModelRepository as ModelRepositoryInterface;
use Prettus\Repository\Eloquent\BaseRepository;

class ModelRepositoryEloquent extends BaseRepository implements ModelRepositoryInterface
{
    public function model()
    {
        return Model::class;
    }

    public function boot()
    {
        parent::boot(); // TODO: Change the autogenerated stub
    }

    public function files($id)
    {
        $model = $this->find($id);
        return $model->file;
    }

    public function images($id)
    {
        $model = $this->find($id);
        return $model->image;
    }

    public function get($limit = 10 , $colums = "[*]")
    {
        $lists =  $this->orderBy('updated_at' , 'desc')->paginate($limit , $colums );

        if(count($lists)){
            foreach ($lists as &$list){
                $list->button = $this->model->getActionButtonsWithMore('models' , $list->id);
            }
        }

        return $lists;
    }
}