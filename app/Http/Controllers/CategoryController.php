<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data['current'] = "category";
        $categories = Category::paginate(3);
        $data['categories'] = $categories;
        return view('dashboard.category.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'is_home' => 'nullable',
            'position' => 'nullable',
            'language' => 'required',
            'category_image' => 'required',
        ]);
        $category = Category::create($validated);
        // TODO: orderby
        // $categories = Category::paginate(2);
        // dd($categories);
        // $data['categories'] = $categories;
        return redirect('/dashboard/category')->with('status', 'New Category Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::where('id', $id)->get()->first();
        $data['category'] = $category;
        return view('dashboard.category.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'is_home' => 'numeric|nullable',
            'position' => 'numeric|nullable',
            'language' => 'string|required',
            'category_image' => 'string|required',
        ]);
        Category::findOrFail($id)->update($validated);
        return redirect('/dashboard/category')->with('status', 'A Category Was Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::where('id', $id)->get()->first();
        $category->delete();
        return redirect('/dashboard/category')->with('status', 'A Category Was Deleted!');
    }
}
