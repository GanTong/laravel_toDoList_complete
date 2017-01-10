<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Task;

class TasksController extends Controller
{
    public function index()

    {

    	$tasks = Task::all();

    	return view('tasks.index', compact('tasks'));

    }


    public function show(Task $task)

    {

        $task->load('subtasks.user'); 

        return view('tasks.show', compact('task'));

    }
}
