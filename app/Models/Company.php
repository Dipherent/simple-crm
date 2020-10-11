<?php

namespace App\Models;
use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function contacts(){
        return $this->hasMany('App\Models\Contact');
    }
}
