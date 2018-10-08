<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{
    public function index()
    {
        $tasks = Task::orderBy('created_at', 'desc')->get();

        return view('tasks.index', compact('tasks'));
    }

    public function store(Request $request)
    {
        $task = new Task;
        // バリデーションの代わりに名前が空欄ならデフォルト値を入れる
        $task->name = $request->name ? $request->name : "new task";
        $task->save();
        return redirect('tasks/'.$task->id.'/edit');
    }

    public function update(Request $request, Task $task)
    {
        $task->name = $request->name;
        $task->description = $request->description;
        $task->save();

        return redirect('tasks');
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return redirect('tasks');
    }

    public function edit(Task $task)
    {
        // モデル結合ルート
        // https://readouble.com/laravel/5.7/ja/routing.html#route-model-binding
        return view('tasks.edit', compact('task'));
    }
}
