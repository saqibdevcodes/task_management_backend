<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function fetchTasks()
    {
        $tasks = Task::get()->all();
        return response()->json($tasks);
    }
    public function createTask(Request $request)
    {
        $task = Task::create($request->all());
        return response()->json($task);
    }
    public function toggleTaskStatus($id)
    {
        $task = Task::find($id);
        $task->is_completed = !$task->is_completed;
        $task->save();
        return response()->json($task);
    }
    public function deleteTask($id)
    {
        Task::destroy($id);
        return response()->json(['message' => "Deleted task {$id}"]);
    }
}
