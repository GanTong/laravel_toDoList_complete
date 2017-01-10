<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subtask extends Model
{
    protected $fillable = ['body'];


public function task()

   {  

   		return $this->belongsTo(Task::class);

   }


   public function user()

   {
   		return $this->belongsTo(User::class);

   }
}
