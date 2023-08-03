<?php

namespace App\Models\LaravelRelation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepandentModel extends Model
{
    use HasFactory;
    protected $table = 'dependents';
}
