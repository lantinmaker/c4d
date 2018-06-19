<?php

namespace App\Models;

use App\Traits\Admin\ActionButtonTrait;
use Illuminate\Database\Eloquent\Model as BaseModel;
use Prettus\Repository\Traits\TransformableTrait;

class Model extends BaseModel
{
    use TransformableTrait;
    use ActionButtonTrait;

    protected $table = "models";

    protected $fillable = [
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
        '3d_printable_ready',
        'game_ready',
        'uv_mapped',
        'unwrapped_uvs'
    ];

    public function file()
    {
        $this->hasManyThrough(File::class , 'model_files');
    }

    public function image()
    {
        $this->hasManyThrough(Image::class , ModelImage::class);
    }
}
