<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Catagory;
use App\Models\Subcatagory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SubCatagoryController extends Controller
{
    public function create()
    {
        $catagories = Catagory::get();
        return view('backend.subcatagory.create', compact('catagories'));
    }
    public function store(Request $request)
    {
        $subCatagory = new Subcatagory();

        $subCatagory->cat_id = $request->cat_id;
        $subCatagory->name = $request->name;
        $subCatagory->slug = str::slug($request->name);

        $subCatagory->save();

        return redirect()->back();
    }    
    
    public function show ()
    {
        $subCatagories = Subcatagory::with('Catagory')->get();
        return view ('backend.subcatagory.list',compact('subCatagories'));
    }
    public function delete ($id)
    {
      $subCatagory = Subcatagory::find($id);
      $subCatagory->delete();

      return redirect()->back();
    }
    public function edit ($id)
    {
        $subCatagory = Subcatagory::find($id);
        $catagories = Catagory::get();
        return view('backend.subcatagory.edit',compact('subCatagory','catagories'));
    }
    public function update (Request $request ,$id)
    {
        $subCatagory = Subcatagory::find($id);

        $subCatagory->name = $request->name;
        $subCatagory->slug = str::slug($request->name);
        $subCatagory->cat_id = $request->cat_id;

        $subCatagory->save();
        return redirect('/admin/show-subcatagory');
    }
}
