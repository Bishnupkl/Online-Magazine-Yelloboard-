<?php

namespace App\Http\Controllers\Admin;

use App\Model\Category;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $array = [];

        $array['category'] = Category::orderBy('created_at','desc')->get();

        return view('admin.category.index', compact('array'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $filename = '';
        $image = $request->file('image');
        if (!empty($image)) {
            $path = base_path() . '/public/assets/admin/img';
            //for unique
            $name = uniqid() . '_' . $image->getClientOriginalName();
            //
            if ($image->move($path, $name)) {
                $filename = $name;
            }
        }

        Category::create([
            'title' => $request->input('title'),
            'status' => $request->input('status'),
            'description' => $request->input('description'),
            'image' => $filename,
            'created_by' => Auth::user()->id,
            'updated_by' => Auth::user()->id,
        ]);
        return redirect()->route('admin.category.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.category.edit', compact('category'));
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

        $category = Category::find($id);
        $category->title = $request->input('title');
        $category->status = $request->input('status');
        $category->description = $request->input('description');
        //$category->image =$request->input('image');
        $image = $request->file('image');
        if (!empty($image)) {
            $path = base_path() . '/public/assets/admin/img';
            //for unique
            $name = uniqid() . '_' . $image->getClientOriginalName();
            //
            if ($image->move($path, $name)) {
                $category->image = $name;
            }
        }

        $category->updated_by = Auth::user()->id;
        $category->created_by = Auth::user()->id;
        $category->update();
        return redirect()->route('admin.category.index');
    }


        /**
         * Remove the specified resource from storage.
         *
         * @param  int $id
         * @return \Illuminate\Http\Response
         */

        public function destroy($id)

        {
            $category = Category::find($id);


            if ($category->image) {
                unlink(public_path() . DIRECTORY_SEPARATOR . 'assets\admin\img' . DIRECTORY_SEPARATOR . $category->image);
                $category->delete();
            }


            return redirect()->route('admin.category.index');
        }



}

