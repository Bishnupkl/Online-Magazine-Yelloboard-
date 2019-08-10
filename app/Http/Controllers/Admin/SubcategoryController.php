<?php

namespace App\Http\Controllers\Admin;

use App\Model\Subcategory;
use App\Model\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $array = [];

        $array['subcategory'] = Subcategory::orderBy('created_at','desc')->get();

        return view('admin.subcategory.index', compact('array'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();

        return view('admin.subcategory.create',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Subcategory::create([
            'category_id'=>$request->input('category_id'),
            'title' => $request->input('title'),
            'status' => $request->input('status'),
//            'created_by' => Auth::user()->id,
//            'updated_by' => Auth::user()->id,
        ]);
        return redirect()->route('admin.subcategory.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subcategory = Subcategory::find($id);

        $category = Category::find($subcategory->category_id);

        return view('admin.subcategory.edit', compact('subcategory','category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $subcategory = Subcategory::find($id);
        $subcategory->title = $request->input('title');
        $subcategory->status = $request->input('status');
//        $subcategory->updated_by = Auth::user()->id;
//        $subcategory->created_by = Auth::user()->id;
        $subcategory->update();

        return redirect()->route('admin.subcategory.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subcategory = Subcategory::find($id);
        $subcategory->delete();

        return redirect()->route('admin.subcategory.index',compact('subcategory'));
    }

    public function getSubcat(Request $request)
    {
        //$s = $request->get('id');
        //dd('kajshdfk');
        $a = Subcategory::where('category_id',$request->input('id'))->get();
        //dd($a);

        //return $a;
        $bb ='<option value="">Choose Sub Category</option>';
        foreach ($a as $f){
            $bb .="<option value='$f->id'> $f->title </option>";
        }
        return $bb;

    }



}
