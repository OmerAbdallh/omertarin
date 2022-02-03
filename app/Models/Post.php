<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Post extends Model
{
    use HasFactory;

    use softDeletes;
    protected $dates=['deleted_at'];
    protected $fillable=[
        'user_id','title','content','photo','slug'

    ];
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    
}
