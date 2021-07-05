<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TasksController extends Controller
{
    public function index()
    {
        $tasks = Task::all();

        return view('tasks.index', ['tasks' => $tasks]);
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $task = new Task;
        $task->title = $request->get('title');
        $task->description = $request->get('description');

        $task->save();

        return redirect()->route('tasks.index');
    }

    public function edit($id)
    {
        $NewTask = Task::find($id);

        return view('tasks.edit', ['task' => $NewTask]);
    }

    public function update(Request $request, $id)
    {
        $NewTask == Task::find($id);
        $NewTask->title = $request->get('title');
        $NewTask->description = $request->get('description');

        $NewTask->save();

        return redirect()->route('tasks.index');
    }

    public function view($id)
    {
        $NewTasks = Task::find($id);

        return view('tasks.view', ['task'=>$NewTasks]);
    }

    public function destroy($id)
    {
        Task::find($id)->delete();

        return redirect()->route('tasks.index');
    }

}
