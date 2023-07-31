<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    /**
     * Get the permit employee associated with the notification.
     */
    protected $fillable = ['reason', 'is_read', 'user_id', 'status'];
    /**
     * Get the data employee associated with the notification.
     */
    public function dataEmployee()
    {
        return $this->belongsTo(DataEmployee::class, 'user_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
