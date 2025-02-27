<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{
    protected $table = 'work_experience';
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
