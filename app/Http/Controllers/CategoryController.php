<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Illuminate\Validation\Rule;

class CategoryController extends Controller
{
    /**
     * Finds path for specific $category - returns table with names of all parent categories.
     * 
     * @param Category $category
     * @return Array
     */
    private function getPath(Category $category)
    {
        if($category->parent_id == NULL)
        {
            return [];
        }
        else
        {
            $parent = Category::find($category->parent_id);
            return array_merge([$parent], $this->getPath($parent));
        }
    }

    /**
     * Validates data given in request
     */
    private function validateData(Request $request)
    {
        $ids = Category::pluck('id')->toArray();

        return $request->validate([
            'name' => 'required|min:3|max:25',
            'parent_id' => [
                'nullable',
                'integer',
                Rule::in($ids),
            ],
        ]);
    }

    /**
     * Show all main categories.
     * 
     * @return View
    */
    public function index()
    {
        $categories = Category::where('parent_id', NULL)->get();
        return view('category.index', compact('categories'));
    }

    /**
     * Returns create form.
     * 
     * @return View
     */
    public function create()
    {
        // get all categories
        $categories = Category::all();

        return view('category.create', compact('categories'));
    }

    /**
     * Create new category and store it in database.
     * 
     * @param Request $request
     * @return Redirect
     */
    public function store(Request $request)
    {
        // array of categories' ids
        $ids = Category::pluck('id')->toArray();

        $valdatedData = $this->validateData($request);

        $category = new Category($valdatedData);
        $category->save();

        return redirect()
            ->route('category.show', ['category' => $category])
            ->with('success', 'Category created. Now You are on <b>' . $category->name . '</b> category page.');
    }

    /**
     * Show data for specific category.
     * 
     * @param Category $category
     * @return View
     */
    public function show(Category $category)
    {   
        // path for $category
        $path = array_reverse($this->getPath($category));

        return view('category.show', compact('category', 'path'));
    }

    /**
     * Returns edit form.
     * 
     * @return View
     */
    public function edit(Category $category)
    {
        // get all categories
        $categories = Category::all();

        return view('category.edit', compact('category', 'categories'));
    }

    /**
     * Updates specyfic category's data.
     * 
     * @param Category $category
     * @param Request $request
     * @return Redirect
     */
    public function update(Category $category, Request $request)
    {
        $validatedData = $this->validateData($request);

        $category->name = $validatedData['name'];
        $category->parent_id = $validatedData['parent_id'];
        $category->save();

        return redirect()
            ->route('category.show', ['category' => $category])
            ->with('success', 'Category modified. Now You are on <b>' . $category->name . '</b> category page.');
    }

    /**
     * Shows warning info before deleting category.
     * 
     * @param Category $category
     * @return View
     */
    public function deleteWarning(Category $category)
    {
        return view('category.warning.delete', compact('category'));
    }

    /**
     * Deletes category with it subcategories.
     * 
     * @param Category $category
     */
    public function destroy(Category $category)
    {
        // save parent_id for redirect
        $parentId = $category->parent_id;

        $category->delete();

        return redirect()
            ->route('category.show', ['category' => $parentId])
            ->with('success', 'Category deleted');
    }
}
