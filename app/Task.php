<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public $fillable = ['description'];

    public static function stuff()
    {
        $task = new Task();
        $task->description = "Task Description";
        $task->save();
    }
}
