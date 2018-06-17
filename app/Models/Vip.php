<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vip extends Model
{
    protected $table = 'vips';

    protected $fillable = [
        'id','user_id','vip_type' , 'start_at' , 'end_at'
    ];

    public function user()
    {
        $this->belongsTo(User::class);
    }
}
