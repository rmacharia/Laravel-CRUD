<?php

namespace App\Http\Controllers;



use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Route;



class TasksController extends Controller
{
    public function index()
    {
        

         $tasks = Task::latest()->paginate(5);
      
        return view('task.index',compact('tasks'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        

        return view('task.create');
    }

    public function store(Request $request)
    {
               
        $task = new Task;
        $task->case_id = $request->case_id;
        $task->client_name = $request->client_name;
        $task->case_type = $request->case_type;
        $task->status = $request->status;
        $task->priority = $request->priority;
        $task->hearing_date = $request->hearing_date;
        $task->description = $request->description;
        $task->save();
    
        return redirect()->route('tasks.index')->with('success','Post created successfully.');
    }

    public function show(Task $task)
    {
        

        return view('task.show', compact('task'));
    }

    public function edit(Task $task)
    {
        

        return view('task.edit', compact('task'));
    }

    public function update(UpdateTaskRequest $request, Task $task)
    {
        $task->update($request->validated());

        return redirect()->route('tasks.index');
    }

    public function destroy(Task $task)
    {
        

        $task->delete();

        return redirect()->route('task
        .index');
    }
}
