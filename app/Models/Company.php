<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $fillable = ['name','email','address','phone'];

    public function jobpost(){
        return $this->belongsTo(JobPost::class);
    }
}
