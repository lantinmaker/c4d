<?php
/**
 * Created by PhpStorm.
 * User: Maker <maker68@163.com>
 * GITHUB: HerbCollins <http://github.com/herbcollins>
 * Date: 2018/5/29 0029
 * Time: 10:47
 */

namespace App\Repositories\Eloquent;


use App\Models\Admin\User;
use App\Repositories\Contracts\UserRepository as UserRepositoryInterface;
use Prettus\Repository\Criteria\RequestCriteria;
use Prettus\Repository\Eloquent\BaseRepository;

class UserRepositoryEloquent extends BaseRepository implements UserRepositoryInterface
{
    public function model()
    {
        return User::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

    public function createUser(array $attributes)
    {
        $res = $this->create($attributes);
        if ($res){
            flash('用户新增成功','success');
        }else{
            flash('用户新增失败','error');
        }
        return $res;
    }

    public function getAll($columns = ['*'])
    {
        $list = $this->all($columns)->toArray();
        foreach ($list as $key => $value) {
            $list[$key]['button'] = $this->model->getActionButtons('users',$value['id']);
        }
        return $list;
    }

    public function vip($columns = ['*'])
    {
        $users = User::where(['is_vip' => 'y'])->with('vip')->paginate(20);

        if(count($users)){
            foreach ($users as &$user){
                $user->button = $this->model->getActionButtons('users' , $user->id);
            }
        }

        return $users;
    }

    public function black($columns = ['*'])
    {
        $list = $this->findWhere(['status' => "3"] , $columns)->toArray();

        foreach ($list as $key => $value) {
            $list[$key]['button'] = $this->model->getActionButtons('users',$value['id']);
        }
        return $list;
    }
}