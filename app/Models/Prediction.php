<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prediction extends Model
{
    protected $fillable = ['prediction', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
