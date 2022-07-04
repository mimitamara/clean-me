<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaskRequest;
use App\Models\Category;
use App\Models\Task;
use App\Models\TaskStep;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TaskController extends Controller
{
    public function index()
    {
        return view('tasks.index', [
            'tasks' => Task::where('user_id', auth()->user()->id)->get(),
        ]);
    }

    public function show(Task $task): View
    {
        try {
            $stepsCount = $task->steps()->count();
            $doneSteps = $task->steps()->where('status', 'done')->count();

            if ($stepsCount) {
                $progress = ($doneSteps/ $stepsCount) * 100;
            } else {
                $progress = 0;
            }
        } catch (\Exception $exception) {
            $progress = 0;
        }

        $currentTask = $task->steps->where('status', 'waiting')->first();

        return view('tasks.show', [
            'task' => $task,
            'progress' => round($progress),
            'currentTask' => $currentTask,
        ]);
    }

    public function create(): View
    {
        return view('tasks.create', [
            'categories' => Category::all(),
        ]);
    }

    public function finishStep(TaskStep $step)
    {
        $step->status = 'done';
        $step->save();

        return redirect()->back();
    }

    public function store(StoreTaskRequest $request)
    {
        $task = Task::create([
           'user_id' => auth()->user()->id,
           'category_id' => $request->category,
           'user_comment' => $request->comment ?? 'none',
        ]);

        return redirect(route('tasks.show', $task->id));
    }
}
