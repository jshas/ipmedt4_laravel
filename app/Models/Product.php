<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Rule;

class Product extends Model
{
    protected $table = "products";

    public function getRule(){

        return->hasone(Rule::class, 'id', 'rule');
    };

}
