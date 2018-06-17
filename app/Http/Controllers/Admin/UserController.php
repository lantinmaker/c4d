<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Contracts\BaseController;
use App\Repositories\Eloquent\UserRepositoryEloquent as UserRepository;
use Illuminate\Http\Request;


use App\Http\Controllers\Controller;

class UserController extends Controller implements BaseController
{
    protected $userRep;

    public function __construct(UserRepository $userRepository)
    {
        $this->middleware('auth:admin');

        $this->userRep = $userRepository;

    }

    public function index()
    {
        $attrs = [
            'id' , 'name' , 'email' , 'score' , 'phone' , 'status' , 'is_vip' , 'created_at' , 'updated_at'
        ];
        $users = $this->userRep->getAll($attrs);
        return view('admin.users.index' , compact('users'));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        try{

            $this->userRep->create();

            return response()->json([
                'code' => 0,
                'message' => 'success'
            ]);
        }catch (\Exception $e){
            return response()->json([
                'code' => $e->getCode(),
                'message' => $e->getMessage()
            ]);
        }
    }

    public function destory($id)
    {
        // TODO: Implement destory() method.
    }

    public function edit($id)
    {
        // TODO: Implement edit() method.
    }

    public function update()
    {
        // TODO: Implement update() method.
    }

    public function vip()
    {
        $attrs = [
            'id' , 'name' , 'email' , 'score' , 'phone' , 'status' , 'is_vip' , 'created_at' , 'updated_at'
        ];
        $users = $this->userRep->vip($attrs);
        return view('admin.users.vip' , compact('users'));
    }

    public function black()
    {
        $attrs = [
            'id' , 'name' , 'email' , 'score' , 'phone' , 'status' , 'is_vip' , 'created_at' , 'updated_at'
        ];
        $users = $this->userRep->black($attrs);
        return view('admin.users.black' , compact('users'));
    }

    public function data()
    {
        return view('admin.users.data');
    }
}
