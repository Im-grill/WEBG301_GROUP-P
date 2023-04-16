<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pitch extends Model
{
    use HasFactory;
    protected $table = 'pitch';
    protected $primaryKey = 'id';
    protected $fillable = [
        'Pitch',
        'Status',
    ];

    //1 sân bóng chỉ có thể sở hữu bởi 1 User
    public function user()
    {
        return $this->hasOne(User::class, 'user_id', 'id');
    }
}
