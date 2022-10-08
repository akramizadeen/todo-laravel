<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends ParentController
{

    protected $task;

    // public function __construct()
    // {
    //     $this->task = new Todo();
    // }

    public function index()
    {
        $response['tasks'] = Todo::all();

        return view('pages/todo/index')->with($response);
    }

    public function store(Request $request)
    {
        $this->task->create($request->all());

        return redirect()->back();
    }

    public function delete($task_id)
    {
        $task = $this->task->find($task_id);
        $task->delete();

        return redirect()->back();
    }

    public function done($task_id)
    {
        $task = $this->task->find($task_id);
        $task->done = !$task->done;
        $task->update();

        return redirect()->back();
    }
}
