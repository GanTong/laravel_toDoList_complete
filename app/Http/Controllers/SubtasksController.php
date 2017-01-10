<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Subtask;

use App\Task;

class SubtasksController extends Controller
{
	   public function store(Request $request, Task $task)

		{

			$this->validate($request, 


				['body' => 'required|min:10'],

				['required' => 'Please fill in the :attribute',

				'min' => 'The :attribute should be of at lease :min characters']


				); 


			$subtask = new Subtask($request->all());

			$subtask->user_id = 1;


			$task->addSubtask($subtask);

			session()->flash('flash_message', 'You have successfully added a new task.');


			return back();

		}


		public function edit(Subtask $subtask)

		{


			return view('subtasks.edit', compact('subtask'));

			return back();

		}



		public function update(Request $request, Subtask $subtask)

		{

			$this->validate($request, 


			['body' => 'required|min:10'],

			['required' => 'Please fill in the :attribute',

			'min' => 'The :attribute should be of at lease :min characters']


			); 


			$subtask->update($request->all());

			//$task= Task::find($subtask->task_id);

			session()->flash('flash_message', 'You have updated the task!');


			return redirect('tasks/');


		}


		public function destroy(Subtask $subtask)
    
	    {
	        $subtask->delete();

	        session()->flash('flash_message', 'task deleted');

	        return back();
	    }


}
