<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Task;

class TaskController extends Controller
{
    //
    public function index() {
    	$tasks =  DB::table('tasks')->paginate(2);
    	// $tasks = Task::all();
	    return view('task', [
	        'tasks' => $tasks
	    ]);
	}

	public function store(Request $request) {
	    $this->validate($request, [
	        'name' => 'required',
	        'content' => 'required'
	    ]);
	    $task = new Task();
	    $task->name = $request->get('name');
	    $task->content = $request->get('content');
	    $task->save();
	    return response()->json($task);
	}

	public function destroy($id) {
	    $task = Task::find($id);
	    $task->delete();
	    return response()->json(['success']);
	}

	public function show($id) {
	    $task = Task::find($id);
	    return response()->json($task);
	}

	public function update(Request $request, $id) {
	    $this->validate($request, [
	        'name' => 'required',
	        'content' => 'required'
	    ]);
	    $task = Task::find($id);
	    $task->name = $request->get('name');
	    $task->content = $request->get('content');
	    // print_r($task);
	    $task->save();
	    return response()->json($task);
	}
}
