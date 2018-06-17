<?php

namespace App\Models\Admin;

use App\Models\Vip;
use App\Traits\Admin\ActionButtonTrait;
use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class User extends Model implements Transformable
{
    use TransformableTrait;
    use ActionButtonTrait;

    protected $table = "users";

    public function vip()
    {

        return $this->hasOne(Vip::class);
    }
}
