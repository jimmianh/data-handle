<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class articlemodel extends Model
{
    use HasFactory;
    protected $table = 'articles';
    protected $fillable = [
        'content',
        'images'
    ];

    public function user(){
        return $this->belongsTo(UserModel::class,'user_model_id');
    }
}
