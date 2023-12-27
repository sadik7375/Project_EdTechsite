<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\admin\Course;
use App\Models\User;
class Orders extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'phone', 'amount', 'status', 'transaction_id', 'currency',

    ];
    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id','id');
    }
    public function user()
    {
        return $this->belongsTo(User::class,'email','email');
    }

}
