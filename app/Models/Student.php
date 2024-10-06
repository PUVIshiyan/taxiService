<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mockery\Matcher\Subset;
use App\Models\Grade;
use App\Models\Subject;

class Student extends Model
{
    use HasFactory;
    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }

    public function subjects() 
    {
        return $this->belongsToMany(Subject::class);
    }

    
}
