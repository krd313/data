<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Task extends Model
{

    protected $fillable = [
        'user_id',
        'category_id',
        'prioritu_id',
        'name',
        'description',
        'location',
        'start_date',
        'due_date',
        'complete_date'
    ];




}
