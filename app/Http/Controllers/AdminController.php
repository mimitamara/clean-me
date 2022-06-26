<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\StoreStepRequest;
use App\Models\Category;
use App\Models\Step;
use App\Models\Task;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class AdminController extends Controller
{
    public function index(): View
    {
        $data = [];

        return view('admin.home');
    }

    public function categories(): View
    {
        return view('admin.categories', [
            'categories' => Category::all()
        ]);
    }

    public function createCategory(): View
    {
        return view('admin.create-category');
    }

    public function storeCategory(StoreCategoryRequest $request): RedirectResponse
    {
        $data = [
            'name' => $request->name,
        ];

        $image = $request->file('image');

        if ($image) {
            $path = 'uploads/' . $image->getClientOriginalName();
            Storage::disk('public')->put($path, $image->getContent());

            $data['image'] = $path;
        }

        Category::create($data);

        return redirect(route('admin.categories.index'));
    }

    public function editCategory(Category $category): View
    {
        return view('admin.category-update', [
            'category' => $category
        ]);
    }

    public function addCategoryStep()
    {
        
    }

    public function deleteCategory(Category $category)
    {
        $category->delete();

        return redirect(route('admin.categories.index'));
    }

    public function steps(): View
    {
        return view('admin.steps', [
            'categories' => Category::with('steps')->get()
        ]);
    }

//    public function createStep(): view
//    {
//        return view('admin.create-step');
//    }

    public function storeStep(StoreStepRequest $request)
    {
        $stepsCount = Step::where('category_id', $request->category_id)->count();

        Step::create(array_merge($request->validated(), [
            'order' => $stepsCount
        ]));

        return redirect(route('admin.steps.index'));
    }

    public function editStep(Step $step): View
    {
        return view('admin.edit-step', [
            'step' => $step
        ]);
    }

    public function updateStep(Request $request, Step $step)
    {
        $step->update($request->all(['name', 'instructions']));

        return redirect(route('admin.steps.index'));
    }

    public function deleteStep(Step $step)
    {
        $step->delete();

        return redirect(route('admin.steps.index'));
    }

    public function tasks()
    {
        return view('admin.tasks', [
            'tasks' => Task::all()
        ]);
    }

    public function task(Task $task)
    {
        return view('admin.task', [
            'task' => $task
        ]);
    }
}
