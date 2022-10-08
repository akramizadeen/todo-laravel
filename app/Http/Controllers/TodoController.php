<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Domain\Facades\TodoFacade;
use Illuminate\Http\Request;

class TodoController extends ParentController
{
    public function index()
    {
        $response['tasks'] = TodoFacade::all();
        return view('pages/todo/index')->with($response);
    }

    public function store(Request $request)
    {
        TodoFacade::store($request->all());
        return redirect()->back();
    }

    public function delete($task_id)
    {
        TodoFacade::delete($task_id);
        return redirect()->back();
    }

    public function done($task_id)
    {
        TodoFacade::done($task_id);
        return redirect()->back();
    }
}
