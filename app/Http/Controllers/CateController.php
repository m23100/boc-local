<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Cate;

class CateController extends Controller
{
    //
    public function index() {
    	// DB::insert('insert into cates set name="uuuuuuuu"');
    	$cates = Cate::all();
	    return view('cate', [
	        'cates' => $cates
	    ]);
	}

	public function store(Request $request){
		$this->validate($request, [
	        'name' => 'required'
	    ]);
	    $task = new Cate();
	    $task->name = $request->get('name');
	    $task->save();
	    return response()->json($task);
	}
}
