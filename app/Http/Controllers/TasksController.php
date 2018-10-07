<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{
    public function index()
    {
        $tasks = Task::orderBy('created_at', 'desc')->get();

        return view('tasks.index', [
            'tasks' => $tasks
        ]);
    }
}
