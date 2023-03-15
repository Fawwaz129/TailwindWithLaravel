<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\TaskRequest;
use App\Models\Task;
use App\Models\User;

class TaskController extends Controller
{
    public function index(Request $request) {
        if ($request -> search) {
            $task = Task::where('task', 'LIKE', "%$request->search%")
            ->get();

            return $task;
        }
        $task = Task::paginate();
        return view('task.index', [
            'data' => $task
        ]);
        
    }
}
