<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobPost extends Model
{
    use HasFactory;

    protected $fillable = ['skill','requirement','deadline','description','status'];

    public function jobtype(){
        return $this->hasOne(JobType::class);
    }

    public function category(){
        return $this->hasOne(Category::class);
    }

    public function company(){
        return $this->hasOne(Company::class);
    }

    public function location(){
        return $this->hasOne(Location::class);
    }

}
