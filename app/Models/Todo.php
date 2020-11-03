<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
     // The field completed will be false by default 
   protected $attributes = [

    'completed' => false,

];
}
