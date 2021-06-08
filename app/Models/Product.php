<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";

    public function rule(){
        return $this->hasOne('App\Models\Rule', 'id', 'rule_id');
    }





}
