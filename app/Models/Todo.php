<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 'todos';
    protected $primaryKey = 'task_id';
    protected $fillable = ['task'];
}
