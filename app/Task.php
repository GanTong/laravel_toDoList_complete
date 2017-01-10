<?php

namespace App;

use User;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

    protected $fillable = ['title'];


     public function subtasks()

    {
    	 return $this->hasMany(Subtask::class);

    }


    public function addSubtask(Subtask $subtask)

    {

    	return $this->subtasks()->save($subtask);

        
    }


    public function user()
    {
        return $this->hasOne(User::class);
    }



}
