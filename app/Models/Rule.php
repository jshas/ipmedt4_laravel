<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
    protected $table = "rules";

    public function product(){
        return $this->belongsTo('App\Models\Product', 'id', 'rule_id');
    }

    
}
