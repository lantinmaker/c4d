<?php

namespace App\Models;

use App\Traits\Admin\ActionButtonTrait;
use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Black extends Model implements Transformable
{
    use TransformableTrait;
    use ActionButtonTrait;

    protected $table="blacks";

    protected $fillable = [
        'id' , 'user_id' , 'locked_at' , 'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
