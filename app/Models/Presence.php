<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presence extends Model
{
    use HasFactory;

    protected $table = 'presence';
    protected $fillable = ['type','user_id','picture','time','late'];

    public function user()
    {
        return $this->belongsTo(user::class);
    }
}
