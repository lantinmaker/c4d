<?php

namespace App\Http\Controllers\Admin\Documents;

use App\Repositories\Eloquent\ModelRepositoryEloquent as ModelRepository;
use Illuminate\Http\Request;

use App\Http\Requests\ModelRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Controllers\Admin\Contracts\BaseController as ControllerInterface;

class ModelController extends Controller implements ControllerInterface
{
    const PAGINATE_LIMIT = 25;

    private $columns = [
        'id',
        'title',
        'mmid',
        'price',
        'download',
        'fav',
        'view',
        'updated_at',
        'polygons',
        'vertices',
        'textures',
        'materials',
        'rigged',
        'animated',
        'printable_ready_3d',
        'game_ready',
        'uv_mapped',
        'unwrapped_uvs'
    ];

    private $modelRepository;

    public function __construct(ModelRepository $modelRepository)
    {
        $this->modelRepository = $modelRepository;
    }

    public function index()
    {
        $models = $this->modelRepository->get(self::PAGINATE_LIMIT, $this->columns);

        return view('admin.models.index', compact('models'));
    }

    public function files($id)
    {
        $files = $this->modelRepository->files($id);
        return view('admin.models.files', compact('files'));
    }

    public function updateFile(Request $request)
    {
    }

    public function images($id)
    {
        $images = $this->modelRepository->images($id);
        return view('admin.models.images', compact('images'));
    }

    public function updateImage(Request $request)
    {

    }

    public function edit($id)
    {
        $model = $this->modelRepository->find($id);
        return view('admin.models.edit' , compact('model'));
    }

    public function create()
    {

    }

    public function update(Request $request)
    {

    }

    public function store(Request $request)
    {

    }

    public function destory($id)
    {

    }
}
