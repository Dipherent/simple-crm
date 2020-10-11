<?php

namespace App\Models;
use App\Models\Company;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function company(){
        return $this->belongsTo('App\Models\Company');
    }
}
