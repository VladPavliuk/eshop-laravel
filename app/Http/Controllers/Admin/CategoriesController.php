<?php

namespace App\Http\Controllers\Admin;

use App\Exceptions\ErrorCommand;
use App\Http\Requests\Categories\Store;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.categories.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Categories\Store $request
     * @return \Illuminate\Http\Response
     */
    public function store(Store $request)
    {
        Category::create([
            'title' => $request->title,
            'image_path' => $request->hasFile('photo')
                ? app('photoService')->saveToPublic($request->file('photo'), 'categories', $request->title)
                : ''
        ]);

        return redirect()->intended(route('admin.categories.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.categories.show', [
            'category' => Category::where('id', $id)->first()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        return view('admin.categories.edit', [
            'category' => Category::where('id', $id)->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Category::where('id', $id)->update($request->only([
            'title',
            'image_path' => $request->hasFile('photo')
                ? app('photoService')->saveToPublic($request->file('photo'), 'categories', $request->title)
                : ''
        ]));

        return redirect()->intended(route('admin.categories.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        app('productsCategoriesService')->destroy($id);
        return redirect()->intended(route('admin.categories.index'));
    }
}
